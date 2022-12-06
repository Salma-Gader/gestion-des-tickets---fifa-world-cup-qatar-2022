<?php
require dirname(__DIR__) . '/models/db.php';
class crud extends DB
{
    //insert data - update & delete
    function action($query,$data=[])
    {
        try {
            $stm = $this->pdo->prepare($query);
            $stm->execute($data);
        } catch (PDOException $e) {
            "Erreur" . $e->getMessage();
        }
    }
    // to fetch one row
    function oneRow($query,$data)
    {
        try {
            $stm = $this->pdo->prepare($query);
            $stm->execute($data);
        } catch (PDOException $e) {
            "Erreur" . $e->getMessage();
        }
    }
    // to fetch all rows
    function allRows($query)
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


