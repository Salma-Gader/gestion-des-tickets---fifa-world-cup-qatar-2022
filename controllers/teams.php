<?php
require 'scripts.php';


if(isset($_POST['add']))      AddTeams();



function AddTeams(){

    $insert = new crud();
    $name=$_POST["name"];
    $aka=$_POST["aka"];
    $country=$_POST["country"];
    $data=[$name,$aka,$country];
    $insert->action("INSERT INTO teams(name,aka,country) VALUES(?,?,?)",$data);
    header("Location:teams.php");

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage Teams</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>


    <!-- table  -->
    <div class="container">
    <!-- Button trigger modal -->
    <div class="d-flex justify-content-end p-5 ">
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Team
    </button>
    </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered text-center">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th> image</th>
                            <th> name</th>
                            <th>aka</th>
                            <th>country</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Team</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                            <form action="teams.php" id="form" method="POST" enctype="multipart/form-data" data-parsley-validate>
                    <div class="modal-body">
                        <div class="container">
                    
                                <div class="form-group mt-2">
                                    <input class="form-control" id="id" name="id" type="hidden">
                                    <label>name</label>
                                    <input class="form-control" id="name" name="name" placeholder="Product Name" data-parsley-trigger="keyup" required>
                                </div>
                                
                                <div class="form-group mt-2">
                                    <label for="exampleFormControlTextarea1">aka</label>
                                    <input class="form-control" id="aka" name="aka" placeholder="aka"  data-parsley-type="integer" data-parsley-trigger="keyup" required>
                                </div>
                                

                                <div class="form-group mt-2">
                                <label for="exampleFormControlTextarea1">country</label>
                                    <input class="form-control" id="country" name="country" placeholder="country"  data-parsley-type="integer" data-parsley-trigger="keyup" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">image</label>
                                    <input class="form-control" name="image" type="file" id="formFile">
                                </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="add" class="btn btn-info">Save changes</button>
                </div>
                            </form>
            </div>
        </div>
    </div>


</body>
</html>