<?php
require dirname(__DIR__) . '/models/db.php';
class crud extends DB
{
    //insert data - update & delete
    public function action($query,$data=[])
    {
        try {
            $stm = $this->pdo->prepare($query);
            $stm->execute($data);
        } catch (PDOException $e) {
            "Erreur" . $e->getMessage();
        }
    }
    // to fetch one row
    public function oneRow($query,$data)
    {
        try {
            $stm = $this->pdo->prepare($query);
            $stm->execute($data);
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            "Erreur" . $e->getMessage();
        }
    }
    // to fetch all rows
    public function allRows($query)
    {
        try {
            $stm = $this->pdo->prepare($query);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            "Erreur" . $e->getMessage();
        }
    }
    
}


