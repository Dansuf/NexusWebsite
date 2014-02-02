<?php if (!defined('IN_PHPBB')) exit; ?></div>

	<div class="simple-copyright">Copyright (C) 2013. The design is property of Tomasz Kuczak and should not be copied. This site is powered by <a href="http://joomla.org">Joomla!</a> CMS and <a href="http://www.phpbb.com">phpBB</a> forum.
		<?php if ($this->_rootref['TRANSLATION_INFO']) {  ?><br /><?php echo (isset($this->_rootref['TRANSLATION_INFO'])) ? $this->_rootref['TRANSLATION_INFO'] : ''; } if ($this->_rootref['DEBUG_OUTPUT']) {  ?><br /><?php echo (isset($this->_rootref['DEBUG_OUTPUT'])) ? $this->_rootref['DEBUG_OUTPUT'] : ''; } ?>

	</div>
	</div> 
</div>

</body>
</html>