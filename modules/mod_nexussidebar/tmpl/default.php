<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<div id="usr-nav-reference" onclick="showNav()">
	<div class="hex" id="usr-nav-reference-hex">
		<div>
			<?php if($user->data['user_id'] != ANONYMOUS || $cookieIssueInfo): ?>
			<?php if($newNotification) echo '<img src="' . $u_images . 'warning_big.png" style="padding-right: 0;">'; echo $avatar; ?><span><?php echo $username ?></span>
			<?php else: ?>
			<img src="<?php echo $u_images; ?>warning_big.png"><span><?php echo JText::_('MOD_NSIDEBAR_COOKIE_ISSUE'); ?></span>
			<?php endif ?>
		</div>
	</div>
</div>
<div id="usr-nav">
			<div id="usr-nav-wrap">
				<div>
				<?php if($user->data['user_id'] != ANONYMOUS || $cookieIssueInfo): ?>
				<div id="usr-nav-name">
							<?php echo $avatar ?><span><?php echo $username ?></span><div class="heex"><div></div></div>
				</div>
				<hr class="sep">
				<div class="usr-nav-section">
					<h3><img src="<?php echo $u_images . 'warning.png'; ?>"><span> <?php echo JText::_('MOD_NSIDEBAR_NOTIFICATIONS'); ?>:</span></h3>
					<ul>
						<a href="<?php echo $u_privatemsgs; ?>"><li><span><?php echo $l_privmsgs_text; ?></span></li></a>
					</ul>
				</div>
				<hr class="sep">
				<div class="usr-nav-section">
					<h3><img src="<?php echo $u_images . 'friends.png'; ?>"><span> <?php echo JText::_('MOD_NSIDEBAR_FRIENDS'); ?>:</span></h3>
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
							echo '<li class="nohighlight"><span>' . JText::_('MOD_NSIDEBAR_NO_FRIENDS') . '</span></li>';
						?>
						<a href="<?php echo $u_friend; ?>"><li class="more"><span><?php echo JText::_('MOD_NSIDEBAR_MORE'); ?> </span><img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></li></a>
					</ul>
				</div>
				<hr class="sep">
				<div class="usr-nav-section">
					<h3><img src="<?php echo $u_images . 'profile.png'; ?>"><span> <?php echo JText::_('MOD_NSIDEBAR_PROFILE'); ?>:</span></h3>
					<table>
						<tr><td><span><?php echo JText::_('MOD_NSIDEBAR_COINS'); ?>:</span></td><td><?php echo $coins; ?></td></tr>
						<tr><td><span><?php echo JText::_('MOD_NSIDEBAR_TIME_PLAYED'); ?>:</span></td><td>2h30min</td></tr>
					</table>
					<a href="<?php echo append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $user->data['user_id']); ?>"><div class="more"><span><?php echo JText::_('MOD_NSIDEBAR_MORE'); ?></span> <img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></div></a>
				</div>
				<hr class="sep">
				<div class="usr-nav-section">
					<h3><img src="<?php echo $u_images . 'stats.png'; ?>"><span> <?php echo JText::_('MOD_NSIDEBAR_STATS'); ?>:</span></h3>
					<ul>
						<li><span>Heroes </span><img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></li>
						<li><span>Craftplay </span><img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></li>
						<li><span>Bananacraft </span><img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></li>
						<li class="more"><span><?php echo JText::_('MOD_NSIDEBAR_MORE'); ?> </span><img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></li>
					</ul>
				</div>
				<?php else: ?>
				<div id="usr-nav-name">
							<img src="<?php echo $u_images; ?>warning_big.png"><span><?php echo JText::_('MOD_NSIDEBAR_COOKIE_ISSUE'); ?></span><div class="heex"><div></div></div>
				</div>
				<hr class="sep">
				<div class="usr-nav-section">
					<div class="cookie-issue"><?php echo JText::_('MOD_NSIDEBAR_COOKIE_ISSUE_DESC'); ?></div>
				</div>
				<?php endif ?>
				<hr class="sep">
				<div class="usr-nav-section">
					<h3><img src="<?php echo $u_images . 'others.png'; ?>"><span> <?php echo JText::_('MOD_NSIDEBAR_OTHER'); ?>:</span></h3>
					<ul>
						<a href="<?php echo $u_profile; ?>"><li><span><?php echo JText::_('MOD_NSIDEBAR_UCP'); ?></span></li></a>
						<?php if($auth->acl_get('a_') && !empty($user->data['is_registered'])) echo '<a href="' . append_sid("{$phpbb_root_path}adm/index.$phpEx", false, true, $user->session_id) .'"><li><span>' . JText::_('MOD_NSIDEBAR_ACP') . '</span></li></a>'; ?>
						<?php if(JFactory::getUser()->authorise('core.edit', 'com_contact')) echo '<a href="administrator"><li><span>' . JText::_('MOD_NSIDEBAR_JOOMLA_ADMIN') . '</span></li></a>'; ?>
						<?php if(JFactory::getUser()->authorise('core.create', 'com_content')) echo '<a href="/joomla/index.php/submit-an-article"><li><span>' . JText::_('MOD_NSIDEBAR_NEW_ARTICLE') . '</span></li></a>'; ?>
						<a href="<?php echo $u_search_self; ?>"><li><span><?php echo JText::_('MOD_NSIDEBAR_POSTS'); ?></span></li></a>
						<a href="#"><li><span><?php echo JText::_('MOD_NSIDEBAR_DONATE'); ?></span></li></a>
						<a href="/joomla/index.php/logout"><li><span><?php echo JText::_('MOD_NSIDEBAR_LOGOUT'); ?></span></li></a>
					</ul>
				</div>
				</div>				
			</div>
		</div> 
		<script type="text/javascript" src="<?php echo 'modules/'.$module->module.'/scripts/main.js' ?>"></script> 