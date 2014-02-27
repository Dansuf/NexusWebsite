<?php
/**
 * @copyright Copyright (C) 2013 by Tomasz Kuczak. All right reserved.
 */

 defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<jdoc:include type="head" />
		<link rel="shortcut icon" href="/favicon.ico"></link>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
		<link type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/stylesheet.scss.css"></link>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/scripts/modernizr.js"></script>
	</head>
	<body>
		<div id="even-bigger-wrapper">
		<div id="big-wrapper">
		<div style="background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo_big.png');" class="welcome-img"><div>the Fractal Network</div></div>
		<div id="wrapper">
			<div id="header">
				<jdoc:include type="modules" name="position-1"/>
			</div>
			<jdoc:include type="modules" name="position-2" />
			<jdoc:include type="modules" name="search"/>
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
		<div id="footer">
			Copyright (C) 2013. The design is property of Tomasz Kuczak and should not be copied. This site is powered by <a href="http://joomla.org">Joomla!</a> CMS and <a href="http://www.phpbb.com">phpBB</a> forum.
		</div>
		</div>
		<jdoc:include type="modules" name="nexus-sidebar"/>
		</div>
		<div id="bottom-bar">
				<ul>
					<li id="cookie-info"><?php echo JText::_('TPL_NEXUS_COOKIE_INFO'); ?><span onclick="hideCookieInfo()">X</span></li>
					<li id="old-browser-info"><?php echo JText::_('TPL_NEXUS_OLD_BROWSER'); ?><span onclick="hideOldBrowserInfo()">X</span></li>
				</ul>
		</div>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/scripts/bottomBar.js"></script>
	</body>
