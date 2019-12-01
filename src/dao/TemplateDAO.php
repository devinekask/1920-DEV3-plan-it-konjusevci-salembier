<?php

require_once( __DIR__ . '/DAO.php');

class TemplateDAO extends DAO {
public function selectAllTemplateWorkouts() {
  $sql = 'SELECT * FROM `workouts`';
  $stmt = $this->pdo->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


}
?>
