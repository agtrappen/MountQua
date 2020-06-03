<?php
require_once 'C:/MountQua/app/config/config.php';
require_once 'C:/MountQua/app/libraries/Database.php';
require_once 'C:/MountQua/app/models/AuthModel.php';

use PHPUnit\Framework\TestCase;

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
}
