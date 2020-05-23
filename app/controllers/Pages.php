<?php
    /**
    * @deprecated Pages class extends the controller class
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

    }

    /**
    * index method
    * @deprecated method for the index page, checks if the user is logged in
    * @param none
    * @return array $data
    **/
    public function index(){
      // If logged in, redirect to posts
      // if(isset($_SESSION['user_id'])){
      //   redirect('posts');
      // }

      //Set Data
      $data = [
        // 'title' => 'Welcome op GameplayParty',
        // 'description' => ''
      ];

      // Load homepage/index view
      $this->view('pages/index', $data);
    }

    /**
    * about method
    * @deprecated method for the about page, returns the $data variable to pages/about
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
    * @deprecated method for the confirmation page, returns the $data variable to pages/bevestiging
    * @param none
    * @return array $data
    **/
    public function contact(){
      //Set Data
      $data = [
        'version' => '1.0.0'
      ];

      // Load about view
      $this->view('pages/contact', $data);
    }

    /**
    * contact method
    * @deprecated method for the contact page, returns the $data variable to pages/contact
    * @param none
    * @return array $data
    **/
    public function about(){
      //Set Data
      $data = [
        'version' => '1.0.0'
      ];

      // Load about view
      $this->view('pages/about', $data);
    }

    /**
    * contact method
    * @deprecated method for the contact page, returns the $data variable to pages/contact
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

    public function Qui(){
      //Set Data
      $data = [
        'qui heeft een mooie kapsel'
      ];

      // Load about view
      $this->view('pages/qui', $data);
    }
}
