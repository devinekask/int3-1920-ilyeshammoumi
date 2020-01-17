<?php

require_once( __DIR__ . '/DAO.php');

class ReviewDAO extends DAO {

  public function selectReviewsByProducts($product){
    $sql = "SELECT * FROM `int3_reviews` WHERE `product_id` = :product ORDER BY `id` DESC LIMIT 3 ";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':product', $product);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectReviewById($id){
    $sql = "SELECT * FROM `int3_reviews` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);

  }

  public function insertReview($data){
    $errors = $this->validate($data);
    if(empty($errors)){
      $sql = "INSERT INTO `int3_reviews`(`product_id`, `opmerking`, `naam`, `score`) VALUES (:product_id, :opmerking, :naam, :score)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':product_id', $data['product_id']);
      $stmt->bindValue(':opmerking', $data['opmerking']);
      $stmt->bindValue(':naam', $data['naam']);
      $stmt->bindValue(':score', $data['score']);
      if($stmt->execute()){
        return $this->selectReviewById($this->pdo->lastInsertId());
      }
      return false;
    }

  }


  public function validate($data){
    $errors = [];
    if (empty($data['score'])) {
      $errors['score'] = 'Gelieve een score in te geven';
  }
    if (empty($data['naam'])) {
      $errors['naam'] = 'Gelieve uw voornaam in te geven';
    }
    if (empty($data['opmerkingen'])) {
        $errors['review'] = 'Gelieve uw mening te geven';
    }

    return $errors;
  }

}
