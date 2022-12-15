<?php
require 'controllers/scripts.php';

$display = new crud();
$result=$display->allRows("SELECT * FROM teams");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets FIFA World Cup Qatar </title>
    <!-- bootstrap and css links  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="admin/assets/css/style.css">
     <!-- icon library -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

   
</head>

<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand fw-bold ms-5" href="index.php" style="color:#8A1538 ;">YouTickets.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5 d-flex justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active me-5 fw-bold" aria-current="page" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-5 fw-bold" aria-current="page" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-5 fw-bold" href="allTeams.php">Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="#">Contact</a>
                    </li>
                </ul>
                <span class="me-5">
                    <a class="btn-login btn border border-1 me-3" href="#" style="color: #8A1538 ;">Log In</a>
                    <a class="btn-signUp  btn btn-danger text-white" href="#">Sign Up</a>
                </span>
            </div>
        </div>
    </nav>

<!-- bootstrap and css links  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="admin/assets/css/style.css">

<section class="container">
        <div class="d-flex justify-content-between mt-4 mb-4">
            <h2>Browse National Teams</h2>
        </div>

        <div class="row"> <!-- Flickity plugin-->
        <?php foreach ($result as $row) { ?>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top " height="200" src="admin/assets/img/teams-img/<?php echo $row['image'] ?>" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text"><?php echo $row['name']?></p>
                    <p class="card-text fw-light"><?php echo $row['aka']?></p>
                    <p class="card-text"><i class="fa fa-map-marker me-2" aria-hidden="true"></i><?php echo $row['country']?></p>
                    </div>
                </div>
            </div>
            <?php }?>
    
        </div>
    </section>
    </body>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</html>