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

  $this->set('books', $books);
  $this->set('title', 'Home');

  }

  public function detail() {
    if(!empty($_GET['id'])){
      $book = $this->productDAO->selectBookById($_GET['id']);
    }
    if(empty($book)){
      $_SESSION['error'] = 'Deze product werd niet gevonden';
      header('Location:index.php');
      exit();
    }

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertReview'){
        $lastInsertedQuote = $this->reviewDAO->insertReview($_POST);
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
    $this->set('book',$book);
    $this->set('reviews', $this->reviewDAO->selectReviewsByProducts($_GET['id']));
    $this->set('title','Details');
  }


}
