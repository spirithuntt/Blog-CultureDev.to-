<?php
include('./controllers/Userimp.php');
$user = new Userimp();
$user->logout();

header('location: ./login.php');