<?php
//include Userimp.php
include('../../controllers/Userimp.php');
include('../../middlewares/isloggedin.php');
// check if user is admin
$islogedin = new IslogedIn();
//check if user is admin
if ($_SESSION['isadmin'] == 1) {
    //if the user is admin redirect to admin.php
    header('location: ./admin/pages/dashboard.php');
}
?>
<?php include'../layouts/header.php' ?>
  <?php isset($page) ?include'../components/table.php' : include'../components/statistics.php' ?>
<?php include'../layouts/footer.php' ?>