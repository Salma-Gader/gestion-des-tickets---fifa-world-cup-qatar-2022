<?php include'../pages/data.php';
if(isset($_GET['type'])){
  if($_GET['type'] == "teams"){ $page = $pages['teams']; }
  elseif($_GET['type'] == "stadiums"){ $page = $pages['stadiums']; }
  elseif($_GET['type'] == "matches"){ $page = $pages['matches']; }
  elseif($_GET['type'] == "reservation"){ $page = $pages['reservation']; }
  else{ header('location:../pages/dashboard.php');}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    <?= $page['title']; ?>
  </title>
  <?php include'../components/style-links.php' ?>
</head>

<body class="g-sidenav-show  bg-gray-100">
  <?php include'../components/side.php' ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">