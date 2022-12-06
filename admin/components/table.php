
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
                            <img src="../assets/img/teams/<?= $row['image']?>" class="avatar avatar-sm me-3" alt="user1">
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
                <?php } ?>
              </tbody>
            </table>