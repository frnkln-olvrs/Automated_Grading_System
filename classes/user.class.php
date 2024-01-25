<?php 

require_once './database.php';

class User {
  //attributes

  public $user_id;
  public $emp_id;
  public $user_role;
  public $email;
  public $password;
  public $f_name;
  public $l_name;
  public $m_name;
  public $acad_rank;

  protected $db;

  function __construct() {
    $this->db = new Database();
  }
 
  //Methods

  function add() {
    $sql = "INSERT INTO user (emp_id, email, f_name, l_name, m_name, acad_rank, user_role) VALUES
    (:emp_id, :email, :f_name, :l_name, :m_name, :acad_rank, :user_role);";


  }
}

?>