<?php 

use PHPUnit\Framework\TestCase;

require_once '../app/config/config.php';
require_once '../app/libraries/Database.php';
require_once '../app/models/CrmModel.php';

class QueryTest extends TestCase 
{
    public function deleteSearchQuery()
    {
        // Arrange
        $crm = new CrmModel();

        // Add query to table
        $this->db->query("INSERT INTO searchqueries (QueryID, Query) VALUES (:id, :query)");
        $this->db->bind(":id", 1337, PDO::PARAM_INT);
        $this->db->bind(":query", "Zoekterm");
        $this->db->execute();

        // Act
        $deleted = $crm->deleteSearchQuery(1337);

        // Assert
        $this->assertTrue($deleted);


    }
}
