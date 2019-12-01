<?php

require_once( __DIR__ . '/DAO.php');

class TemplateDAO extends DAO {
public function selectAllTemplateWorkouts() {
  $sql = 'SELECT * FROM `workouts`';
  $stmt = $this->pdo->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function selectById($id){
  $sql = "SELECT * FROM `workout_details` WHERE `workout_id` = :id";
  $stmt = $this->pdo->prepare($sql);
  $stmt->bindValue(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function selectWorkoutById($id){
  $sql = "SELECT * FROM `workouts` WHERE `id` = :id";
  $stmt = $this->pdo->prepare($sql);
  $stmt->bindValue(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function selectExcerciseById($id=1){
  $sql = "SELECT * FROM `exercises` WHERE `workout_id` = :id";
  $stmt = $this->pdo->prepare($sql);
  $stmt->bindValue(':id', $id);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}
?>
