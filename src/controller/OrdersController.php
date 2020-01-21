<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';
require_once __DIR__ . '/../dao/ReviewDAO.php';
require_once __DIR__ . '/../dao/DataDAO.php';

class OrdersController extends Controller {

  private $productDAO;
  private $dataDAO;

  function __construct() {
    $this->productDAO = new ProductDAO();
    $this->dataDAO = new DataDAO();
  }

  public function checkout() {
    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertForm'){
       $insertedForm = $this->dataDAO->insertForm($_POST);
       if(empty($insertedForm)){
         $errors = $this->dataDAO->validate($_POST);
         $this->set('errors', $errors);
       }
       if(!empty($insertedForm)){
         header('Location: index.php?page=pay');
         exit();
       }

     }
    }


  }

  public function cart() {
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'add') {
        $this->_handleAdd();
       header('Location: index.php?page=cart');
        exit();
      }
      if ($_POST['action'] == 'empty') {
        $_SESSION['cart'] = array();
      }
      if ($_POST['action'] == 'update') {
        $this->_handleUpdate();
      }
      header('Location: index.php?page=cart');
      exit();
    }
    if (!empty($_POST['remove'])) {
      $this->_handleRemove();
      header('Location: index.php?page=cart');
      exit();
    }

    $this->set('title','Cart');
    $this->set('currentpage', 'cart');
  }

  private function _handleCheckout() {
    header('Location: index.php?page=checkout');
    exit();
    $this->set('currentpage', 'handleCheckout');
  }

  private function _handleAdd() {
    //splitsen in php
    



    if (empty($_SESSION['cart'][$_POST['id']])) {
      $product = $this->productDAO->selectProductById($_POST['id']);
      if (empty($product)) {
        return;
      }
      $_SESSION['cart'][$_POST['id']] = array(
        'product' => $product,
        'quantity' => 0,
        'versie' => ""
      );
    }
    $_SESSION['cart'][$_POST['id']]['quantity']++;
    if(!empty($_POST["quantity"]))$_SESSION['cart'][$_POST['id']]['quantity'] = $_POST["quantity"];
    if(!empty($_POST["versie"]))$_SESSION['cart'][$_POST['id']]['versie'] = $_POST["versie"];
    $this->set('currentpage', 'handleAdd');
  }

  private function _handleRemove() {
    if (isset($_SESSION['cart'][$_POST['remove']])) {
      unset($_SESSION['cart'][$_POST['remove']]);
    }
  }

  private function _handleUpdate() {
    foreach ($_POST['quantity'] as $id => $quantity) {
      if (!empty($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] = $quantity;
      }
    }
    $this->_removeWhereQuantityIsZero();
  }

  private function _removeWhereQuantityIsZero() {
    foreach($_SESSION['cart'] as $id => $info) {
      if ($info['quantity'] <= 0) {
        unset($_SESSION['cart'][$id]);
      }
    }
  }

}
