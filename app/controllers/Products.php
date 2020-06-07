<?php
    /**
    * Products class extends the controller class
    * @author Alexander
    **/
  class Products extends Controller{
      /**
      * Products constructor
      * makes an new object called $this->db
      * @param none
      * @return none
      **/
    public function __construct(){
      // Load Models
      $this->productsModel = $this->model('productsModel');
    }
    /**
    * Index method
    * gives $data to bioscopen/index
    * @param none
    * @return array $data
    **/
    public function index(){
      $products = $this->productsModel->getProducts();

      $data = [
        'products' => $products
      ];

      $this->view('products/index', $data);
    }

    /**
    * show method
    * receives $id from post models and returns it to bioscopen/show page
    * @param int $id from post models
    * @return array $data
    **/
    public function show($id){
      $post = $this->postModel->getPostById($id);
      $user = $this->userModel->getUserById($post->bios_id);

      $data = [
        'post' => $post,
        'user' => $user
      ];

      $this->view('bioscopen/show', $data);
    }
  }
