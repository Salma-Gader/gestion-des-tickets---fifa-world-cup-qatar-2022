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
        JOIN stadiums ON matches.stadium_id = stadiums.id 
        LIMIT 1;";
        $stm = $this->pdo->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();
        return $result;
    } catch (PDOException $e) {
        "Erreur" . $e->getMessage();
    }
  }
  public function create() {
    // 
    try {
        $data=[$this->teams,$this->first_team,$this->secound_team,$this->date,$this->stadium];
        $stm = $this->pdo->prepare("INSERT INTO stadiums(teams,first_team,secound_team,date,stadium) VALUES(?,?,?,?,?)");
        $stm->execute($data);
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