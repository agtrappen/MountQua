<?php
    /**
    * @  Post class
    * @author Alexander
    * @version 1.0
    * @since 28-10-2018
    **/
  class CrmModel {
    private $db;

    /**
    * post constructor
    * @  creates new db object
    * @param none
    * @return none
    **/
    public function __construct(){
      $this->db = new Database;
    }

    /**
    * getposts method
    * @  Gets All bioscopen
    * @param none
    * @return string $results
    **/
    public function getPosts(){
      $this->db->query("SELECT * FROM bioscopen");

      $results = $this->db->resultset();

      return $results;
    }
  }
