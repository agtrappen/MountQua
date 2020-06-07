<?php
  class AuthModel {
    private $db;

    /**
    * user constructor
    * creates new db object
    * @param none
    * @return none
    **/
    public function __construct(){
      $this->db = new Database;
    }

    /**
    * register method
    * Add user or register
    * @param array $data
    * @return true||false
    **/
    public function register($data){
      // Prepare Query
      $this->db->query('INSERT INTO gebruiker (RolID, Email, Wachtwoord)
      VALUES (1, :email, :password)');

      // Bind Values
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);

      //Execute
      return $this->db->execute();
    }

    /**
    * finduserbyemail method
    * Find User BY Email
    * @param string $email
    * @return true||false
    **/
    public function findUserByEmail($email){
      $this->db->query("SELECT * FROM gebruiker WHERE Email = :email");
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      //Check Rows
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }

    /**
    * login method
    * Authenticate the User
    * @param string $email && string $password
    * @return string $row
    **/
    public function login($email, $password){
      $this->db->query("SELECT * FROM gebruiker WHERE Email = :email");
      $this->db->bind(':email', $email);

      $row = $this->db->single();
      
      $hashed_password = $row->Wachtwoord;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }

    /**
    * getuserbyid method
    * Finds User By ID
    * @param int $id
    * @return string $row
    **/
    public function getUserById($id){
      $this->db->query("SELECT * FROM users WHERE id = :id");
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }
  }
