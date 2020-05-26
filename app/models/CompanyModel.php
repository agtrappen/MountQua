<?php
    /**
    * @deprecated Product model
    * @author Alexander
    * @version 1.0
    * @since 28-10-2018
    **/
  class CompanyModel {
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
    public function get($id) {
      $this->db->query("SELECT * FROM bedrijf WHERE BedrijfID = $id");

      $row = $this->db->single();

      return $row;
    }
  }
