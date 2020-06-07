<?php
    /**
    * @  Product model
    * @author Alexander
    * @version 1.0
    * @since 28-10-2018
    **/
  class CompanyModel {
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
    * @  Gets all products
    * @param none
    * @return string $results
    **/
    public function get($id) {
      $this->db->query("SELECT * FROM bedrijf WHERE BedrijfID = $id");

      $row = $this->db->single();

      return $row;
    }

    public function titel() {

      $titel = $this->db->query("SELECT `content_nl`,`content_en`,`url`  FROM `languages` WHERE `titel` = 'titel'");
      
        // dont fetch as single but as array
        $titel = $this->db->single();
        
  
        return $titel;

    }

    public function subTitel() {

      $this->db->query("SELECT `content_nl`,`url`,`content_en`,`url`  FROM `languages` WHERE `titel` = 'subtitel'");
      
        // dont fetch as single but as array
        $subTitel = $this->db->single();
  
        return $subTitel;

    }

    public function navbar() {

      $this->db->query("SELECT `content_nl`,`content_en`,`url`  FROM `languages` WHERE `titel` = 'navbar'");
      
        // dont fetch as single but as array
        $row = $this->db->resultSet();
  
        return $row;

    }

    public function content() {

      $this->db->query("SELECT `content_nl`,`content_en`,`url`  FROM `languages` WHERE `titel` = 'content'");
      
        // dont fetch as single but as array
        $row = $this->db->single();
  
        return $row;

    }


  

  
  }
