<?php

require dirname(__DIR__) . '/models/db.php';
require dirname(__DIR__) . '/admin/includes/insertImage.php';

class Ticket extends DB {
  public $id;
  public function show() {
    try {
      // 
    } catch (PDOException $e) {
        "Erreur" . $e->getMessage();
    }
  }
  public function add(){
    try {
      // 
    } catch (PDOException $e) {
        "Erreur" . $e->getMessage();
    }
  }
  public function getTeams() {
    try {
      // 
    } catch (PDOException $e) {
        "Erreur" . $e->getMessage();
    }
  }
  public function getStadiums() {
    try {
      // 
    } catch (PDOException $e) {
        "Erreur" . $e->getMessage();
    }
  }
  public function edit() {
    try {
      // 
    } catch (PDOException $e) {
        "Erreur" . $e->getMessage();
    }
  }
  public function update() {
    try {
      // 
    } catch (PDOException $e) {
        "Erreur" . $e->getMessage();
    }
  }
  public function delete() {
    try {
      // 
    } catch (PDOException $e) {
        "Erreur" . $e->getMessage();
    }
  }
}
?>