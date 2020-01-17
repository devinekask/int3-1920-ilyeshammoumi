<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';

class ProductsController extends Controller {


  function __construct() {
    $this->productDAO = new ProductDAO();
  }

  public function index() {
  $books = $this ->productDAO->selectAllBooks();

  $this->set('books', $books);
  $this->set('title', 'Home');

  }


}
