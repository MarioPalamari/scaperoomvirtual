<?php
session_start();
if(!isset($_SESSION['loginOK'])){
    header("location: index.php");
}

$codigo1 = strtolower($_POST['codigo1']);

if ($codigo1 == "1009") {
	$_SESSION['loginOK'] = true;
	header("Location: puerta1.php");
	exit();
} else {
	header("Location: index.php?error=1");
	exit();
}
?>