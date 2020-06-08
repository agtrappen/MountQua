<?php
class CrmModel
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
   * Get search queries
   * 
   * @return array Search queries
   */
  public function getSearchQueries()
  {
    $this->db->query("SELECT * FROM searchqueries");
    return $this->db->resultset();
  }

  /**
   * Delete search query
   * 
   * @param int $id - Query ID
   * 
   * @return bool TRUE on success, FALSE otherwise
   */
  public function deleteSearchQuery($id)
  {
    $this->db->query("DELETE FROM searchqueries WHERE QueryID = :id");
    $this->db->bind(":id", $id, PDO::PARAM_INT);
    $this->db->execute();
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }
}
