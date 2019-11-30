<?php

require_once( __DIR__ . '/DAO.php');

class PlannerDAO extends DAO {

  public function selectWorkoutById($id){
    $sql = "SELECT * FROM `personal_workouts` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectAllWorkouts(){
    $sql = "SELECT * FROM `personal_workouts`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function deleteWorkout($id){
    $sql = "DELETE FROM `personal_workouts` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
  }

  public function insertWorkout($data) {
    //$errors = $this->validate( $data );
    if (true) {
      $sql = "INSERT INTO `personal_workouts` (`days`, `exercises`, `time`, `weight`, `height`, `age`, `sporty`) 
      VALUES (:days, :exercises, :time, :weight, :height, :age, :sporty)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':days', implode(',', $data['days']));
      $stmt->bindValue(':exercises', implode(',', $data['exercises']));
      $stmt->bindValue(':time', $data['time']);
      $stmt->bindValue(':weight', $data['weight']);
      $stmt->bindValue(':height', $data['height']);
      $stmt->bindValue(':age', $data['age']);
      $stmt->bindValue(':sporty', $data['sporty']);
      if ($stmt->execute()) {
        return true;
      }
    }
    return false;
  }

  public function validate( $data ){
    $errors = [];
    if (!isset($data['created'])) {
      $errors['created'] = 'Gelieve created in te vullen';
    }
    if (!isset($data['modified'])) {
      $errors['modified'] = 'Gelieve modified in te vullen';
    }
    if (!isset($data['checked'])) {
      $errors['checked'] = 'Gelieve checked in te vullen';
    }
    if (empty($data['text']) ){
      $errors['text'] = 'Gelieve een text in te vullen';
    }
    return $errors;
  }

}
