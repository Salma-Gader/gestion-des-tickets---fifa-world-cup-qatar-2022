<?php
class IslogedIn {
    public function __construct()
    {
        if($_SERVER['PHP_SELF'] != '/gestion-des-tickets-fifa-world-cup-qatar-2022/login.php' && $_SERVER['PHP_SELF'] != '/gestion-des-tickets-fifa-world-cup-qatar-2022/signup.php'){
            if(!isset($_SESSION['logged'])){
                header('location: ./login.php');
            }
        }
        else{
            if(isset($_SESSION['logged'])){
                // if page url is login.php redirect to index.php
                if($_SERVER['PHP_SELF'] == '/gestion-des-tickets-fifa-world-cup-qatar-2022/login.php' || $_SERVER['PHP_SELF'] == '/gestion-des-tickets-fifa-world-cup-qatar-2022/signup.php'){
                    header('location: ./index.php');
                }
            }
        }
    }
}