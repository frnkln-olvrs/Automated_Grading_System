<?php 

require_once 'database.php';

class Year_lvl {
  //attributes

  public $year_level_id;
  public $year_level;

  protected $db;

  function __construct() {
    $this->db = new Database();
  }

  
  function show() {
    $sql = "SELECT * FROM year_lvl ORDER BY year_level ASC;";
    $query = $this->db->connect()->prepare($sql);
    $data = null;
    if ($query->execute()) {
      $data = $query->fetchAll();
    }
    return $data;
  }
}

?>