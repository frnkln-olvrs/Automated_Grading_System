<?php 

require_once 'database.php';

class Curr_year {
  //attributes

  public $curr_year_id;
  public $user_id;
  public $year_start;
  public $year_end;
  public $curriculum_year;

  protected $db;

  function __construct() {
    $this->db = new Database();
  }

  // function curr_year() {
  //   $sql = "SELECT * FROM curr_year WHERE curr_year_id = :curr_year_id LIMIT 1;";
  //   $query = $this->db->connect()->prepare($sql);
  //   $query->bindParam(':curr_year_id', $this->curr_year_id);

  //   if ($query->execute()) {
  //     $accountData =$query->fetch(PDO::FETCH_ASSOC);

  //     if ($accountData && password_verify($this->password, $accountData['password'])) {
  //       $this->curr_year_id = $accountData['curr_year_id'];
  //       $this->year_start = $accountData['year_start'];
  //       $this->year_end = $accountData['year_end'];
  //       $this->curriculum_year = $accountData['year_start'] . '-' . $accountData['year_end'];
  //       return true;
  //     }
  //   }

  //   return false;
  // }  
 
  //Methods

  function add() {
    $sql = "INSERT INTO curr_year (curr_year_id, year_start, year_end) VALUES
    (:curr_year_id, :year_start, :year_end);";
    
    $query = $this->db->connect()->prepare($sql);
    $query->bindParam(':curr_year_id', $this->curr_year_id);
    $query->bindParam(':year_start', $this->year_start);
    $query->bindParam(':year_end', $this->year_end);

    if ($query->execute()) {
      return true;
    } else {
      return false;  // Return false in case of an error
    }
  }

  function edit(){
    $sql = "UPDATE curr_year SET year_start=:year_start, year_end=:year_end;";

    $query=$this->db->connect()->prepare($sql);
    $query->bindParam(':blog_image', $this->year_start);
    $query->bindParam(':title', $this->year_end);
    
    if($query->execute()){
      return true;
    }
    else{
      return false;
    }	
  }

  function show() {
    $sql = "SELECT * FROM curr_year ORDER BY curr_year_id ASC;";
    $query = $this->db->connect()->prepare($sql);
    $data = null;
    if ($query->execute()) {
      $data = $query->fetchAll();
    }
    return $data;
  }
}

?>