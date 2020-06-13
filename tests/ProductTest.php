<?php 

use PHPUnit\Framework\TestCase;

require_once '../app/config/config.php';
require_once '../app/libraries/Database.php';
require_once '../app/models/ProductsModel.php';
require_once '../app/models/CrmModel.php';

class ProductTest extends TestCase 
{
    public function testIfProductsCanBeEdited() 
    {
        $productData = array();
        $productData['id'] = '1';
        $productData['naam'] = 'test';
        $productData['omschrijving'] = 'testlaan';
        $productData['prijs'] = '10';
        $productData['voorraad'] = 'test@test.com';
        $productData['image'] = '../public/img/Oranje.jpg';


        $productModel = new ProductsModel();

        $productEdited = $productModel->editProducts($productData);

        $this->assertTrue($productEdited);
    }

    public function testGetSearchQueries()
    {
       
      
        $crm = new CrmModel();

        $testGetSearchQuery = $crm->getSearchQueries();

        $this->assertNotEmpty($testGetSearchQuery);


    }
}


?>