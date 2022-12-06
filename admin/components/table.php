
            
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6><?= $page['title'] ?></h6>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <?php foreach ($page['table']['columns'] as $column) { ?>
                          <th class="<?php if($column != "NAME" && $column != "ACTION"){echo "text-center ";} ?>text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?= $column ?></th>
                        <?php } ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if($_GET['type'] == "teams"){ 
                        foreach ($page['table']['row'] as $row) { ?>
                          <tr>
                            <td>
                              <p class="text-center text-xs text-secondary mb-0">#<?= $row['id']?></p>
                            </td>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <img src="../assets/img/all/<?= $row['image']?>" class="avatar avatar-sm me-3" alt="user1">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm"><?= $row['name']?></h6>
                                  <p class="text-xs text-secondary mb-0"><?= $row['aka']?></p>
                                </div>
                              </div>
                            </td>
                          
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold"><?= $row['country']?></span>
                            </td>
                            <td class="align-middle">
                              <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                              </a>
                            </td>
                          </tr>
                      <?php }
                        }elseif($_GET['type'] == "stadiums"){ ?>
                        <?php foreach ($page['table']['row'] as $row) { ?>
                          <tr>
                            <td>
                              <p class="text-center text-xs text-secondary mb-0">#<?= $row['id'] ?></p>
                            </td>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <img src="../assets/img/all/<?= $row['image'] ?>" class="avatar avatar-xxl me-3" alt="user1">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm"><?= $row['name'] ?></h6>
                                  <p class="text-xs text-secondary mb-0"><?= $row['description'] ?></p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs text-secondary mb-0"><?= $row['location'] ?></p>
                            </td>
                          
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold"><?= $row['capacity'] ?></span>
                            </td>
                            <td class="align-middle">
                              <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                              </a>
                            </td>
                          </tr>
                        <?php } ?>
                      <?php }elseif($_GET['type'] == "matches"){ ?>
                        <?php foreach ($page['table']['row'] as $row) { ?>
                          <tr>
                            <td>
                              <p class="text-center text-xs text-secondary mb-0">#<?= $row['id'] ?></p>
                            </td>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <img src="../assets/img/all/<?= $row['first_team']['image'] ?>" class="avatar avatar-sm me-3" alt="user1">
                                  <img src="../assets/img/all/<?= $row['secound_team']['image'] ?>" class="avatar avatar-sm me-3" alt="user1">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm"><?= $row['first_team']['name'] ?> / </h6>
                                  <h6 class="mb-0 text-sm"><?= $row['secound_team']['name'] ?></h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs text-secondary mb-0"><?= $row['date'] ?></p>
                            </td>
                            <td>
                              <p class="text-xs text-secondary mb-0"><?= $row['stadium']['name'] ?></p>
                            </td>
                            <td class="align-middle">
                              <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                              </a>
                            </td>
                          </tr>
                        <?php } ?>
                      <?php }elseif($_GET['type'] == "reservation"){ ?>
                        <?php foreach ($page['table']['row'] as $row) { ?>
                          <tr>
                            <td>
                              <p class="text-center text-xs text-secondary mb-0">#<?= $row['id'] ?></p>
                            </td>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm"><?= $row['user']['first_name']." ".$row['user']['last_name'] ?></h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h6 class="mb-0 text-sm"><?= $row['matche']['first_team']['name']?> - </h6>
                              <h6 class="mb-0 text-sm"><?= $row['matche']['secound_team']['name'] ?></h6>
                              <p class="text-xs text-secondary mb-0"><?= $row['date']." in ".$row['matche']['stadium']['name']?></p>
                            </td>
                            <td>
                              <p class="text-xs text-secondary mb-0"><?= $row['quantity'] ?></p>
                            </td>
                            <td class="align-middle">
                              <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                              </a>
                            </td>
                          </tr>
                        <?php } } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>