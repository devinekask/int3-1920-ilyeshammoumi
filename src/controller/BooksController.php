<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/BookDAO.php';

class BooksController extends Controller {


  function __construct() {
    $this->bookDAO = new BookDAO();
  }

  public function index() {

  }


}
