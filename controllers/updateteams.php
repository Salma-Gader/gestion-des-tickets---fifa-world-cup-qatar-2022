<?php 
require 'scripts.php';

$id = $_GET['update'];
$previous= new crud();
$result=$previous->oneRow("SELECT * FROM teams WHERE id=?",[$id]);
var_dump($result);

?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- Modal -->
    <div class="">
        <div class="d-flex justify-content-center row">
            <div class="d-flex justify-content-center">
            <h1 class="fs-2" id="exampleModalLabel">Edit Team</h1>
            
            </div>
                <form action="teams.php" id="form" method="POST" enctype="multipart/form-data" data-parsley-validate>
                    <div class="form-body">
                        <div class="container">
                    
                                <div class="form-group mt-2">
                                    <input class="form-control" id="id" name="id" type="hidden">
                            
                                    <input class="form-control" id="name" name="name" placeholder="Team Name" data-parsley-trigger="keyup" required>
                                </div>
                                
                                <div class="form-group mt-2">
                                    <input class="form-control" id="aka" name="aka" placeholder="Also Known As"  data-parsley-type="integer" data-parsley-trigger="keyup" required>
                                </div>
                                

                                <div class="form-group mt-2">
                                    <input class="form-control" id="country" name="country" placeholder="country"  data-parsley-type="integer" data-parsley-trigger="keyup" required>
                                </div>
                                
                                <div class="mt-2">
                                    <input class="form-control" name="image" type="file" id="formFile">
                                </div>
                                 <button type="submit" name="update" class="mt-4 btn btn-info">Update</button>
                                 <a href="teams.php" class="btn btn-info">Close</a>
                        </div>
                    
                       
                    
                </form>
            </div>
        </div>
    </div>