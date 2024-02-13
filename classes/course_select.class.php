<?php 

require_once 'database.php';

class Course_curr {
  //attributes

  public $college_course_id;
  public $name;

  protected $db;

  function __construct() {
    $this->db = new Database();
  }

  
  function show() {
    $sql = "SELECT * FROM course_curr ORDER BY name ASC;";
    $query = $this->db->connect()->prepare($sql);
    $data = null;
    if ($query->execute()) {
      $data = $query->fetchAll();
    }
    return $data;
  }

  // function add() {
  //   $sql = "INSERT INTO curr_year (curr_year_id, year_start, year_end) VALUES
  //   (:curr_year_id, :year_start, :year_end);";
    
  //   $query = $this->db->connect()->prepare($sql);
  //   $query->bindParam(':curr_year_id', $this->curr_year_id);
  //   $query->bindParam(':year_start', $this->year_start);
  //   $query->bindParam(':year_end', $this->year_end);

  //   if ($query->execute()) {
  //     return true;
  //   } else {
  //     return false;  // Return false in case of an error
  //   }
  // }

  // function edit(){
  //   $sql = "UPDATE curr_year SET year_start=:year_start, year_end=:year_end;";

  //   $query=$this->db->connect()->prepare($sql);
  //   $query->bindParam(':blog_image', $this->year_start);
  //   $query->bindParam(':title', $this->year_end);
    
  //   if($query->execute()){
  //     return true;
  //   }
  //   else{
  //     return false;
  //   }	
  // }

  // function is_year_exist() {
  //   $sql = "SELECT * FROM curr_year WHERE year_start = :year_start;";
  //   $query = $this->db->connect()->prepare($sql);
  //   $query->bindParam(':year_start', $this->year_start);
  //   if ($query->execute()) {
  //     if ($query->rowCount() > 0) {
  //       return true;
  //     }
  //   }
  //   return false;
  // }
}

?>