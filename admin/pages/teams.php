<?php
require('../../controllers/scripts.php');
if(isset($_POST['add']))        AddTeams();
if(isset($_GET['delete']))      DeleteTeams();


function AddTeams(){

    $insert = new crud();
    
    $image  = ($_FILES['image']['name']);
    $target = "../assets/img/teams-img/" . $image;
    
    $name   =  $_POST["name"];
    $aka    =  $_POST["aka"];
    $country=  $_POST["country"];
    $data   =  [$image,$name,$aka,$country];
    
    
    
    $insert->action("INSERT INTO teams(image,name,aka,country) VALUES(?,?,?,?)",$data);
    move_uploaded_file($_FILES['image']['tmp_name'],$target);

    header("Location:teams.php");
    
  }
  
  function DeleteTeams(){
    $insert = new crud();
    $id = $_GET['delete'];
    
    $insert->allRows("DELETE FROM `teams` WHERE id = '$id'");
    // header("Location:teams.php");
  }
  
  
  
  $display = new crud();
  $result=$display->allRows("SELECT * FROM teams");
  
  
  include_once '../layouts/header.php';
  ?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Teams</h6>
              <div class="container"><!-- Button trigger modal -->
              <button type="button" class="btn btn-sm btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Team
                </button>
              </div>
            </div>
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Country</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($result as $row) { ?>
                                <tr> 
                                    <td>
                                        <div class="">
                                            <img src="../assets/img/teams-img/<?php echo $row['image'] ?>" class="ms-3 rounded " alt="team image " height="100" width="200">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm"><?php echo $row['name']?></h6>
                                            <p class="text-xs text-secondary mb-0"><?php echo $row['aka']?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-m text-secondary mb-0 ms-3 "><?php echo $row['country']?></p>
                                    </td>
                                    <td class="align-middle">
                                        <a href="updateteams.php?update=<?= $row['id']?>" class="btn" >Edit</a>
                                        <a href="teams.php?delete=<?= $row['id']?>" class="btn">delete</a>
                                       
                                    </td>
                                </tr>
                    <?php }?>

                  </tbody>
                </table>
              </div>
            </div>
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
                <form action="teams.php" id="form" method="POST" enctype="multipart/form-data" >
                    <div class="modal-body">
                        <div class="container">
                    
                                <div class="form-group mt-2">
                                    <input class="form-control" id="id" name="id" type="hidden">
                                    <label>name</label>
                                    <input class="form-control" id="name" name="name" placeholder="Product Name" data-parsley-trigger="keyup" required>
                                </div>
                                
                                <div class="form-group mt-2">
                                    <label for="exampleFormControlTextarea1">Nickname</label>
                                    <input class="form-control" id="aka" name="aka" placeholder="Nickname"  data-parsley-type="integer" data-parsley-trigger="keyup" required>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="exampleFormControlTextarea1">Group</label>
                                    <input class="form-control" id="group" name="group" placeholder="Group"  data-parsley-type="integer" data-parsley-trigger="keyup" required>
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
                        <button type="submit" name="add" class="btn btn-primary">Save</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<?php include '../layouts/footer.php';?>