<?php
  class BestellingModel {
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

    public function addCustomer($data) {
      // Prepare Query
      $this->db->query('INSERT INTO gebruiker (RolID, Voornaam, Achternaam, Straat, Postcode, Email, Aanmaakdatum) 
      VALUES (1, :voornaam, :achternaam, :straat, :postcode, :email, :datum)');
      
      // Bind Values
      $this->db->bind(':voornaam', $data['voornaam']);
      $this->db->bind(':achternaam', $data['achternaam']);
      $this->db->bind(':straat', $data['straat']);
      $this->db->bind(':postcode', $data['postcode']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':datum', $data['datum']);

      //Execute
      return $this->db->execute();
    }

    public function addBestellingArtikel($data) {
        $this->db->query('INSERT INTO bestelling_artikel (ArtikelID, Bestelnummer, Aantal) 
        VALUES (:id, 1, :aantal)');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':aantal', $data['aantal']);

        //Execute
        return $this->db->execute();
    }

    public function addBestelling($data) {
        $this->db->query('INSERT INTO bestelling (GebruikerID, Datum) 
        VALUES (1, :datum)');

        $this->db->bind(':datum', $data['datum']);

        //Execute
        return $this->db->execute();
    }
  }
