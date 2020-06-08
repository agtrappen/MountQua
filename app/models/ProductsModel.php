<?php
class ProductsModel
{
  private $db;

  /**
   * post constructor
   * creates new db object
   * @param none
   * @return none
   **/
  public function __construct()
  {
    $this->db = new Database;
  }

  /**
   * getposts method
   * Gets all products
   * @param none
   * @return string $results
   **/
  public function getProducts()
  {
    $this->db->query("SELECT * FROM artikel");

    $results = $this->db->resultset();

    return $results;
  }

  public function editProducts($data)
  {
    // Prepare Query
    $this->db->query('UPDATE artikel SET Naam = :naam, Omschrijving = :omschrijving, Prijs = :prijs, Voorraad = :voorraad, Prijs = :prijs, Image = :image WHERE ArtikelID = :id');

    // Bind Values
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':naam', $data['naam']);
    $this->db->bind(':omschrijving', $data['omschrijving']);
    $this->db->bind(':prijs', $data['prijs']);
    $this->db->bind(':voorraad', $data['voorraad']);
    $this->db->bind(':image', $data['image']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  /**
   * Get products that contain the search query in name or description
   * 
   * @param string $search The search query
   * 
   * @return array|NULL When products match the search query, returns array of products found. NULL otherwise
   */
  public function getProductsWithSearch($search)
  {
    if ($search === NULL) {
      return $this->getProducts();
    }
    // Prepare query
    $this->db->query("SELECT * FROM artikel WHERE Naam LIKE CONCAT('%', :search, '%') OR Omschrijving LIKE CONCAT('%', :search, '%')");

    // Bind values
    $this->db->bind(':search', $search, PDO::PARAM_STR);

    if (true) {
      if (count($this->db->resultset()) > 0) {
        return $this->db->resultset();
      } else {
        // Add query to table
        $this->db->query("INSERT INTO searchqueries (Query) VALUES (:query)");
        $this->db->bind(":query", $search);
        $this->db->execute();

        return [];
      }
    } else {
      return NULL;
    }
  }
}
