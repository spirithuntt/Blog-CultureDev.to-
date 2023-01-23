<?php
//  to check if user is admin
class IslogedIn {
    public function __construct()
    {
        if($_SERVER['PHP_SELF'] != '/CultureDev/login.php' && $_SERVER['PHP_SELF'] != '/CultureDev/signup.php'){
            if(!isset($_SESSION['logged'])){
                header('location: ./login.php');
            }
        }
        else{
            if(isset($_SESSION['logged'])){
                // if page url is login.php redirect to index.php
                if($_SERVER['PHP_SELF'] == '/CultureDev/login.php' || $_SERVER['PHP_SELF'] == '/CultureDev/signup.php'){
                    header('location: ./index.php');
                }
            }
        }
    }
}