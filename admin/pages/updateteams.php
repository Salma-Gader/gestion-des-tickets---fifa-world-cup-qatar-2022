<?php 
require('../../controllers/scripts.php');


if (isset($_POST['update']))    {UpdateTeams();}
if (isset($_GET['update']))    {
    $id = $_GET['update'];
    $previous= new crud();
    $result=$previous->oneRow("SELECT * FROM teams WHERE id=?", array($id));
}
function UpdateTeams(){
    $update = new crud();
    $id  = $_POST['update'];
    $name=$_POST["name"];
    $aka=$_POST["aka"];
    $country=$_POST["country"];
    $image = $_FILES['image']['name'] ?: $_POST['image'];

        $data=[$image,$name,$aka,$country,$id];
        $target = "../assets/img/teams-img/" . $image;
        move_uploaded_file($_FILES['image']['tmp_name'],$target);
        
        $update->action("UPDATE teams SET image=? , name=?, aka=?, country=? WHERE id=?",$data);
        header("Location:teams.php");

    
}
include_once '../layouts/header.php';

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
            <?php foreach ($result as $row) { ?>
                <form action="updateteams.php?update=<?= $_GET['update'] ?>" id="form" method="POST" enctype="multipart/form-data" >
                    <div class="form-body">
                        <div class="container  pe-5">
                    
                                <div class="form-group mt-2 m-3">
                                    <input class="form-control"  name="image" value="<?= $row['image'] ?>" type="hidden">
                            
                                    <input class="form-control" id="name" name="name" placeholder="Team Name" required  value="<?= $row['name'] ?>" >
                                </div>
                                
                                <div class="form-group mt-2 m-3">
                                    <input class="form-control" id="aka" name="aka" placeholder="Also Known As" value="<?= $row['aka']?>"  required>
                                </div>
                                

                                <div class="form-group mt-2 m-3">
                                    <input class="form-control" id="country" name="country" placeholder="country" value="<?= $row['country']?>" required>
                                </div>
                                
                                <div class="mt-2 m-3">
                                    <input class="form-control" name="image" type="file" id="formFile">
                                </div>
                                <div class="m-3">
                                    <button type="submit" name="update" value="<?= $row['id'] ?>" class="mt-4 btn btn-info">Update</button>
                                 <a href="teams.php" class="mt-4 btn btn-secondary">Close</a>
                                </div>
                                 
                        </div>
                        <?php } ?>
                    
                       
                    
                </form>
            </div>
        </div>
    </div>
    <?php include '../layouts/footer.php';?>