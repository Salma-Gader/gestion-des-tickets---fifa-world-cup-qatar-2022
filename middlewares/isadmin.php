<?php
class IsAdmin
{
    public function __construct()
    {
     // if the url has admin in it redirect to index.php
        if ($_SESSION['isadmin'] == 0) {
            if (strpos($_SERVER['PHP_SELF'], 'admin') !== false) {
                header('location: ../../index.php');
            }
        }
    }
}