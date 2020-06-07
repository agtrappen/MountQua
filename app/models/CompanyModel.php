<?php
  class CompanyModel {
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

    /**
    * getposts method
    * Gets all products
    * @param none
    * @return string $results
    **/
    public function get($id) {
      $this->db->query("SELECT * FROM bedrijf WHERE BedrijfID = $id");

      $row = $this->db->single();

      return $row;
    }
  }
