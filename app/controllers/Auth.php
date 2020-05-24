<?php
    /**
    * @deprecated Auth class extends the controller class
    * @author Alexander
    * @version 1.0
    * @since 28-10-2018
    **/
  class Auth extends Controller{
    public function __construct(){
      $this->authModel = $this->model('AuthModel');
    }
    /**
    * Index method
    * @deprecated redirects to the welcome page
    * @param none
    * @return none
    **/
    public function index(){
      redirect('welcome');
    }

    /**
    * Register method
    * @deprecated fills the $data array with the form informations and send it to the users db
    * @param none
    * @return array $data
    **/
    public function register(){
      // Check if logged in
      if($this->isLoggedIn()){
        redirect('crm');
      }

      // Check if POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'confirm_password' => trim($_POST['confirm_password']),
          'name_err' => '',
          'email_err' => '',
          'password_err' => '',
          'confirm_password_err' => ''
        ];

        // Validate email
        if(empty($data['email'])){
            $data['email_err'] = 'Please enter an email';
            // Validate name
            if(empty($data['name'])){
              $data['name_err'] = 'Please enter a name';
            }
        } else{
          // Check Email
          if($this->authModel->findUserByEmail($data['email'])){
            $data['email_err'] = 'Email is already taken.';
          }
        }

        // Validate password
        if(empty($data['password'])){
          $password_err = 'Please enter a password.';
        } elseif(strlen($data['password']) < 6){
          $data['password_err'] = 'Password must have atleast 6 characters.';
        }

        // Validate confirm password
        if(empty($data['confirm_password'])){
          $data['confirm_password_err'] = 'Please confirm password.';
        } else{
            if($data['password'] != $data['confirm_password']){
                $data['confirm_password_err'] = 'Password do not match.';
            }
        }

        // Make sure errors are empty
        if(empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
          // SUCCESS - Proceed to insert

          // Hash Password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

          //Execute
          if($this->authModel->register($data)){
            // Redirect to login
            flash('register_success', 'You are now registered and can log in');
            redirect('auth/login');
          } else {
            die('Something went wrong');
          }

        } else {
          // Load View
          $this->view('auth/register', $data);
        }
      } else {
        // IF NOT A POST REQUEST

        // Init data
        $data = [
          'name' => '',
          'email' => '',
          'password' => '',
          'confirm_password' => '',
          'name_err' => '',
          'email_err' => '',
          'password_err' => '',
          'confirm_password_err' => ''
        ];

        // Load View
        $this->view('auth/register', $data);
      }
    }

    /**
    * Login method
    * @deprecated checks if the login information matches with the db informations
    * @param none
    * @return array $data
    **/
    public function login(){
      // Check if logged in
      if($this->isLoggedIn()){
        redirect('crm');
      }

      // Check if POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'email_err' => '',
          'password_err' => '',
        ];

        // Check for email
        if(empty($data['email'])){
          $data['email_err'] = 'Please enter email.';
        }

        // Check for name
        if(empty($data['name'])){
          $data['name_err'] = 'Please enter name.';
        }

        // Check for user
        if($this->authModel->findUserByEmail($data['email'])){
          // User Found
        } else {
          // No User
          $data['email_err'] = 'This email is not registered.';
        }

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['password_err'])){

          // Check and set logged in user
          $loggedInUser = $this->authModel->login($data['email'], $data['password']);

          if($loggedInUser){
            // User Authenticated!
            $this->createUserSession($loggedInUser);

          } else {
            $data['password_err'] = 'Password incorrect.';
            // Load View
            $this->view('auth/login', $data);
          }

        } else {
          // Load View
          $this->view('auth/login', $data);
        }

      } else {
        // If NOT a POST

        // Init data
        $data = [
          'email' => '',
          'password' => '',
          'email_err' => '',
          'password_err' => '',
        ];

        // Load View
        $this->view('auth/login', $data);
      }
    }

    /**
    * createusersession method
    * @deprecated Create Session With User Info
    * @param string $user
    * @return none
    **/
    public function createUserSession($user){
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_email'] = $user->email;
      $_SESSION['user_name'] = $user->name;
      redirect('crm');
    }

    /**
    * logout method
    * @deprecated Logout & Destroy Session
    * @param none
    * @return none
    **/
    public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
      session_destroy();
      redirect('auth/login');
    }

    /**
    * isloggedin method
    * @deprecated Checks if Logged In
    * @param none
    * @return true||false
    **/
    public function isLoggedIn(){
      if(isset($_SESSION['user_id'])){
        return true;
      } else {
        return false;
      }
    }
  }
