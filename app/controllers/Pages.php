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
      $navbar = $this->companyModel->navbar();
      $titel = $this->companyModel->titel();
      $subTitel = $this->companyModel->subTitel();
      $content = $this->companyModel->content();
      
     

      // If logged in, redirect to posts
      if(isset($_SESSION['user_id'])){
        redirect('crm');
      }

      // Set Data
      $data = [
        'company' => $company,
        'navbar' => $navbar,
        'titel' => $titel,
        'subtitel' => $subTitel,
        'content' => $content,
        
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
        'version' => '1.0.0',
        
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
      $navbar = $this->companyModel->navbar();
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        // the message
        // Make sure there are no errors
        if(empty($data['body_err'])){
          if($this->contactModel->add($data)){
            // Redirect to login
            redirect('pages/contact');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('pages/contact', $data);
        }
      } else {
      //Set Data
      $data = [
        'version' => '1.0.0',
        'navbar' => $navbar,
      ];

      // Load about view
      $this->view('pages/contact', $data);
    }
    }

    /**
    * contact method
    * @  method for the contact page, returns the $data variable to pages/contact
    * @param none
    * @return array $data
    **/
    public function about(){
      $company = $this->companyModel->get(1);
      $navbar = $this->companyModel->navbar();

      //Set Data
      $data = [
        'company' => $company,
        'navbar' => $navbar,
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
