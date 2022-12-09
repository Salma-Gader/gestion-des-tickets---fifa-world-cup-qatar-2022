<?php
require '../../controllers/Matches.php';
include'../layouts/header.php';
$page = $pages['matches'];
$matches = new Matche();
$result = $matches->show();
?>
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6><?= $page['title'] ?></h6>
              </div>
              <div class="container"><!-- Button trigger modal -->
                <button type="button" class="btn btn-sm btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Matche
                </button>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TEAMS</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DATE</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STADIUM</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) { ?>
                          <tr>
                            <td>
                              <p class="text-center text-xs text-secondary mb-0">#<?= $row['id'] ?></p>
                            </td>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <img src="../assets/img/all/<?= $row['first_team_image'] ?>" class="avatar avatar-sm me-3" alt="user1">
                                  <img src="../assets/img/all/<?= $row['second_team_image'] ?>" class="avatar avatar-sm me-3" alt="user1">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm"><?=  $row['first_team_name'] ?> / </h6>
                                  <h6 class="mb-0 text-sm"><?=  $row['second_team_name'] ?></h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs text-secondary mb-0"><?= $row['date'] ?></p>
                            </td>
                            <td>
                              <p class="text-xs text-secondary mb-0"><?= $row['stadium_name'] ?></p>
                            </td>
                            <td class="align-middle">
                              <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                              </a>
                            </td>
                          </tr>
                        <?php } ?>
                    </tbody>
                  </table>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php include'../layouts/footer.php' ?>