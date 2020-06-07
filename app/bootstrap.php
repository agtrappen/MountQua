<?php
/**
* Bootstrap
* @author Alexander
* @version 1.0
**/

  // Load Config
  require_once 'config/config.php';
  // Load Helpers
  require_once 'helpers/session_helper.php';
  require_once 'helpers/url_helper.php';

  /**
  * autoload method
  * Autoloads the Core Classes
  * @param string $classname
  * @return string $classname
  **/
  spl_autoload_register(function ($className) {
      require_once 'libraries/'. $className . '.php';
  });
