<?php
include('scripts.php');
include('models/db.php');
include('./test.php');
$save = new crud();
if(isset($POST['submit'])) save();
function save(){
    $user =$POST['user'];
    $match =$POST['match'];
    $stadium =$POST['stadium'];
    $quantiter =$POST['quantiter'];
    $date =$POST['date'];
    $data =[$user,$match,$stadium,$quantiter,$date];
    $save->action("INSERT INTO `reservation`(`id`, `user_id`, `match_id`, `stadiums_id`, `quantity`, `date`) VALUES ('?','?','?','?','?','?')",$data);
}
