<?php 

class Database {
  private $host = 'localhost';
  private $username = 'root';
  private $password = '';
  private $database = 'auto_gsdb5';
  protected $connection;

  function connect() {
    try {
      $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
    }

    catch(PDOException $e) {
      echo "Connection Error!" . $e->getMessage();
    }

    return $this->connection;
  }  
}

?>