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
    $errors = $this->validate( $data );
    if (empty($errors)) {
      $sql = "INSERT INTO `personal_workouts` (`days`, `workouts`, `exercises_id`, `time`, `weight`, `height`, `age`, `sporty`) 
      VALUES (:days, :workouts, :exercises_id, :time, :weight, :height, :age, :sporty)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':days', implode(',', $data['days']));
      $stmt->bindValue(':workouts', $data['workouts']);
      $stmt->bindValue(':exercises_id', implode(',', $data['exercises_id']));
      $stmt->bindValue(':time', $data['time']);
      $stmt->bindValue(':weight', $data['weight']);
      $stmt->bindValue(':height', $data['height']);
      $stmt->bindValue(':age', $data['age']);
      $stmt->bindValue(':sporty', $data['sporty']);
      if ($stmt->execute()) {
        return true;
      }
    }
    $_SESSION['errors'] = $errors;
    return false;
  }

  public function validate( $data ){
    $errors = [];
    if (empty($data['days'])) {
      $errors['days'] = 'Gelieve minstens 1 dag aan te duiden';
    }
    if (empty($data['workouts'])) {
      $errors['workouts'] = 'Gelieve een workout aan te duiden';
    }
    if (empty($data['exercises_id'])) {
      $errors['exercises_id'] = 'Gelieve minstens 1 oefening te doen';
    }
    if (empty($data['time']) ){
      $errors['time'] = 'Gelieve een tijd mee te geven';
    }
    if (empty($data['weight']) ){
      $errors['weight'] = 'Gelieve uw gewicht mee te geven';
    }
    if (empty($data['height']) ){
      $errors['height'] = 'Gelieve uw lengte mee te geven';
    }
    if (empty($data['age']) ){
      $errors['age'] = 'Gelieve uw leeftijd mee te geven';
    }
    if (empty($data['sporty']) ){
      $errors['sporty'] = 'Gelieve uw bekwaamheid mee te geven';
    }
    return $errors;
  }

}
