<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';
require_once __DIR__ . '/../dao/ReviewDAO.php';

class ProductsController extends Controller {

  private $productDAO;
  private $reviewDAO;

  function __construct() {
    $this->productDAO = new ProductDAO();
    $this->reviewDAO = new ReviewDAO();
  }

  public function index() {
  $books = $this ->productDAO->selectAllBooks();
  $humoProducts = $this->productDAO->selectAllHumoProducts();
  $products = $this->productDAO->selectAllProducts();

  $this->set('books', $books);
  $this->set('humoProducts', $humoProducts);
  $this->set('products', $products);
  $this->set('title', 'Home');

  }

  public function detail() {
    if(!empty($_GET['id'])){
      $product = $this->productDAO->selectProductById($_GET['id']);
    }
    if(empty($product)){
      $_SESSION['error'] = 'Deze product werd niet gevonden';
      header('Location:index.php');
      exit();
    }

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertReview'){
        $lastInsertedQuote = $this->reviewDAO->insertReview($_POST);
        $data = array(
          'score' => (int)$_POST['score'],
          'naam' => $_POST['naam'],
          'opmerking' => $_POST['opmerking'],
          'product_id' => $_POST['product_id'] );
        if(!$lastInsertedQuote){
          $errors = $this->reviewDAO->validate($_POST);
          $this->set('errors', $errors);
        }else{
          $_SESSION['info'] = 'BEDANKT VOOR JE REVIEW !';
          header('Location: index.php?page=detail&id='. $_GET['id']);
          exit();
        }
      }
    }
    $this->set('product',$product);
    $this->set('reviews', $this->reviewDAO->selectReviewsByProducts($_GET['id']));
    $this->set('title','Details');
  }


}
