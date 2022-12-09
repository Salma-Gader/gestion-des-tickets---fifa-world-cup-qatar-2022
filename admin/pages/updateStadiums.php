<?php
require('../../controllers/scripts.php');
$id = $_GET['id'];
$previous= new crud();
$result=$previous->oneRow("SELECT * FROM stadiums WHERE id=?",array($id));

?>
<?php include'../layouts/header.php';
foreach($result as $row)
?>

<div class="row">
<div class="col-2"></div>
<form class="col-8" action="../../controllers/stadiumsCrud.php" method="POST" id="form-task">
    <div class="modal-header">
        <h5 class="modal-title mt-5">Edit a stadium</h5>
        <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
    </div>
    <div class="modal-body">
        <!-- This Input Allows Storing Task Index  -->
        <input type="hidden" id="task-id">
        <div class="mb-3">
            <label class="form-label"></label>
            <input type="text" name="name" class="form-control"  value="<?= $row['name'] ?>"/>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" rows="2" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Photo</label>
            <input type="file" name="photo" class="form-control" accept=".jpg,.png,.jpeg" />
        </div>
        <div class="mb-3">
            <label class="form-label">Capacity</label>
            <input type="text" name="capacity" class="form-control" />
        </div>
        <div class="mb-3">
            <label class="form-label">Location</label>
            <input type="text" name="location" class="form-control" />
        </div>

    </div>
    <div class="modal-footer">
        <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
        <button type="submit" name="save" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
    </div>
</form>
<div class="col-2"></div>
</div>
<?php include '../layouts/footer.php' ?>
