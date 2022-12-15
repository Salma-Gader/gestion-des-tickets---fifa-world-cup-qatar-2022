<?php
class IsAdmin
{
    public function __construct()
    {
        if ($_SESSION['isadmin'] == 0) {
            if (strpos($_SERVER['PHP_SELF'], 'admin') !== false) {
                // if the url has admin in it redirect to index.php
                // redirect to index.php in the root folder
                header('location: ../../index.php');
            }
        }
    }
}