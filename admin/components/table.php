
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <?php foreach ($pages['teams']['table']['columns'] as $column) { ?>
                    <th class="<?php if($column != "NAME" && $column != "ACTION"){echo "text-center ";} ?>text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?= $column ?></th>
                  <?php } ?>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($pages['teams']['table']['row'] as $row) { ?>
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
                <?php } ?>
              </tbody>
            </table>