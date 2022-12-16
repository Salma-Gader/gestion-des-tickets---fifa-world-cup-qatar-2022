<?php

//include Userimp.php
include('../../controllers/Userimp.php');
include('../../middlewares/isloggedin.php');
include('../../middlewares/isadmin.php');
// check if user is admin
$islogedin = new IslogedIn();
$isadmin = new IsAdmin();
//check if user is admin
// if ($_SESSION['isadmin'] == 1)
// {
    //if the user is admin redirect to admin.php  
include'../layouts/header.php';
isset($page) ?include'../components/table.php' : include'../components/statistics.php';
include'../layouts/footer.php';
// }else{
    //if the user is not admin redirect to index.php
//     header('location: ../../../../index.php');
// }


function countTeams($table) 
{  
   $database= new DB();
   $sql= "SELECT COUNT(id) FROM $table";
   $stm = $database->getDb()->prepare($sql);
   $stm->execute();
   $dbstm=$stm->fetchAll(PDO::FETCH_ASSOC);
    
    return $dbstm;
    
}

?>