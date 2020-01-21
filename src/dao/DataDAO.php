<?php

require_once __DIR__ . '/DAO.php';

class DataDAO extends DAO {
    public function insertForm($data) {
        $errors = $this->validate($data);
        if (empty($errors)) {
          $sql = "INSERT INTO `int3_data` (`id`, `aanhef`, `voornaam`, `achternaam`, `land`, `woonplaats`, `straatnaam`, `huisnummer`, `email`, `telefoonnummer`, `betaalwijze`) VALUES ( NULL, :aanhef, :voornaam, :achternaam, :land, :woonplaats, :straatnaam, :huisnummer, :email, :telefoonnummer, :betaalwijze)";
          $stmt = $this->pdo->prepare($sql);
          $stmt->bindValue(':aanhef', $data['aanhef']);
          $stmt->bindValue(':voornaam', $data['voornaam']);
          $stmt->bindValue(':achternaam', $data['achternaam']);
          $stmt->bindValue(':land', $data['land']);
          $stmt->bindValue(':woonplaats', $data['woonplaats']);
          $stmt->bindValue(':straatnaam', $data['straatnaam']);
          $stmt->bindValue(':huisnummer', $data['huisnummer']);
          $stmt->bindValue(':email', $data['email']);
          $stmt->bindValue(':telefoonnummer', $data['telefoonnummer']);
          $stmt->bindValue(':betaalwijze', $data['betaalwijze']);
          if($stmt->execute()){
            return $this->pdo->lastInsertId();
          }
        }

        return false;
      }
      public function insertorderid($inserteduser, $productid, $amount) {
        $sql = "INSERT INTO `int3_orders` (`product_id`, `amount`, `user_id`) VALUES (:product_id, :amount, :user_id)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':product_id', $productid);
        $stmt->bindValue(':amount', $amount);
        $stmt->bindValue(':user_id', $inserteduser);
        $stmt->execute();
      }

      public function validate($data) {
        $errors = array();


          if (empty($data['aanhef'])) {
            $errors['aanhef'] = 'Gelieve uw aanhef in te vullen';
          }
          if (empty($data['voornaam'])) {
            $errors['voornaam'] = 'Gelieve uw voornaam in te vullen';
          }
          if (empty($data['achternaam'])) {
            $errors['achternaam'] = 'Gelieve uw achternaam in te vullen';
          }
          if (empty($data['land'])) {
            $errors['land'] = 'Gelieve uw land in te vullen';
          }
          if (empty($data['woonplaats'])) {
            $errors['woonplaats'] = 'Gelieve uw woonplaats in te vullen';
          }
          if (empty($data['straatnaam'])) {
            $errors['straatnaam'] = 'Gelieve uw straatnaam in te vullen';
          }
          if (empty($data['huisnummer'])) {
            $errors['huisnummer'] = 'Gelieve uw huisnummer in te vullen';
          }
          if (empty($data['email'])) {
            $errors['email'] = 'Gelieve uw email in te vullen';
          }
          if (empty($data['telefoonnummer'])) {
            $errors['telefoonnummer'] = 'Gelieve uw telefoonnummer in te vullen';
          }



        return $errors;
      }



    }


?>
