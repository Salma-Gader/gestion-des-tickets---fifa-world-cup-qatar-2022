<?php 
require('scripts.php');
// class Staduims { public function ... } | Staduims::saveData() 
if (isset($_POST['save']))   saveData();
if (isset($_POST['update']))   updateData();
if (isset($_POST['delete']))   deleteData();

function saveData(){
    $insert = new crud();
    $photo  = $_FILES['photo']['name'];
    $target = "../admin/assets/img/all/" . $photo;
    $name=$_POST["name"];
    $description=$_POST["description"];
    $capacity=$_POST["capacity"];
    $location=$_POST["location"];
    $data=[$name,$photo,$description,$capacity,$location];
    $insert->action("INSERT INTO stadiums(name,image,description,capacity,location) VALUES(?,?,?,?,?)",$data);
    header("Location: ../admin/pages/stadiums.php");
    move_uploaded_file($_FILES['photo']['tmp_name'],$target);
}

function updateData(){
    $update = new crud();
    $id=$_POST["id"];
    $photo  = $_FILES['photo']['name']?:$_POST['photo'];
    $target = "../admin/assets/img/all/" . $photo;
    $name=$_POST["name"];
    $description=$_POST["description"];
    $capacity=$_POST["capacity"];
    $location=$_POST["location"];
    $data=[$name,$photo,$description,$capacity,$location,$id];
    $update->action("UPDATE stadiums SET name=?, image=?, description=?, capacity=?, location=? WHERE id=?",$data);
    header("Location: ../admin/pages/stadiums.php");
    move_uploaded_file($_FILES['photo']['tmp_name'],$target);
}

function deleteData(){
    $delete = new crud();
    $id=$_POST["id"];
    $data=[$id];
    $delete->action("DELETE FROM stadiums WHERE id=?",$data);
    header("Location: ../admin/pages/stadiums.php");
}
?>