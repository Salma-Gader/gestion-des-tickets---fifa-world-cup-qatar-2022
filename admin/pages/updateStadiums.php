<?php
require('../../controllers/scripts.php');
$id = $_GET['id'];
$previous= new crud();
$result=$previous->oneRow("SELECT * FROM stadiums WHERE id=?",[$id]);
?>
<?php include'../layouts/header.php';
foreach($result as $row)
?>

<div class="row">
<div class="col-2"></div>
<form class="col-8" action="../../controllers/stadiums.class.php" method="POST" enctype="multipart/form-data">
    <div class="modal-header">
        <h5 class="modal-title mt-5">Edit a stadium</h5>
        <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
    </div>
    <div class="modal-body">
        <input type="hidden" value="<?= $id ?>" name="id">
        <input type="hidden" name="photo" value="<?= $row['image'] ?>">
        <div class="mb-3">
            <label class="form-label"></label>
            <input type="text" name="name" class="form-control" value="<?= $row['name']?>"/>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" rows="2" name="description"><?= $row['description']?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Photo</label>
            <input type="file" name="photo" class="form-control" accept=".jpg,.png,.jpeg" />
        </div>
        <div class="mb-3">
            <label class="form-label">Capacity</label>
            <input type="text" name="capacity" class="form-control" value="<?= $row['capacity']?>" />
        </div>
        <div class="mb-3">
            <label class="form-label">Location</label>
            <input type="text" name="location" class="form-control" value="<?= $row['location']?>" />
        </div>

    </div>
    <div class="modal-footer">
        <a href="stadiums.php" class="btn btn-white">Cancel</a>
        <button type="submit" name="update" class="btn btn-primary task-action-btn">Update</button>
        <button type="submit" name="delete" class="btn btn-danger task-action-btn">Delete</button>
    </div>
</form>
<div class="col-2"></div>
</div>
<?php include '../layouts/footer.php' ?>
