<?php 
require('scripts.php');

if (isset($_POST['save']))   saveData();

function saveData(){
    $insert = new crud();
    $name=$_POST["name"];
    $description=$_POST["description"];
    $capacity=$_POST["capacity"];
    $location=$_POST["location"];
    $data=[$name,$description,$capacity,$location];
    $insert->action("INSERT INTO stadiums(name,description,capacity,location) VALUES(?,?,?,?)",$data);
    header("Location: ../admin/pages/stadiums.php");
}

?>