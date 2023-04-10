<?php session_start(); 
if(isset($_GET['error']) && $_GET['error'] == 2 ){
$mensaje = "ERROR, RESPUESTA INCORRECTA";
} else {
$mensaje = "";
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

</style>
</head>
<body>
<body style="background-image:url('img/bright-orange-futuristic-tech-background-vector.webp');background-size:cover;">
<div class="container">
<img src="img/transmisor.webp" alt="Transmisor" id="Transmisor">
<div id="texto">
<h4 style="font-size:28px;margin-top:20px;">Perfecto, parece ser que has acertado, sigue contestando</h4>

<br>
<form action="recibir4.php" method="post" id="formulario" style="text-align: center;">
  <fieldset style="background-color: orange; width: 75%; text-align: center; margin-left: 60%;">
    <legend>¿De que color son las cacatuas?</legend>
    <p>
    <input type="radio" name="respuesta" value="Blanco">
      <label for="respuesta">Blanco</label>
    </p>
    <p>
    <input type="radio" name="respuesta" value="Negro">
      <label for="respuesta">Negro</label>
    </p>
    <p>
    <input type="radio" name="respuesta" value="Amarillo">
      <label for="respuesta">Amarillo</label>
    </p>
    <p>
    <button type="submit">Contestar</button>
    </p>
  </fieldset>
</form>
    
<br>
<div style="text-align: center; margin-left: 50%; width: 100%; background-color: red;">
    <?php echo $mensaje ?>
</div>
</body>
</html>
