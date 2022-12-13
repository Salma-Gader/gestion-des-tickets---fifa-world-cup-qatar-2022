<?php
require '../../controllers/Matches.php';
include'../layouts/header.php';
$page = $pages['matches'];
$matches = new Matche();
$result = $matches->edit();
$teams = $matches->getTeams();
$stadiums = $matches->getStadiums();
if(isset($_POST['update'])) { $matches->update();$result = $matches->edit();}
?>

  <div class="container">
    <form action="edit-matches.php?id=<?= $_GET['id']; ?>" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Update</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="first_team" class="form-label">First Team</label>
            <select name="first_team" id="first_team" class="form-control">
              <?php foreach ($teams as $team) { ?>
                <option value="<?= $team['id'] ?>"<?php if($team['id'] == $result['first_team_id']){ echo "selected"; } ?>><?= $team['name'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="second_team" class="form-label">Second Team</label>
            <select name="second_team" id="second_team" class="form-control">
              <?php foreach ($teams as $team) { ?>
                <option value="<?= $team['id'] ?>"<?php if($team['id'] == $result['second_team_id']){ echo "selected"; } ?>><?= $team['name'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" name="date" value="<?= $result['date'] ?>" class="form-control" id="date">
          </div>
          <div class="mb-3">
            <label for="stadium" class="form-label">Stadium</label>
            <select name="stadium" id="stadium" class="form-control">
              <?php foreach ($stadiums as $stadium) { ?>
                <option value="<?= $stadium['id'] ?>"<?php if($stadium['id'] == $result['stadium_id']){ echo "selected"; } ?>><?= $stadium['name'] ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <a href="../pages/matches.php" class="btn btn-secondary mx-2">Close</a>
          <button type="submit" name="update" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </form>
  </div>
<?php include'../layouts/footer.php' ?>