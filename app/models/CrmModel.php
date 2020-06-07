<?php
  class CrmModel {
    private $db;

    /**
    * post constructor
    * creates new db object
    * @param none
    * @return none
    **/
    public function __construct(){
      $this->db = new Database;
    }
  }
