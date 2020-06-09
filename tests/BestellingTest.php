<?php
require_once 'C:/MountQua/app/config/config.php';
require_once 'C:/MountQua/app/libraries/Database.php';
require_once 'C:/MountQua/app/models/BestellingModel.php';

use PHPUnit\Framework\TestCase;

final class BestellingTest extends TestCase
{
  public function testIfBestellingCanBeAdded()
  {
    // Arrange
    $bestellingData = array();
    $bestellingData['id'] = 1;
    $bestellingData['aantal'] = 55;

    $bestellingModel = new BestellingModel();

    // Act
    $bestellingAdded = $bestellingModel->addBestellingArtikel($bestellingData);

    // Assert
    $this->assertTrue($bestellingAdded);
  }
}
