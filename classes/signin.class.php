<?php 

require_once 'database.php';

class Account {

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

  function sign_in_user() {
    $sql = "SELECT * FROM user WHERE emp_id = :emp_id LIMIT 1;";
    $query = $this->db->connect()->prepare($sql);
    $query->bindParam(':emp_id', $this->emp_id);

    if ($query->execute()) {
      $accountData =$query->fetch(PDO::FETCH_ASSOC);

      if ($accountData && password_verify($this->password, $accountData['password'])) {
        $this->user_role = $accountData['user_role'];
        $this->email = $accountData['email'];
        $this->f_name = $accountData['f_name'];
        $this->l_name = $accountData['l_name'];
        $this->m_name = $accountData['m_name'];
        $this->acad_rank = $accountData['acad_rank'];
        return true;
      }
    }

    return false;
  }
  
}

?>