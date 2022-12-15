<?php
class IslogedIn
{
    public function __construct()
    {
            if (isset($_SESSION['logged'])) {
                //if the user is admin redirect to admin.php
                if ($_SESSION['isadmin'] == 1){
                    header('location: ./admin/pages/dashboard.php');
                }
            }
    }
}