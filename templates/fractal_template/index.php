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
	<link title="printonly" media="print" type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/print.css"></link>
	<link media="screen, projection" type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/stylesheet.css"></link>
	<link title="A" type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/normal.css"></link>
	<link title="A+" type="text/css" rel="alternate stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/medium.css"></link>
	<link title="A++" type="text/css" rel="alternate stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/large.css"></link>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
</head>
<body id="phpBB">
	<div class="topnav">
		<div id="wrap2" style="width: 80%;">
			<div class="navlink">
				<jdoc:include type="modules" name="position-1" style="fractalTabs"/>
			</div>
		</div>
	</div>
	<div id="wrap" style="width: 80%;">
			<a id="top" accesskey="t" name="top"></a>
			<div style="margin-bottom: -23px;"></div>
			<div class="prime-logo"></div>
			<div class="mainheader"></div>
			<div id="prime-wrap">
				<div id="page-header">
					<jdoc:include type="modules" name="position-2" />
				</div>
				<div id="page-body">
					<jdoc:include type="component" />
					<hr></hr>
					<div class="stat-bar" style="padding: 4px;">
					<ul class="linklist"><li class="icon-home"><a href=".">Home</a></li></ul>
					</div>
				</div>
			</div>
			<div class="mainfooter">
				<div class="mainfooter">

    <div class="nav-foot" style="float: left;">
        <ul>
            <li>
                <a href="http://www.joomla.org/">
                    <strong>

                        Joomla® CMS

                    </strong>
                    <span>

                        Powered by Joomla® CMS © Open Source Matters, Inc.

                    </span>
                </a>
            </li>
        </ul>
    </div>
    <div class="nav-foot">
        <ul>
            <li>
                <a href="http://www.abhisheksrivastava.in/">
                    <strong>

                        Abhishek Srivastava

                    </strong>
                    <span>

                        © Original style by Abhishek Srivastava

                    </span>
                </a>
            </li>
        </ul>
    </div>

</div>
			</div>
	</div>
</body>
</html>
