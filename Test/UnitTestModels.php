<?php

use PHPUnit\Framework\TestCase;

require_once 'C:/MountQua/app/config/config.php';
require_once 'C:/MountQua/app/libraries/Database.php';
require_once 'C:/MountQua/app/models/AuthModel.php';

final class UserTest extends TestCase
{
    public function testIfUserCanBeAdded()
    {
        // Arrange
        $userData = array();
        $userData['email'] = 'test@testkees.nl';
        $userData['password'] = password_hash('testkees123', PASSWORD_DEFAULT);

        $authModel = new AuthModel();

        // Act
        $userRegistered = $authModel->register($userData);

        // Assert
        $this->assertTrue($userRegistered);
    }

    public function testIfNewUserIsFound()
    {
        // Arrange
        $authModel = new AuthModel();
        $userEmail = 'test@testkees.nl';

        // Act
        $userFound = $authModel->findUserByEmail($userEmail);

        // Assert
        $this->assertTrue($userFound);
    }

    public function testIfUserCanBeFoundWithID()
    {
        // Arrange
        $authModel = new AuthModel();
        $userID = 5;

        // Act
        $userFound = $authModel->getUserById($userID);

        // Assert
        $this->assertNotEmpty($userFound);
    }
    public function testCompanyModel()
    {
        // Arrange
        $companyModel = new CompanyModel();
        $id = 1;

        // Act
        $companyfound = $companyModel->get($id);

        // Assert
        $this->assertNotEmpty($companyfound);

    }
    public function testProductsModel()
    {
        // Arrange
        $productsmodel = new ProductsModel();

        // Act
        $productsfound = $productsmodel->getProducts();

        // Assert
        $this->assertNotEmpty($productsfound);

    }

    public function testContactModel()
    {
        // Arrange
        $contactmodel = new ContactModel();
        $contactData['voornaam'] = 'test';
        $contactData['email'] = 'test@test.nl';
        $contactData['onderwerp'] = 'test';
        $contactData['bericht'] = 'test';

        // Act
        $contactsfound = $contactmodel->addContact($contactData);

        // Assert
        $this->assertNotEmpty($contactsfound);

    }
    public function testCrmModel()
    {
        // Arrange
        $crmmodel = new CrmModel();

        // Act
        $crmfound = $crmmodel->getPosts();

        // Assert
        $this->assertNotEmpty($crmfound);

    }
}

