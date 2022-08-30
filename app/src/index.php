<?php

//this is a comment 6

session_start();

if (isset($_SESSION['username'])){

    header('Location: ./controller/home.php');
} else {

    header('Location: ./controller/login.php');
}



?>