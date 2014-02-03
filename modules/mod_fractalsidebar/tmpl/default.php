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
				<div id="usr-nav-name">
							<?php echo $avatar ?><span><?php echo $username ?></span><div class="heex"><div></div></div>
				</div>
				<hr class="sep">
				<div class="usr-nav-section">
					<h3>Notifications:</h3>
					<ul>
						<li><img class="icon-img" src="<?php echo $u_images . 'envelope.png'; ?>"> <a href="<?php echo $u_privatemsgs; ?>"><?php echo $l_privmsgs_text; ?></a></li>
					</ul>
				</div>
				<hr class="sep">
				<div class="usr-nav-section">
					<h3><img src="<?php echo $u_images . 'friends.png'; ?>"> <span>Friends:</span></h3>
					<ul>
						<?php 
						echo $huha;
						foreach($friends_online as &$friend)
						{
							echo $friend;
						}
						?>
						<?php 
						foreach($friends_offline as &$friend)
						{
							echo $friend;
						}
						?>
						<li class="more"><a href="<?php echo $u_friend; ?>">More <img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></a></li>
					</ul>
				</div>
				<hr class="sep">
				<div class="usr-nav-section">
					<h3>Profile:</h3>
					<table>
						<tr><td><img class="icon-img" src="<?php echo $u_images . 'coin.png'; ?>"> <span>Coins:</span></td><td>9001</td></tr>
						<tr><td><img class="icon-img" src="<?php echo $u_images . 'clock.png'; ?>"> <span>Time played:</span></td><td>2h30min</td></tr>
					</table>
					<div class="more"><a href="<?php echo append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $user->data['user_id']); ?>">More <img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></a></div>
				</div>
				<hr class="sep">
				<div class="usr-nav-section">
					<h3><img src="<?php echo $u_images . 'stats.png'; ?>"> <span>Stats:</span></h3>
					<ul>
						<li>Heroes <img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></li>
						<li>Craftplay <img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></li>
						<li>Bananacraft <img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></li>
						<li class="more">More <img class="down-img" src="<?php echo $u_images . 'down.png'; ?>"></li>
					</ul>
				</div>
				<hr class="sep">
				<div class="usr-nav-section">
					<h3>Other:</h3>
					<ul>
						<li><a href="<?php echo $u_profile; ?>">User Control Panel</a></li>
						<li><a href="<?php echo $u_search_self; ?>">View your posts</a></li>
						<li><img class="icon-img" src="<?php echo $u_images . 'coin.png'; ?>"> <a href="#">Make a donation</a></li>
						<li><a href="<?php echo $u_logout; ?>">Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>  