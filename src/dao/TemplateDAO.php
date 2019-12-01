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
  $sql = "SELECT * FROM `workout__details` WHERE `workout__id` = :id";
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

public function selectExcerciseById($id){
  $sql = "SELECT * FROM `exercises` WHERE `workout__id` = :id";
  $stmt = $this->pdo->prepare($sql);
  $stmt->bindValue(':id', $id);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}
?>
