<?php
include('controllers/scripts.php');
include('db.php');$save = new crud();
if(isset($POST['submit'])) save();
function save(){
    $user =$POST['user'];
    $match =$POST['match'];
    $stadium =$POST['stadium'];
    $quantiter =$POST['quantiter'];
    $date =$POST['date'];
    $data =[$user,$match,$stadium,$quantiter,$date];
    $save->action("INSERT INTO `reservation`(`id`, `user_id`, `match_id`, `stadiums_id`, `quantity`, `date`) VALUES ('?','?','?','?','?','?')",$data);
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
    <form action="scripts.php" method="POST">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" name="user">user</label>
  <input  class="form-control" id="exampleFormControlInput1" placeholder="user">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" name="match">match</label>
  <input  class="form-control" id="exampleFormControlInput1" placeholder="match">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" name="stadium">stadium</label>
  <input  class="form-control" id="exampleFormControlInput1" placeholder="stadium">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" name="quantiter">quantiter</label>
  <input  class="form-control" id="exampleFormControlInput1" placeholder="quantiter">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" name="date">date</label>
  <input  class="form-control" id="exampleFormControlInput1" placeholder="date">
</div>
<input class="btn btn-primary" type="submit" value="Submit" name="submit">
    </form>
</body>
</html>