<?php 
require_once('init.php');

if(!isset($_SESSION['loggedIn'])){
    header('Location: ../.MyLogin.php');
}



?>