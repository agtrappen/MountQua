<?php
    /**
    * Pages class extends the controller class
    * @author Alexander
    * @version 1.0
    * @since 28-10-2018
    **/
  class Pages extends Controller{
    /**
    * empty constructor
    * @param none
    * @return none
    **/
    public function __construct(){
      // Load Models
      $this->companyModel = $this->model('CompanyModel');
      $this->contactModel = $this->model('ContactModel');
    }

    /**
    * index method
    * method for the index page, checks if the user is logged in
    * @param none
    * @return array $data
    **/
    public function index(){
      $company = $this->companyModel->get(1);

      // If logged in, redirect to posts
      if(isset($_SESSION['user_id'])){
        redirect('crm');
      }

      //Set Data
      $data = [
        'company' => $company,
      ];

      // Load homepage/index view
      $this->view('pages/index', $data);
    }

    /**
    * about method
    * method for the about page, returns the $data variable to pages/about
    * @param none
    * @return array $data
    **/
    public function products(){
      //Set Data
      $data = [
        'version' => '1.0.0'
      ];

      // Load about view
      $this->view('pages/products', $data);
    }

    /**
    * bevestiging method
    * @  method for the confirmation page, returns the $data variable to pages/bevestiging
    * @param none
    * @return array $data
    **/
    public function contact(){
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'voornaam' => trim($_POST['voornaam']),
                'achternaam' => trim($_POST['achternaam']),
                'email' => trim($_POST['email']),
                'straatnaam' => trim($_POST['straatnaam']),
                'huisnummer' => trim($_POST['huisnummer']),
                'toevoeging' => trim($_POST['toevoeging']),
                'postcode' => trim($_POST['postcode']),
                'woonplaats' => trim($_POST['woonplaats']),
                'telefoon' => trim($_POST['telefoon']),
                'onderwerp' => trim($_POST['onderwerp']),
                'telefoon' => trim($_POST['telefoon']),
                'bericht' => trim($_POST['bericht']),
                'bijlage' => trim($_POST['bijlage']),
            ];
            $this->contactModel->add($data);
            redirect('/');
        }
        //Set Data
          $data = [
            'voornaam' => '',
            'achternaam' => '',
            'email' => '',
            'straatnaam' => '',
            'huisnummer' => '',
            'toevoeging' => '',
            'postcode' => '',
            'woonplaats' => '',
            'telefoon' => '',
            'onderwerp' => '',
            'bericht' => '',
            'bijlage' => '',
        ];

        // Load about view
        $this->view('pages/contact', $data);
    }

    /**
    * contact method
    * @  method for the contact page, returns the $data variable to pages/contact
    * @param none
    * @return array $data
    **/
    public function about(){
      $company = $this->companyModel->get(1);

      //Set Data
      $data = [
        'company' => $company,
      ];

      // Load about view
      $this->view('pages/about', $data);
    }

    /**
    * contact method
    * @  method for the contact page, returns the $data variable to pages/contact
    * @param none
    * @return array $data
    **/
    public function cart(){
      //Set Data
      $data = [
        'version' => '1.0.0'
      ];

      // Load about view
      $this->view('pages/cart', $data);
    }
}
