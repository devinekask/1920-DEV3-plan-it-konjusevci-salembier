<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/PlannerDAO.php';

class PlannerController extends Controller {

  private $plannerDAO;

  function __construct() {
    $this->plannerDAO = new PlannerDAO();
  }

  public function index() {
    $this->set('title', 'Work it out');
    var_dump($_POST);

    /*if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
      header('Content-Type: application/json');
      echo json_encode($workouts);
      exit();
    }*/
  }

  public function planner() {
    $this->set('title', 'Maak een plan');
  }
  
  /*private function handleInsertTodo() {
    $data = array(
      'created' => date('Y-m-d H:i:s'),
      'modified' => date('Y-m-d H:i:s'),
      'checked' => 0,
      'text' => $_POST['text']
    );
    $insertTodoResult = $this->todoDAO->insert($data);
    if (!$insertTodoResult) {
      $errors = $this->todoDAO->validate($data);
      $this->set('errors', $errors);
      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode(array(
          'result' => 'error',
          'errors' => $errors
        ));
        exit();
      }
      $_SESSION['error'] = 'De todo kon niet toegevoegd worden!';
    } else {
      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode(array(
          'result' => 'ok',
          'todo' => $insertTodoResult
        ));
        exit();
      }
      $_SESSION['info'] = 'De todo is toegevoegd!';
      header('Location: index.php');
      exit();
    }
  }
  */

}
