<?php
require('controllers/scripts.php');
if(isset($_POST['add'])) reserve(); 

function reserve(){
    
    $save = new crud();
    $user =$_POST["user"];
    $match =$_POST["match"];
    $stadium =$_POST["stadium"];
    $quantiter =$_POST["quantiter"];
    $date =$_POST["date"];
    var_dump($_POST);
    $data =[$user,$match,$stadium,$quantiter,$date];
    $save->action("INSERT INTO `reservation`(`user_id`, `match_id`, `stadiums_id`, `quantity`, `date`) VALUES (?,?,?,?,?)",$data);
    header('location:reservation.php');
}


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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action="test1.php" method="POST">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" >user</label>
  <input  class="form-control" id="exampleFormControlInput1" name="user" placeholder="user">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" >match</label>
  <input  class="form-control" id="exampleFormControlInput1" name="match" placeholder="match">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" >stadium</label>
  <input  class="form-control" id="exampleFormControlInput1" name="stadium" placeholder="stadium">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" >quantiter</label>
  <input  class="form-control" id="exampleFormControlInput1" name="quantiter" placeholder="quantiter">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" >date</label>
  <input  class="form-control" id="exampleFormControlInput1" name="date" placeholder="date">
</div>
 <button type="submit" name="add" class="btn btn-primary">submit</button>
    </form>
</body>
</html>