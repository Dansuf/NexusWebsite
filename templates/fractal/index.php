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
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
		<link type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/stylesheet.scss.css"></link>
	</head>
	<body>
		<div id="even-bigger-wrapper">
		<div id="big-wrapper">
		<div style="background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo_big.png');" class="welcome-img"><div>the Fractal Network</div></div>
		<div id="wrapper">
			<header>
				<jdoc:include type="modules" name="position-1"/>
			</header>
			<jdoc:include type="modules" name="position-2" />
			<jdoc:include type="modules" name="search"/>
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
		<footer>
			Copyright (C) 2013. The design is property of Tomasz Kuczak and should not be copied. This site is powered by <a href="http://joomla.org">Joomla!</a> CMS and <a href="http://www.phpbb.com">phpBB</a> forum.
		</footer>
		</div>
		<jdoc:include type="modules" name="fractal-sidebar"/>
		</div>
	</body>
