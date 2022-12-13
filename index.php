<?php
include('./middlewares/isLoggedin.php');
require 'controllers/scripts.php';
$islogedin = new IslogedIn();
$display = new crud();
$result=$display->allRows("SELECT * FROM teams");
?>
<!-- landing page  -->
<!-- landing page  -->
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
    <link rel="stylesheet" href="../assets/css/style.css">
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

    <!-- header image -->
    <section>

        <img src="../assets/img/all/fifa-img.png" class="position-absolute   groups-img img-fluid mx-auto d-block" height="30px" width="100%">
        <img src="../assets/img/all/text-image.png" width="70%" class="position-relative text-image">
        <div class="searsh input-group border rounded border-4 border-dark">
            <input type="search" class="form-control rounded-start" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <input placeholder="Select date" type="date" class="form-control">
            <button type="button" class=" btn-search btn  text-white">search</button>
        </div>
    </section>

    <!-- Upcoming Matches -->
    <section class="container">
        <div class="d-flex justify-content-between mt-4 mb-4 ">
            <h2>Upcoming Matchs</h2>
            <a href="teams.html" class="text-danger fs-5 ">View All &#10148</a>
        </div>

        <div class="row pb-5">
            <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top" src="../assets/img/all/SaudiMexico.webp" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-around">
                            <div class="me-3">
                                <p>NOV</p>
                                <p class="ms-2">23</p>
                            </div>
                            <div>
                                <p class="card-text">Saudi Arabia V Mexico</p>
                                <p class="card-text">180 $</p>
                                <p class="card-text"><i class="fa fa-map-marker me-2" aria-hidden="true"></i>947 Stadium</p>                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top" src="../assets/img/all/PolandArgentina.webp" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-around">
                            <div class="me-3">
                                <p>NOV</p>
                                <p class="ms-2">23</p>
                            </div>
                            <div>
                                <p class="card-text">Poland V Argentina</p>
                                <p class="card-text">225 $</p>
                                <p class="card-text"><i class="fa fa-map-marker me-2" aria-hidden="true"></i>947 Stadium</p>                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top" src="../assets/img/all/AustraliDenmark.webp" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex justify-content-around">
                            <div class="me-3">
                                <p>NOV</p>
                                <p class="ms-2">23</p>
                            </div>
                            <div>
                                <p class="card-text">Australia V Denmark</p>
                                <p class="card-text">197 $</p>
                                <p class="card-text"><i class="fa fa-map-marker me-2" aria-hidden="true"></i>Al Janoub st</p>                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top" src="../assets/img/all/TunisieFrance.webp" alt="Card image cap">
                    <div class="card-body">
                        <div class="d-flex justify-content-around">
                            <div class="me-3">
                                <p>NOV</p>
                                <p class="ms-2">23</p>
                            </div> 
                            <div>
                        <p class="card-text">Tunisie V France</p>
                        <p class="card-text">221 $</p>
                        <p class="card-text"><i class="fa fa-map-marker me-2" aria-hidden="true"></i>Education City Stadium</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Way To The Final -->
    <section class="col-12 d-flex justify-content-center mb-5">
        <img src="../assets/img/all/Way to final.png" class=" groups-img img-fluid mx-auto d-block" alt="image">
    </section>
    
    <!--Teams -->
    <section class="container">
        <div class="d-flex justify-content-between mt-4 mb-4">
            <h2>Browse National Teams</h2>
            <a href="allTeams.php" class="text-danger fs-5 ">View All &#10148</a>
        </div>

        <div class="row js-flickity" data-flickity-options='{ "wrapAround": true}'> <!-- Flickity plugin-->
        <?php foreach ($result as $row) { ?>
            <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top " height="200" src="../assets/img/teams-img/<?php echo $row['image'] ?>" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text"><?php echo $row['name']?></p>
                    <p class="card-text fw-light"><?php echo $row['aka']?></p>
                    <p class="card-text"><i class="fa fa-map-marker me-2" aria-hidden="true"></i><?php echo $row['country']?></p>
                    </div>
                </div>
            </div>
            <?php }?>
            <!-- <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top" src="assets/img/card2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Belgium National Team</p>
                        <p class="card-text">Group F</p>
                        <p class="card-text"><i class="fa fa-map-marker me-2" aria-hidden="true"></i>Belgium</p>               
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top" src="assets/img/card3.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Croitia National Team</p>
                        <p class="card-text">Group F</p>
                        <p class="card-text"><i class="fa fa-map-marker me-2" aria-hidden="true"></i>Croitia</p>                
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <img class="card-img-top" src="assets/img/card4.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Canada National Team</p>
                        <p class="card-text">Group F</p>
                        <p class="card-text"><i class="fa fa-map-marker me-2" aria-hidden="true"></i>Canada</p>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
 <!--  groups  -->
 <section class="col-12 d-flex justify-content-center bg-danger mt-5 mb-5">
        <img src="../assets/img/FIFA-World-Cup-Qatar-2022-Final-groups.jpg" class="container groups-img img-fluid mx-auto d-block" alt="image">
    </section>



    <!-- Stadiums -->
    
    <section class="container">
       
        <div class="d-flex justify-content-between mt-4 mb-4">
            <h2>Browse Available Stadiums</h2>
            <a href="stadiums.html" class="text-danger fs-5 ">View All &#10148</a>
        </div>
        

            <div class="row js-flickity" data-flickity-options='{ "wrapAround": true}'>
            <?php 
        $display = new crud();
        $result=$display->allRows("SELECT * FROM stadiums");
        foreach ($result as $row) { ?>    
                <div class="col-md-3 ">
                    <div class="card mb-4 "height="auto">
                        <img class="card-img-top" height="250" src="../assets/img/all/<?= $row['image'] ?>" alt="Card image cap">
                        <div class="card-body">
                        <p class="card-text"><?= $row['name']?></p>
                        <p class="card-text">Capacity : <?= $row['capacity']?></p>
                        <p class="card-text"><i class="fa fa-map-marker me-2" aria-hidden="true"> <?= $row['location']?> </i></p>
                    </div>
                </div>
            </div>
        <?php } ?>
           
    </section> 

    <!-- footer -->
    <footer class="bg-danger text-white p-5 mt-5">


        <div class="row d-flex justify-content-around">
            <div class="col-lg-3 mb-3">
                <h3 class="">FIFA World Cup © 2022</h3>
            </div>

            <div class="col-6 col-md-2  mb-3">
                <h5>About</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">How it works</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Careers</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Press</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Blog</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Forum</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2  mb-3">
                <h5>Partner with us</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Partnership programs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Affiliate program</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Connectivity partners</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Promotions and events</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Integrations</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Community</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Loyalty program</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2  mb-3">
                <h5>Support</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Help Center</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Contact us</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Privacy policy</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Terms of service</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Trust and safety</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Accessibility</a></li>
                </ul>
            </div>


            <div class="col-6 col-md-2  mb-3">
                <h5>Get the app</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">YouTicketscom for Android</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">YouTicketscom for iOS</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Mobile site</a></li>
                    <button class="btn btn-default me-5  p-0">
                        <img class="rounded" src="../assets/img/all/apple.png" width="100%" />
                    </button>
                    <button class="btn btn-default me-5 mt-3  p-0">
                        <img class="rounded" src="../assets/img/all/googleplay.png" width="100%" />
                    </button>
                </ul>
            </div>



            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">

                <div>
                    <a href="#" class="fa fa-facebook text-white me-3"></a>
                    <a href="#" class="fa fa-twitter text-white me-3"></a>
                    <a href="#" class="fa fa-instagram text-white"></a>
                </div>

                <p>© 2022 You Tickets</p>
            </div>
    </footer>
</body>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</html>