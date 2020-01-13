<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/BookDAO.php';

class BooksController extends Controller {


  function __construct() {
    $this->bookDAO = new BookDAO();
  }

  public function index() {

  }
/*
  private function handleSearchPlayer() {

    if (!$searchPlayersResult) {
      $errors = "No players found";
      $this->set('errors', $errors);
      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode(array(
          'result' => 'error',
          'errors' => $errors
        ));
        exit();
      }else{
        return $errors;
      }
      $_SESSION['error'] = $errors;
    } else {
      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode(array(
          'result' => 'ok',
          'todo' => $searchPlayersResult
        ));
        exit();
      }else{
        return searchPlayersResult;
      }
      $_SESSION['info'] = count($searchPlayersResult). " players found";
      header('Location: index.php');
      exit();
    }
  }*/

}
