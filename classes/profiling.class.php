<?php 

require_once 'database.php';

Class Profiling {

  public $profiling_id;
  public $f_name;
  public $l_name;
  public $m_name;
  public $email;
  public $start_service;
  public $end_service;
  public $acad_type;
  public $faculty_type;
  public $designation;
  public $department;

  protected $db;

  function __construct() {
    $this->db = new Database();
  }

  function add() {
    $sql = "INSERT INTO profiling_table (profiling_id, f_name, l_name, m_name, email, start_service, end_service, acad_type, faculty_type, designation, department) VALUES 
    (:profiling_id, :f_name, :l_name, :m_name, :email, :start_service, :end_service, :acad_type, :faculty_type, :designation, :department);";

    $query=$this->db->connect()->prepare($sql);
    $query->bindParam(':profiling_id', $this->profiling_id);
    $query->bindParam(':f_name', $this->f_name);
    $query->bindParam(':l_name', $this->l_name);
    $query->bindParam(':m_name', $this->m_name);
    $query->bindParam(':email', $this->email);
    $query->bindParam(':start_service', $this->start_service);
    $query->bindParam(':end_service', $this->end_service);
    $query->bindParam(':acad_type', $this->acad_type);
    $query->bindParam(':faculty_type', $this->faculty_type);
    $query->bindParam(':designation', $this->designation);
    $query->bindParam(':department', $this->department);
    
    if($query->execute()){
      return true;
    }
    else{
      return false;
    }  
  }

  function fetch($record_profiling_id) {
    $sql = "SELECT * FROM profiling_table WHERE profiling_id = :profiling_id;";
    $query=$this->db->connect()->prepare($sql);
    $query->bindParam(':profiling_id', $record_profiling_id);
    if($query->execute()){
      $data = $query->fetch();
    }
    return $data;
  }

  function show() {
    $sql = "SELECT * FROM profiling_table WHERE  ORDER BY profiling_id ASC;";
    $query = $this->db->connect()->prepare($sql);
    $data = null;
    if($query->execute()){
      $data = $query->fetchAll();
    }
    return $data;
  }

}

?>