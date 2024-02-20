<?php

require_once 'database.php';

Class Curr_table{

  //attributes
  public $user_id;
  public $curr_id;
  public $curr_year_id;
  public $college_course_id;
  public $time_id;
  public $sub_code;
  public $sub_name;
  public $sub_prerequisite;
  public $lec;
  public $lab;

  protected $db;

  function __construct()
  {
    $this->db = new Database();
  }

  //Methods

  function add(){
    $sql = "INSERT INTO curr_table (curr_year_id, college_course_id, time_id, sub_code, sub_name, sub_prerequisite, lec, lab) VALUES 
    (:curr_year_id, :college_course_id, :time_id, :sub_code, :sub_name, :sub_prerequisite, :lec, :lab);";

    $query=$this->db->connect()->prepare($sql);
    $query->bindParam(':curr_year_id', $this->curr_year_id);
    $query->bindParam(':college_course_id', $this->college_course_id);
    $query->bindParam(':time_id', $this->time_id);
    $query->bindParam(':sub_code', $this->sub_code);
    $query->bindParam(':sub_name', $this->sub_name);
    $query->bindParam(':sub_prerequisite', $this->sub_prerequisite);
    $query->bindParam(':lec', $this->lec);
    $query->bindParam(':lab', $this->lab);
    
    if($query->execute()){
      return true;
    }
    else{
      return false;
    }	
  }

  function fetch($record_curr_id){
    $sql = "SELECT * FROM curr_table WHERE curr_id = :curr_id;";
    $query=$this->db->connect()->prepare($sql);
    $query->bindParam(':curr_id', $record_curr_id);
    if($query->execute()){
      $data = $query->fetch();
    }
    return $data;
  }

  // function edit(){
  //   $sql = "UPDATE products SET productname=:productname, category=:category, price=:price, availability=:availability WHERE id = :id;";

  //   $query=$this->db->connect()->prepare($sql);
  //   $query->bindParam(':productname', $this->productname);
  //   $query->bindParam(':category', $this->category);
  //   $query->bindParam(':price', $this->price);
  //   $query->bindParam(':availability', $this->availability);
  //   $query->bindParam(':id', $this->id);
    
  //   if($query->execute()){
  //     return true;
  //   }
  //   else{
  //     return false;
  //   }	
  // }

  function show($year_id, $course_id, $time_id){
    $sql = "SELECT * FROM curr_table WHERE curr_year_id = :year_id AND college_course_id = :course_id AND time_id = :time_id ORDER BY sub_code ASC;";
    $query = $this->db->connect()->prepare($sql);
    $query->bindParam(':year_id', $year_id);
    $query->bindParam(':course_id', $course_id);
    $query->bindParam(':time_id', $time_id);
    $data = null;
    if($query->execute()){
      $data = $query->fetchAll();
    }
    return $data;
  }

  function is_subcode_exist($sub_code) {
    $sql = "SELECT * FROM curr_table WHERE sub_code = :sub_code;";
    $query = $this->db->connect()->prepare($sql);
    $query->bindParam(':sub_code', $this->sub_code);
    if ($query->execute()) {
      if ($query->rowCount() > 0) {
        return true;
      }
    }
    return false;
  }

}

?>