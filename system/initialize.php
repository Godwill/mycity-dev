<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'wamp'.DS.'www'.DS.'mycity');


defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'system');
	
//load config file first
require_once(LIB_PATH.DS."config.php");


//load core modules	 
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."database.php");
require_once(LIB_PATH.DS."pagination.php");
//require_once(LIB_PATH.DS."site.php");

//load basic functions
require_once(LIB_PATH.DS."functions.php");


//load database related modules

require_once(LIB_PATH.DS."hash.php");

?>