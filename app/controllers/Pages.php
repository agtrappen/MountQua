<?php
    /**
    * Pages class extends the controller class
    * @author Alexander
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
    * contact method
    * method to insert the input values to the contact db
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
    * about method
    * method for about page, calls the company model and returns the data to the view
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
}
