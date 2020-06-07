<?php
    /**
    * Crm class extends the controller class
    * @author Alexander
    **/
  class Crm extends Controller{
    public function __construct(){
      // Load Models
      $this->crmModel = $this->model('crmModel');
      $this->authModel = $this->model('AuthModel');
      $this->productsModel = $this->model('ProductsModel');
    }

    /**
    * Index method
    * returns $data to posts/index
    * @param none
    * @return array $data
    **/
    public function index(){
      $this->view('crm/index');
    }

    /**
    * Products method
    * returns $data to posts/index
    * @param none
    * @return array $data
    **/
    public function products(){
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $file = fopen($_FILES['bijlage']['tmp_name'], 'r');
        $csv = fgetcsv($file, NULL, ';');

        $data = [
          'id' => $_POST['id'],
          'naam' => $csv[0],
          'omschrijving' => $csv[1],
          'prijs' => $csv[2],
          'voorraad' => $csv[3],
          'image' => $csv[4],
        ];

        $this->productsModel->editProducts($data);
        redirect('crm/products');
      }
      $products = $this->productsModel->getProducts();
  
      $data = [
        'products' => $products
      ];

      $this->view('crm/products', $data);
    }

    /**
    * Products method
    * returns $data to posts/index
    * @param none
    * @return array $data
    **/
    public function images(){
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
      
        $this->crmModel->addImage($data);
        redirect('crm/images');
      }

      $images = glob("../public/img/"."*.jpg");
        
      $data = [
        'images' => $images
      ];

      $this->view('crm/images', $data);
    }
  }
