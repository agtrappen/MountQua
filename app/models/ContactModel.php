<?php
    /**
    * @  Product model
    * @author Alexander
    * @version 1.0
    * @since 28-10-2018
    **/
  class ContactModel {
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
    * addpost method
    * @  Binds the values and Adds to bioscoop
    * @param array $data
    * @return true||false
    **/
    public function add($data){
        // Prepare Query
        $this->db->query('INSERT INTO contact (bios_naam, bios_image, adres, postcode, stad, provincie, bereikbaar_auto, bereikbaar_ov, bereikbaar_fiets, voorwaarden)
        VALUES (:bios_naam, :bios_web, :adres, :postcode, :stad, :provincie, :bereikbaar_auto, :bereikbaar_ov, :bereikbaar_fiets, :voorwaarden)');
  
        // Bind Values
        $this->db->bind(':bios_naam', $data['bios_naam']);
        $this->db->bind(':bios_image', $data['bios_image']);
        $this->db->bind(':adres', $data['adres']);
        $this->db->bind(':postcode', $data['postcode']);
        $this->db->bind(':stad', $data['stad']);
        $this->db->bind(':provincie', $data['provincie']);
        $this->db->bind(':bereikbaar_auto', $data['bereikbaar_auto']);
        $this->db->bind(':bereikbaar_ov', $data['bereikbaar_ov']);
        $this->db->bind(':bereikbaar_fiets', $data['bereikbaar_fiets']);
        $this->db->bind(':voorwaarden', $data['voorwaarden']);
  
        //Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
      }  
  }
