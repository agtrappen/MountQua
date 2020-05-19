<?php
    /**
    * @deprecated Auth class
    * @author Alexander
    * @version 1.0
    * @since 28-10-2018
    **/
  class AuthModel {
    private $db;

    /**
    * user constructor
    * @deprecated creates new db object
    * @param none
    * @return none
    **/
    public function __construct(){
      $this->db = new Database;
    }

    /**
    * register method
    * @deprecated Add user or register
    * @param array $data
    * @return true||false
    **/
    public function register($data){
      // Prepare Query
      $this->db->query('INSERT INTO users (name, email,password)
      VALUES (:name, :email, :password)');

      // Bind Values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);

      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    /**
    * finduserbyemail method
    * @deprecated Find User BY Email
    * @param string $email
    * @return true||false
    **/
    public function findUserByEmail($email){
      $this->db->query("SELECT * FROM users WHERE email = :email");
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
    * @deprecated Authenticate the User
    * @param string $email && string $password
    * @return string $row
    **/
    public function login($email, $password){
      $this->db->query("SELECT * FROM users WHERE email = :email");
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }

    /**
    * getuserbyid method
    * @deprecated Finds User By ID
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
