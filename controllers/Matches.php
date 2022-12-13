<?php

require dirname(__DIR__) . '/models/db.php';

class Matche extends DB {
  public function show() {
    try {
        $sql = "select matches.* , stadiums.name AS stadium_name ,
        first_team.image AS first_team_image ,
        second_team.image AS second_team_image , 
        first_team.name AS first_team_name ,
        second_team.name AS second_team_name 
        FROM matches 
        JOIN teams first_team ON matches.first_team_id = first_team.id 
        JOIN teams second_team ON matches.second_team_id = second_team.id 
        JOIN stadiums ON matches.stadium_id = stadiums.id";
        $stm = $this->pdo->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();
        return $result;
    } catch (PDOException $e) {
        "Erreur" . $e->getMessage();
    }
  }
  public function add(){
    try {

        $first_team_id  = $_POST['first_team'];
        $second_team_id = $_POST['second_team'];
        $date           = $_POST['date'];
        $stadium_id     = $_POST['stadium'];

        $stm = $this->pdo->prepare("INSERT INTO matches(first_team_id , second_team_id , date , stadium_id) VALUES(?,?,?,?)");
        $stm->execute([$first_team_id,$second_team_id,$date,$stadium_id]);
    } catch (PDOException $e) {
        "Erreur" . $e->getMessage();
    }
  }
  public function getTeams() {
    try {
        $stm = $this->pdo->prepare("SELECT id , name FROM teams");
        $stm->execute();
        $result = $stm->fetchAll();
        return $result;
    } catch (PDOException $e) {
        "Erreur" . $e->getMessage();
    }
  }
  public function getStadiums() {
    try {
        $stm = $this->pdo->prepare("SELECT id , name FROM stadiums");
        $stm->execute();
        $result = $stm->fetchAll();
        return $result;
    } catch (PDOException $e) {
        "Erreur" . $e->getMessage();
    }
  }
  public function edit() {
    // 
  }
  public function update() {
    // 
  }
}
?>