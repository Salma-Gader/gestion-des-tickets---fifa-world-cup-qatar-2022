<?php

require dirname(__DIR__) . '/models/db.php';

class Matche extends DB {
//   private $teams;
//   private $first_team;
//   private $secound_team;
//   private $date;
//   private $stadium;

//   public function __construct($teams,$first_team,$secound_team,$date,$stadium) {
//     $this->teams = $teams;
//     $this->first_team = $first_team;
//     $this->secound_team = $secound_team;
//     $this->date = $date;
//     $this->stadium = $stadium;
//   }
  public function show() {
    try {
        // $stm = $this->pdo->prepare("SELECT matches.* , stadiums.* , teams.* ,
        // stadiums.name stadium_name , teams.name team_name
        // FROM matches 
        // INNER JOIN teams
        // INNER JOIN stadiums 
        // ON stadiums.id = stadium_id 
        // AND teams.id = matches.first_team_id OR teams.id = matches.second_team_id");
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

// $apple = new Matche("Apple","Apple","Apple","Apple","Apple");
// echo $apple->show();
?>