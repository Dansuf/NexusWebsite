<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<?php 
$document = JFactory::getDocument();
$document->addScript($scriptPath);
?>

<div id="usr-nav-reference" onclick="showNav()">
	<div class="hex" id="usr-nav-reference-hex">
		<div>
			<?php echo $avatar ?><span><?php echo $username ?></span>
		</div>
	</div>
</div>
<nav id="usr-nav">
			<div id="usr-nav-wrap">
				<div>
				<div id="usr-nav-name">
							<?php echo $avatar ?><span><?php echo $username ?></span><div class="heex"><div></div></div>
				</div>
				<hr class="sep">
				<div class="usr-nav-section">
					<h3><?php echo JText::_('TMPL_FRACTAL_NOTIFICATIONS'); ?>:</h3>
					<ul>
						<li><img class="icon-img" src="<?php echo $u_images . 'envelope.png'; ?>"> <a href="<?php echo $u_privatemsgs; ?>"><?php echo $l_privmsgs_text; ?></a></li>
					</ul>
				</div>
				<hr class="sep">
				<div class="usr-nav-section">
					<h3><img src="<?php echo $u_images . 'friends.png'; ?>"> <span><?php echo JText::_('TMPL_FRACTAL_FRIENDS'); ?>:</span></h3>
					<ul>
						<?php 
						if($friends_online || $friends_offline)
						{
							if(sizeof($friends_online) + sizeof($friends_offline) <= MAX_FRIENDS)
							{
								foreach($friends_online as &$friend)
								{
									echo $friend;
								}
								foreach($friends_offline as &$friend)
								{
									echo $friend;
								}
							} 
							else if(sizeof($friends_online) > MAX_FRIENDS)
							{
								for($i=0;$i < MAX_FRIENDS; $i++)
								{
									echo $friends_online[$i];
								}
							}
							else
							{
								foreach($friends_online as &$friend)
								{
									echo $friend;
								}
								if(sizeof($friends_offline) < (MAX_FRIENDS-sizeof($friends_online)))
								{
									for($i=0;$i < sizeof(friends_offline); $i++)
									{
										echo $friends_offline[$i];
									}
								}
								else 
								{
									for($i=0;$i < (MAX_FRIENDS-sizeof($friends_online)); $i++)
									{
										echo $friends_offline[$i];
									}
								}
							}
						}
						else
							echo JText::_('TMPL_FRACTAL_NO_FRIENDS');
						?>
						<li class="more"><a href="<?php echo $u_friend; ?>"><?php echo JText::_('TMPL_FRACTAL_MORE'); ?> <img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></a></li>
					</ul>
				</div>
				<hr class="sep">
				<div class="usr-nav-section">
					<h3><?php echo JText::_('TMPL_FRACTAL_PROFILE'); ?>:</h3>
					<table>
						<tr><td><img class="icon-img" src="<?php echo $u_images . 'coin.png'; ?>"> <span><?php echo JText::_('TMPL_FRACTAL_COINS'); ?>:</span></td><td><?php echo $coins; ?></td></tr>
						<tr><td><img class="icon-img" src="<?php echo $u_images . 'clock.png'; ?>"> <span><?php echo JText::_('TMPL_FRACTAL_TIME_PLAYED'); ?>:</span></td><td>2h30min</td></tr>
					</table>
					<div class="more"><a href="<?php echo append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $user->data['user_id']); ?>"><?php echo JText::_('TMPL_FRACTAL_MORE'); ?> <img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></a></div>
				</div>
				<hr class="sep">
				<div class="usr-nav-section">
					<h3><img src="<?php echo $u_images . 'stats.png'; ?>"> <span><?php echo JText::_('TMPL_FRACTAL_STATS'); ?>:</span></h3>
					<ul>
						<li>Heroes <img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></li>
						<li>Craftplay <img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></li>
						<li>Bananacraft <img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></li>
						<li class="more"><?php echo JText::_('TMPL_FRACTAL_MORE'); ?> <img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></li>
					</ul>
				</div>
				<hr class="sep">
				<div class="usr-nav-section">
					<h3><?php echo JText::_('TMPL_FRACTAL_OTHER'); ?>:</h3>
					<ul>
						<li><a href="<?php echo $u_profile; ?>"><?php echo JText::_('TMPL_FRACTAL_UCP'); ?></a></li>
						<?php if($auth->acl_get('a_') && !empty($user->data['is_registered'])) echo '<li><a href="' . append_sid("{$phpbb_root_path}adm/index.$phpEx", false, true, $user->session_id) .'">' . JText::_('TMPL_FRACTAL_ACP') . '</a></li>'; ?>
						<?php if(JFactory::getUser()->authorise('core.edit', 'com_contact')) echo '<li><a href="administrator">' . JText::_('TMPL_FRACTAL_JOOMLA_ADMIN') . '</a>'; ?>
						<?php if(JFactory::getUser()->authorise('core.create', 'com_content')) echo '<li><a href="/joomla/index.php/submit-an-article">' . JText::_('TMPL_FRACTAL_NEW_ARTICLE') . '</a></li>'; ?>
						<li><a href="<?php echo $u_search_self; ?>"><?php echo JText::_('TMPL_FRACTAL_POSTS'); ?></a></li>
						<li><img class="icon-img" src="<?php echo $u_images . 'coin.png'; ?>"> <a href="#"><?php echo JText::_('TMPL_FRACTAL_DONATE'); ?></a></li>
						<li><a href="/joomla/index.php/logout"><?php echo JText::_('TMPL_FRACTAL_LOGOUT'); ?></a></li>
					</ul>
				</div>
				</div>
			</div>
		</nav>  