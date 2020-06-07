<?php
  class ContactModel {
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
    * addpost method
    * Binds the values and Adds to bioscoop
    * @param array $data
    * @return true||false
    **/
    public function add($data){
        // Prepare Query
        $this->db->query('INSERT INTO contact (Voornaam, Achternaam, Email, Straatnaam, Huisnummer, Toevoeging, Postcode, Woonplaats, Telefoon, Onderwerp, Bericht, Bijlage)
        VALUES (:voornaam, :achternaam, :email, :straatnaam, :huisnummer, :toevoeging, :postcode, :woonplaats, :telefoon, :onderwerp, :bericht, :bijlage)');
  
        // Bind Values
        $this->db->bind(':voornaam', $data['voornaam']);
        $this->db->bind(':achternaam', $data['achternaam']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':straatnaam', $data['straatnaam']);
        $this->db->bind(':huisnummer', $data['huisnummer']);
        $this->db->bind(':toevoeging', $data['toevoeging']);
        $this->db->bind(':postcode', $data['postcode']);
        $this->db->bind(':woonplaats', $data['woonplaats']);
        $this->db->bind(':telefoon', $data['telefoon']);
        $this->db->bind(':onderwerp', $data['onderwerp']);
        $this->db->bind(':bericht', $data['bericht']);
        $this->db->bind(':bijlage', $data['bijlage']);
  
        //Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
      }
  }
