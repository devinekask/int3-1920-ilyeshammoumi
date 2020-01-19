<?php

require_once( __DIR__ . '/DAO.php');

class ProductDAO extends DAO {

  public function selectAllBooks(){
    $sql = "SELECT * FROM `int3_products` WHERE `id` BETWEEN 2 AND 11
    ORDER BY `name` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAllHumoProducts(){
    $sql = "SELECT * FROM `int3_products` WHERE `id` BETWEEN 12 AND 14
    ORDER BY `name` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAllProducts(){
    $sql = "SELECT * FROM `int3_products` WHERE `id` BETWEEN 15 AND 18
    ORDER BY `name` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }


  public function selectBookById($id){
    $sql = "SELECT * FROM `int3_products` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id',$id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }


}
?>
