<?php
session_start();
if(!isset($_SESSION['loginOK'])){
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<body style="background-image:url('img/espacio.webp');background-size:cover;">
<h1 style="text-align: center; color: aliceblue; margin-top: 200px;">FELICIDADES, HAS COMPLETADO EL SCAPEROOM</h1>
<form method="LINK" ACTION="index.php">
        <button type="submit" style="text-align:center;display:block;width:15%;padding:18px;font-size:16px;border:none;border-radius:5px;background-color:#007bff;color:#fff;cursor:pointer;margin-left:50%;margin-top:375px;">REINICIAR</button>
    </form>
</body>
</html>


<?php session_destroy(); ?>