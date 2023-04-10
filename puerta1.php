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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<title>Formulario</title>
<style type="text/css">
.container {
position: relative;
height: 18vh;
display: flex;
background-color: lightgray;
border-radius: 10px;
}
#Transmisor {
position: absolute;
top: 15px;
left: 5px;
width: 100px;
height: auto;
}
#texto {
position: absolute;
top: 30px;
left: 100px;
max-width: 1200px;
}
h1, h2, h3, h4 {
font-size: 15px;
margin-top: 0;
}
#boton {
    margin-left: 569px;
    margin-top: 258px;
}
</style>
</head>
</br>
<body style="background-image:url('img/puelta1.avif');background-size:cover;">
<div class="container">
<img src="img/transmisor.webp" alt="Transmisor" id="Transmisor">
<div id="texto">
<h4 style="font-size:28px;margin-top:20px;">Muy bien, ahora que está puesto el piloto automático, tienes que correr a la puerta de acceso.</h4>
</div>
</div>
<div id="boton">
<form action="home.php" method="post" id="formulario">
<button type="submit" style="text-align:center;display:block;width:9%;padding:18px;font-size:16px;border:none;border-radius:5px;background-color:#007bff;color:#fff;cursor:pointer;">Correr</button>
</div>
</form>
</body>
</html>
