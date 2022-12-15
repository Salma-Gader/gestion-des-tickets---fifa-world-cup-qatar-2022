<?php
require('../../controllers/scripts.php');

$display = new crud();
$result=$display->allRows("SELECT * FROM stadiums");
?>
<?php include'../layouts/header.php'; ?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Stadiums</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Location</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Capacity</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><a href="#modal-stadium" data-bs-toggle="modal">Add</a></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($result as $row) { ?>
                    <tr>
                      <td>
                        <p class="text-center text-xs text-secondary mb-0">#<?= $row['id']?></p>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/all/<?= $row['image'] ?>" class="avatar avatar-xxl me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?= $row['name']?></h6>
                            <p class="text-xs text-secondary mb-0"><?= $row['description']?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs text-secondary mb-0"><?= $row['location']?></p>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $row['capacity']?></span>
                      </td>
                      <td class="align-middle">
                        <a href="updateStadiums.php?id=<?= $row['id'] ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
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
    <!-- TASK MODAL -->
    <div class="modal fade" id="modal-stadium">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="../../controllers/stadiums.class.php" method="POST" id="form-task" enctype="multipart/form-data">
            <div class="modal-header">
              <h5 class="modal-title">Add a stadium</h5>
              <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
            </div>
            <div class="modal-body">
              <!-- This Input Allows Storing Task Index  -->
              <input type="hidden" id="">
              <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" />
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
        </div>
      </div>
    </div>
  <?php include'../layouts/footer.php' ?>