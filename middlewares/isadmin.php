<?php
class IsAdmin
{
    public function __construct()
    {
     // if the url has admin in it redirect to landing page
        if ($_SESSION['isadmin'] == 0) {
            //finds the position of the first occurrence of a string inside another string like strstr
            if (strpos($_SERVER['PHP_SELF'], 'admin') !== false) {
                header('location: ../../index.php');
            }
        }
    }
}