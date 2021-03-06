<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

global $phpbb_root_path, $phpEx, $user, $db, $config, $cache, $template, $auth;

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : 'forum/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx); 
include($phpbb_root_path . 'includes/bbcode.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('ucp');

$friends_online = [];
$friends_offline = [];
$coins;
$newNotification = false;

$u_images = 'media/mod_nexussidebar/images/';

define('MAX_FRIENDS',5); // Max number of friends in friends list

if ($user->data['user_id'] != ANONYMOUS)
{	
	$u_privatemsgs = append_sid("{$phpbb_root_path}ucp.$phpEx", 'i=pm&amp;folder=inbox');
	$u_friend = append_sid("{$phpbb_root_path}ucp.$phpEx", 'i=zebra&amp;mode=friends');
	$u_profile = append_sid("{$phpbb_root_path}ucp.$phpEx");
	$u_search_self = append_sid("{$phpbb_root_path}search.$phpEx", 'search_id=egosearch');
	$u_logout = JRoute::_('index.php?option=com_users&task=user.logout').'&'.JUtility::getToken().'=1';
	
	/* copy from functions.php */
	$l_privmsgs_text = $l_privmsgs_text_unread = '';
	
	// Obtain number of new private messages if user is logged in
	if (!empty($user->data['is_registered']))
	{
		if ($user->data['user_new_privmsg'])
		{
			$l_message_new = ($user->data['user_new_privmsg'] == 1) ? $user->lang['NEW_PM'] : $user->lang['NEW_PMS'];
			$l_privmsgs_text = sprintf($l_message_new, $user->data['user_new_privmsg']);
	
			if (!$user->data['user_last_privmsg'] || $user->data['user_last_privmsg'] > $user->data['session_last_visit'])
			{
				$sql = 'UPDATE ' . USERS_TABLE . '
					SET user_last_privmsg = ' . $user->data['session_last_visit'] . '
					WHERE user_id = ' . $user->data['user_id'];
				$db->sql_query($sql);
			}
			$newNotification = true;
		}
		else
		{
			$l_privmsgs_text = $user->lang['NO_NEW_PM'];
		}
	
		$l_privmsgs_text_unread = '';
	
		if ($user->data['user_unread_privmsg'] && $user->data['user_unread_privmsg'] != $user->data['user_new_privmsg'])
		{
			$l_message_unread = ($user->data['user_unread_privmsg'] == 1) ? $user->lang['UNREAD_PM'] : $user->lang['UNREAD_PMS'];
			$l_privmsgs_text_unread = sprintf($l_message_unread, $user->data['user_unread_privmsg']);
		}
	}
	/* functions.php end */
	
	/* Code below is a modified copy from ucp.php */

	// Output listing of friends online
	$update_time = $config['load_online_time'] * 60;

	$sql = $db->sql_build_query('SELECT_DISTINCT', array(
			'SELECT'	=> 'u.user_id, u.username, u.username_clean, u.user_colour, MAX(s.session_time) as online_time, MIN(s.session_viewonline) AS viewonline',

			'FROM'		=> array(
					USERS_TABLE		=> 'u',
					ZEBRA_TABLE		=> 'z'
			),

			'LEFT_JOIN'	=> array(
					array(
							'FROM'	=> array(SESSIONS_TABLE => 's'),
							'ON'	=> 's.session_user_id = z.zebra_id'
					)
			),

			'WHERE'		=> 'z.user_id = ' . $user->data['user_id'] . '
		AND z.friend = 1
		AND u.user_id = z.zebra_id',

			'GROUP_BY'	=> 'z.zebra_id, u.user_id, u.username_clean, u.user_colour, u.username',

			'ORDER_BY'	=> 'u.username_clean ASC',
	));

	$result = $db->sql_query($sql);
	
	while ($row = $db->sql_fetchrow($result))
	{
		$which = (time() - $update_time < $row['online_time'] && ($row['viewonline'] || $auth->acl_get('u_viewonline')));
		
		if($which)
		{
			$friends_online[] = '<a href="' . get_username_string('profile', $row['user_id'], $row['username'], $row['user_colour']) . '"><li><img class="icon-img" src="' . $u_images . 'online.png "> ' . $row['username'] . '</li</a>';
		}
		else
		{
			$friends_offline[] = '<a href="' . get_username_string('profile', $row['user_id'], $row['username'], $row['user_colour']) . '"><li><img class="icon-img" src="' . $u_images . 'offline.png "> <span>' . $row['username'] . '</span></li></a>';
		}
		
		/*
		$template->assign_block_vars("friends_{$which}", array(
				'USER_ID'		=> $row['user_id'],

				'U_PROFILE'		=> get_username_string('profile', $row['user_id'], $row['username'], $row['user_colour']),
				'USER_COLOUR'	=> get_username_string('colour', $row['user_id'], $row['username'], $row['user_colour']),
				'USERNAME'		=> get_username_string('username', $row['user_id'], $row['username'], $row['user_colour']),
				'USERNAME_FULL'	=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']))
		);
		*/
		
	}
	$db->sql_freeresult($result);

	/* copy end */

	make_jumpbox(append_sid("{$phpbb_root_path}viewforum.$phpEx"));
	
	// Grab info for profile section
	
	$sql = "SELECT *
	FROM " . PROFILE_FIELDS_DATA_TABLE . "
	WHERE user_id =" . $user->data['user_id'];
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);
	$coins = $row['pf_coins'] ? $row['pf_coins'] : 0;
	
	
}

$warningImage = JURI::base() . 'images/Warning.png';
$username = $user->data['username'];
$avatar = get_user_avatar($user->data['user_avatar'], $user->data['user_avatar_type'], $user->data['user_avatar_width'], $user->data['user_avatar_height'], 'USER_AVATAR', true);
$cookieIssueInfo = $params->get('cookie-issue-info');

require( JModuleHelper::getLayoutPath( 'mod_nexussidebar' ) );
?>
