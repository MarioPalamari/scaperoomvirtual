<?php
session_start();
if(isset($_GET['error']) && $_GET['error'] == 1 ){
$mensaje = "Error, codigo incorrecto";
$pista = "¿Cómo puedes haber olvidado el codigo? Recuerda que es el primer número primo después de 1000, date prisa, no tenemos tiempo.";
} elseif(isset($_GET['error']) && $_GET['error'] == 2 ){
$mensaje = "Que intentas";
$pista = "Como puedes haber olvidado el codigo? Recuerda que és el primer número primo después de 1000, date prisa, no tenemos tiempo";
echo'<script type="text/javascript">
alert("No puedes continuari así, tienes que ser legal mmgb");
window.location.href="index.php";
</script>';
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
height: 40vh;
display: flex;
background-color: lightgray;
border-radius: 10px;
}
#Transmisor {
position: absolute;
top: 25px;
left: 10px;
width: 200px;
height: auto;
}
#texto {
position: absolute;
top: 10px;
left: 230px;
max-width: 1000px;
}
h1, h2 {
font-size: 28px;
margin-top: 0;
}
</style>
</head>
</br>
<body style="background-image:url('img/nave.jpg');background-size:cover;">
<div class="container">
<img src="img/transmisor.webp" alt="Transmisor" id="Transmisor">
<div id="texto">
<h2 style="font-size:2rem;margin-top:20px;">Protocolo rojo desde la base R34, el motor principal de la nave espacial ha quedado inutilizado.</h1>
<h2 style="font-size:2rem;">Parece ser que se ha sufrido un ataque cibernético, ¡nos están hackeando! Intenta llegar lo antes posible al centro de mandos.</h1>
<h2 style="font-size:1.5rem;">Deprisa, introduce tu contraseña personal para el piloto automático, no tenemos tiempo, tienes que correr hacia la puerta.</h2>
</div>
</div>
</br>
<form action="recibir.php" method="post" id="formulario" style="max-width:400px;margin:auto;padding:20px;background-color:#444;border-radius:5px;">
<label for="codigo1" style="color:#fff;display:block;margin-bottom:10px;">Activar piloto automático</label>
<input type="text" name="codigo1" id="codigo1" placeholder="Código" style="display:block;width:100%;padding:10px;margin-bottom:20px;font-size:18px;border:2px solid #fff;border-radius:5px;background-color:#333;color:#fff;">
<p class="text-danger" style="color:#ff0000;"><?php echo $mensaje ?></p>
<p class="text-info" style="color:#007bff;"><?php echo $pista ?></p>
</br>
<button type="submit" style="display:block;width:100%;padding:10px;font-size:18px;border:none;border-radius:5px;background-color:#007bff;color:#fff;cursor:pointer;">Enviar</button>
</form>
</body>
</html>