<?php
    /**
    * Bestelling class extends the controller class
    * @author Alexander
    **/
  class Bestelling extends Controller{
      /**
      * Bestelling constructor
      * makes an new object called $this->db
      * @param none
      * @return none
      **/
    public function __construct(){
      // Load Models
      $this->bestellingModel = $this->model('bestellingModel');
    }

    /**
    * Add method
    * Checks if a request is made
    * Sanitizes the POST and puts it in the $data array
    * Calls the method add and gives $data as param
    * @param int $id from post models
    * @return array $data
    **/
    public function add($id){

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $date = date('Y-m-d');

            $customerData = [
                'voornaam' => trim($_POST['voornaam']),
                'achternaam' => trim($_POST['achternaam']),
                'straat' => trim($_POST['straat']),
                'postcode' => trim($_POST['postcode']),
                'email' => trim($_POST['email']),
                'datum' => $date
            ];

            $bestellingArtikel = [
                'id' => $id,
                'aantal' => trim($_POST['aantal'])
            ];

            $bestelling = [
                'datum' => $date
            ];

            $this->bestellingModel->addCustomer($customerData);
            $this->bestellingModel->addBestellingArtikel($bestellingArtikel);
            $this->bestellingModel->addBestelling($bestelling);
            redirect('products');
        }

        $data = [
            'id' => $id,
            'voornaam' => "",
            'achternaam' => "",
            'straat' => "",
            'postcode' => "",
            'email' => "",
            'aantal' => "",
        ];

        $this->view('bestelling/add', $data);
    }
  }
