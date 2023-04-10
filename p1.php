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
<h4 style="font-size:28px;margin-top:20px;">Que pasa ahora, no lo entiendo, ¿es como una prueba?</h4>

<br>
<form action="recibir3.php" method="post" id="formulario" style="text-align: center;">
  <fieldset style="background-color: orange; width: 75%; text-align: center; margin-left: 60%;">
    <legend>¿Cual fué considerado el primer hacker del mundo?</legend>
    <p>
    <input type="radio" name="respuesta" value="Adrian Lamo">
      <label for="respuesta">Adrian Lamo</label>
    </p>
    <p>
    <input type="radio" name="respuesta" value="Kevin Mitnick">
      <label for="respuesta">Kevin Mitnick</label>
    </p>
    <p>
    <input type="radio" name="respuesta" value="Elliott Gunton">
      <label for="respuesta">Elliott Gunton</label>
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
