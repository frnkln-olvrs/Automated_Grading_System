<?php 

require_once 'database.php';

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
    $sql = "INSERT INTO user (emp_id, email, f_name, l_name, m_name, acad_rank, user_role, password) VALUES
    (:emp_id, :email, :f_name, :l_name, :m_name, :acad_rank, :user_role, :password);";
    
    $query = $this->db->connect()->prepare($sql);
    $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
    $query->bindParam(':password', $hashedPassword);
    $query->bindParam(':emp_id', $this->emp_id);
    $query->bindParam(':email', $this->email);
    $query->bindParam(':f_name', $this->f_name);
    $query->bindParam(':l_name', $this->l_name);
    $query->bindParam(':m_name', $this->m_name);
    $query->bindParam(':user_role', $this->user_role);

    if ($query->execute()) {
      return true;
    } else {
      return false;  // Return false in case of an error
    }
  }

  function is_email_exist() {
    $sql = "SELECT * FROM user WHERE email = :email;";
    $query = $this->db->connect()->prepare($sql);
    $query->bindParam(':email', $this->email);
    if ($query->execute()) {
      if ($query->rowCount() > 0) {
        return true;
      }
    }
    return false;
  }

  function is_emp_id_exist() {
    $sql = "SELECT * FROM user WHERE emp_id = :emp_id;";
    $query = $this->db->connect()->prepare($sql);
    $query->bindParam(':emp_id', $this->emp_id);
    if ($query->execute()) {
      if ($query->rowCount() > 0) {
        return true;
      }
    }
    return false;
  }
}

?>