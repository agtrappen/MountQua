<?php
/**
* @deprecated Bootstrap
* @author Alexander
* @version 1.0
* @since 28-10-2018
**/
  // require_once 'libraries/Core.php';
  // require_once 'libraries/Controller.php';

  // Load Config
  require_once 'config/config.php';
  // Load Helpers
  require_once 'helpers/session_helper.php';
  require_once 'helpers/url_helper.php';

  /**
  * autoload method
  * @deprecated Autoloads the Core Classes
  * @param string $classname
  * @return string $classname
  **/
  spl_autoload_register(function ($className) {
      require_once 'libraries/'. $className . '.php';
  });
