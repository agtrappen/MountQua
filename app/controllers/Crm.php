<?php
    /**
    * @deprecated Posts class extends the controller class
    * @author Alexander
    * @version 1.0
    * @since 28-10-2018
    **/
  class Crm extends Controller{
    public function __construct(){
      // Load Models
      $this->crmModel = $this->model('crmModel');
      $this->authModel = $this->model('AuthModel');
    }

    /**
    * Index method
    * @deprecated returns $data to posts/index
    * @param none
    * @return array $data
    **/
    public function index(){
    //   $posts = $this->postModel->getPosts();

      $data = [
        // 'posts' => $posts
      ];

      $this->view('crm/index', $data);
    }
  }
