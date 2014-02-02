<?php if (!defined('IN_PHPBB')) exit; ?><nav id="usr-nav">
	<div id="usr-nav-wrap">
		<div class="usr-nav-section">
			<h3>Notifications:</h3>
			<ul>
				<?php if ($this->_rootref['S_DISPLAY_PM']) {  ?> <li><a href="<?php echo (isset($this->_rootref['U_PRIVATEMSGS'])) ? $this->_rootref['U_PRIVATEMSGS'] : ''; ?>"><?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO'] : ''; ?></a></li><?php } ?>

			</ul>
		</div>
		<hr class="sep">
		<div class="usr-nav-section">
			<h3>Friends:</h3>
			<ul>
				<?php if (sizeof($this->_tpldata['friends_online']) || sizeof($this->_tpldata['friends_offline'])) {  $_friends_online_count = (isset($this->_tpldata['friends_online'])) ? sizeof($this->_tpldata['friends_online']) : 0;if ($_friends_online_count) {for ($_friends_online_i = 0; $_friends_online_i < $_friends_online_count; ++$_friends_online_i){$_friends_online_val = &$this->_tpldata['friends_online'][$_friends_online_i]; ?>

				<li class="friend-online" title="<?php echo ((isset($this->_rootref['L_FRIENDS_ONLINE'])) ? $this->_rootref['L_FRIENDS_ONLINE'] : ((isset($user->lang['FRIENDS_ONLINE'])) ? $user->lang['FRIENDS_ONLINE'] : '{ FRIENDS_ONLINE }')); ?>"><?php echo $_friends_online_val['USERNAME_FULL']; ?> <?php if ($this->_rootref['S_SHOW_PM_BOX']) {  ?> <input type="submit" name="add_to[<?php echo $_friends_online_val['USER_ID']; ?>]" value="<?php echo ((isset($this->_rootref['L_ADD'])) ? $this->_rootref['L_ADD'] : ((isset($user->lang['ADD'])) ? $user->lang['ADD'] : '{ ADD }')); ?>" class="button2" /><?php } ?></li>
				<?php }} $_friends_offline_count = (isset($this->_tpldata['friends_offline'])) ? sizeof($this->_tpldata['friends_offline']) : 0;if ($_friends_offline_count) {for ($_friends_offline_i = 0; $_friends_offline_i < $_friends_offline_count; ++$_friends_offline_i){$_friends_offline_val = &$this->_tpldata['friends_offline'][$_friends_offline_i]; ?>

				<li class="friend-offline" title="<?php echo ((isset($this->_rootref['L_FRIENDS_OFFLINE'])) ? $this->_rootref['L_FRIENDS_OFFLINE'] : ((isset($user->lang['FRIENDS_OFFLINE'])) ? $user->lang['FRIENDS_OFFLINE'] : '{ FRIENDS_OFFLINE }')); ?>"><?php echo $_friends_offline_val['USERNAME_FULL']; ?> <?php if ($this->_rootref['S_SHOW_PM_BOX']) {  ?><input type="submit" name="add_to[<?php echo $_friends_offline_val['USER_ID']; ?>]" value="<?php echo ((isset($this->_rootref['L_ADD'])) ? $this->_rootref['L_ADD'] : ((isset($user->lang['ADD'])) ? $user->lang['ADD'] : '{ ADD }')); ?>" class="button2" /><?php } ?></li>
				<?php }} } else { ?>

				<?php echo (isset($this->_rootref['S_NO_FRIENDS'])) ? $this->_rootref['S_NO_FRIENDS'] : ''; ?>

				<?php } ?>

				<li class="more"><a href="<?php echo (isset($this->_rootref['U_FRIENDS'])) ? $this->_rootref['U_FRIENDS'] : ''; ?>">More <img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/down.png" class="down-img"></a></li>
			</ul>
		</div>
		<hr class="sep">
		<div class="usr-nav-section">
			<h3>Profile:</h3>
			<table>
				<tr><td>Coins:</td><td>9001</td></tr>
				<tr><td>Time played:</td><td>2h30min</td></tr>
			</table>
			<div class="more">More <img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/down.png" class="down-img"></div>
		</div>
		<hr class="sep">
		<div class="usr-nav-section">
			<h3>Stats:</h3>
			<ul>
				<li>Heroes <img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/down.png" class="down-img"></li>
				<li>Craftplay <img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/down.png" class="down-img"></li>
				<li>Bananacraft <img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/down.png" class="down-img"></li>
				<li class="more">More <img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/down.png" class="down-img"></li>
			</ul>
		</div>
		<hr class="sep">
		<div class="usr-nav-section">
			<h3>Other:</h3>
			<ul>
				<li><a href="<?php echo (isset($this->_rootref['U_PROFILE'])) ? $this->_rootref['U_PROFILE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?>" accesskey="e"><?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?></a></li>
				<?php if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?>

				<li><a href="<?php echo (isset($this->_rootref['U_SEARCH_SELF'])) ? $this->_rootref['U_SEARCH_SELF'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_SELF'])) ? $this->_rootref['L_SEARCH_SELF'] : ((isset($user->lang['SEARCH_SELF'])) ? $user->lang['SEARCH_SELF'] : '{ SEARCH_SELF }')); ?></a></li>
				<?php } if ($this->_rootref['U_RESTORE_PERMISSIONS']) {  ?>

				<li><a href="<?php echo (isset($this->_rootref['U_RESTORE_PERMISSIONS'])) ? $this->_rootref['U_RESTORE_PERMISSIONS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_RESTORE_PERMISSIONS'])) ? $this->_rootref['L_RESTORE_PERMISSIONS'] : ((isset($user->lang['RESTORE_PERMISSIONS'])) ? $user->lang['RESTORE_PERMISSIONS'] : '{ RESTORE_PERMISSIONS }')); ?></a></li>
				<?php } ?> 
				<li>Make a donation</li>
				<li><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>" title="<?php echo (isset($this->_rootref['S_LOGOUT'])) ? $this->_rootref['S_LOGOUT'] : ''; ?>" accesskey="x"><?php echo (isset($this->_rootref['S_LOGOUT'])) ? $this->_rootref['S_LOGOUT'] : ''; ?></a></li>
			</ul>
		</div>
	</div>
</nav>