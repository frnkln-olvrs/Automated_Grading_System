<?php

require_once 'database.php';

Class Curr_table{

  //attributes
  public $curr_id;
  public $sub_code;
  public $sub_prequisite;
  public $lec;
  public $lab;

  protected $db;

  function __construct()
  {
    $this->db = new Database();
  }

  //Methods

  // function add(){
  //   $sql = "INSERT INTO products (productname, category, price, availability) VALUES 
  //   (:productname, :category, :price, :availability);";

  //   $query=$this->db->connect()->prepare($sql);
  //   $query->bindParam(':productname', $this->productname);
  //   $query->bindParam(':category', $this->category);
  //   $query->bindParam(':price', $this->price);
  //   $query->bindParam(':availability', $this->availability);
    
  //   if($query->execute()){
  //     return true;
  //   }
  //   else{
  //     return false;
  //   }	
  // }

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

  // function fetch($record_id){
  //   $sql = "SELECT * FROM products WHERE id = :id;";
  //   $query=$this->db->connect()->prepare($sql);
  //   $query->bindParam(':id', $record_id);
  //   if($query->execute()){
  //     $data = $query->fetch();
  //   }
  //   return $data;
  // }

  function show(){
    $sql = "SELECT * FROM curr_table ORDER BY sub_code ASC;";
    $query=$this->db->connect()->prepare($sql);
    $data = null;
    if($query->execute()){
      $data = $query->fetchAll();
    }
    return $data;
  }

}

?>