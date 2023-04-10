<?php
session_start();
if(!isset($_SESSION['loginOK'])){
    header("location: index.php");
}
$mostrarBoton = false;
$div1 = true;
$texto = true;
if(!isset($_SESSION['loginOK'])) {
    $mensaje = " Error, código incorrecto";
    $pista = "<h3>Mierda, parece que ya han cambiado los codigos del sistema, espera, ¿que es ese botón?, ¿como que jugar?</h3>";
    $mostrarBoton = false;
    $div1 = false;
} elseif(isset($_GET['error']) && $_GET['error'] == 2 ){
    $mensaje = " Error, código incorrecto";
    $pista = "<h4>Maldita sea, parece que ya han cambiado los codigos del sistema, espera, ¿que es ese botón?, ¿como que jugar?</h4>";
    $mostrarBoton = true;
    $texto = false;
} else {
    $mensaje = "";
    $pista = "";
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
</br>
<body style="background-image:url('img/code.gif');background-size:cover;">
<div class="container">
<img src="img/transmisor.webp" alt="Transmisor" id="Transmisor">
<div id="texto">
<h4 style="font-size:28px;margin-top:20px;">Vamos vamos, introduce el codigo para abrir la puerta.</h4>
<h4><?php echo $pista ?></h4>
</div>
</div>
<?php if ($texto): ?>
    <?php endif; ?>
    <div id="form">
        <form method = "LINK" ACTION = "recibir2.php">
        <input type="text" name="codigo2" id="codigo2" placeholder="Escribe aquí el código" style="width: 43%;">
        
        <p class="text-danger" style="background-color: white;width:20%;margin-top:2px"><b><?php echo $mensaje ?></b></p>
        <div id="boton">
            <button type="submit" style="text-align:center;display:block;width:9%;padding:18px;font-size:16px;border:none;border-radius:5px;background-color:#007bff;color:#fff;cursor:pointer;margin-left: 263px;margin-top: 385px;">Validar</button>
</div>

    </form>        <?php if ($mostrarBoton): ?>
<div id="boton1">
    <form method="LINK" ACTION="p1.php">
        <button type="submit" style="text-align:center;display:block;width:10%;padding:18px;font-size:16px;border:none;border-radius:5px;background-color:#007bff;color:#fff;cursor:pointer;margin-left:389px;margin-top:0px;">Jugar</button>
    </form>
</div>
<?php else: ?>
<div id="boton" style="height: 60px;">
</div>
<?php endif; ?>
</div>
</body>
</html>
