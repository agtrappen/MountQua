<?php
    /**
    * @deprecated Product model
    * @author Alexander
    * @version 1.0
    * @since 28-10-2018
    **/
  class ProductsModel {
    private $db;

    /**
    * post constructor
    * @deprecated creates new db object
    * @param none
    * @return none
    **/
    public function __construct(){
      $this->db = new Database;
    }

    /**
    * getposts method
    * @deprecated Gets all products
    * @param none
    * @return string $results
    **/
    public function getProducts(){
      $this->db->query("SELECT * FROM artikel");

      $results = $this->db->resultset();

      return $results;
    }
  }
