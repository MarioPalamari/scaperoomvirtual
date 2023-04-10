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
    <title>Página privada</title>
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
top: 20px;
left: 100px;
max-width: 1200px;
}
h1, h2, h3, h4 {
font-size: 15px;
margin-top: 0;
}
/* #boton {
    margin-left: 860px;
    margin-top: 480px;
} */
#form {
    margin-top: 20px;
    margin-left:596px;
}
pista {
    font-size: large;
}
</style>
</head>
<body>
<body style="background-image:url('img/pueltaabrida.jpg');background-size:cover;">
<div class="container">
<img src="img/transmisor.webp" alt="Transmisor" id="Transmisor">
<div id="texto">
<h4 style="font-size:28px;margin-top:20px;">WoW, se ha abierto la puerta, rápido, llega al ordenador.</h4>
<?php
    $codigo2 = $_SESSION['loginOK'];
?>
<br>
    <br>
    <form method="LINK" ACTION="home3.php">
        <button type="submit" style="text-align:center;display:block;width:15%;padding:18px;font-size:16px;border:none;border-radius:5px;background-color:#007bff;color:#fff;cursor:pointer;margin-left:600px;margin-top:175px;">Ir al ordenador</button>
    </form>

</body>

</html>
<?php
?>