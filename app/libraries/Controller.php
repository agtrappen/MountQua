<?php
    /**
    * Controller class
    * @author Alexander
    **/
  class Controller {
    /**
    * model method
    * Lets us load model from controllers
    * @param string $model
    * @return string $model, instaniate model
    **/
    public function model($model){
      // Require model file
      require_once '../app/models/' . $model . '.php';
      // Instantiate model
      return new $model();
    }

    /**
    * view method
    * Lets us load view from controllers
    * @param string $url | array $data
    * @return string $url, requires view  file
    **/
    public function view($url, $data = []){
      // Check for view file
      if(file_exists('../app/views/'.$url.'.php')){
        // Require view file
        require_once '../app/views/'.$url.'.php';
      } else {
        // No view exists
        die('View does not exist');
      }
    }
  }
