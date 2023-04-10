<?php
session_start();

if(!isset($_SESSION['loginOK'])){
    header("location: index.php");
}

$codigo2 = strtolower($_REQUEST['codigo2']);

if($codigo2 == "2821") {
    $_SESSION['loginOK'] = $codigo2;
    header("location: home2.php");
} else{
    header("location: home.php?error=2");
}

?>
