<?php
require('controllers/scripts.php');
include('reservation.php');
//if(isset($_POST['add'])) reserve(); 

// function reserve(){
    
//     $save = new crud();
//     $user =$_POST["user"];
//     $match =$_POST["match"];
//     $stadium =$_POST["stadium"];
//     $quantiter =$_POST["quantiter"];
//     $date =$_POST["date"];
//     $data =[$user,$match,$stadium,$quantiter,$date];
//     var_dump($_POST);
//     $save->action("INSERT INTO `reservation`(`user_id`, `match_id`, `stadiums_id`, `quantity`, `date`) VALUES (?,?,?,?,?)",$data);
//     //header('location:index.php');
// }

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
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row =$save->oneRow()){ ?>
            <tr>
                <th scope="row">1</th>
                <td><img src="../assets/img/<?= $row['image']; ?>" class="card-img-top" alt="Product" class="img-fluid"
                        height="80" width="70px"></td>
                <td><?php echo $row['first_team']; ?></td>
                <td><?php echo $row['second_team']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['price']; ?></td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
</body>
</html>