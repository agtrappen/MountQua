<?php

/**
 * Crm class extends the controller class
 * @author Alexander
 **/
class Crm extends Controller
{
  public function __construct()
  {
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
  public function index()
  {
    $this->view('crm/index');
  }

  /**
   * Products method
   * returns $data to posts/index
   * @param none
   * @return array $data
   **/
  public function products()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
  public function images()
  {
    $path = "../public/img/";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $oldpath = $_FILES['bijlage']['tmp_name'];
      $newpath = APPROOT . '/../public/img/' . $_FILES['bijlage']['name'];

      move_uploaded_file($oldpath, $newpath);
    }

    $images = glob($path . "*");

    $data = [
      'images' => $images
    ];

    $this->view('crm/images', $data);
  }

  /**
   * Search query method
   * 
   * Returns all search queries that didn't have a result
   * 
   * @return array Search queries
   */
  public function search()
  {
    $deleted = NULL;
    if (!empty($_GET['delete'])) {
      $deleted = $this->crmModel->deleteSearchQuery($_GET['delete']);
    }
    $queries = $this->crmModel->getSearchQueries();

    $data = array(
      'queries' => $queries,
      'deleted' => $deleted
    );

    $this->view('crm/search', $data);
  }
}
