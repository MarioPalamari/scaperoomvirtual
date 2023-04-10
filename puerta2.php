<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página privada</title>


</head>
<body>
    <br>
    <form action="recibir3.php" method="post" id="formulario">
        <label for="2">Código secreto</label>
        <input type="text" name="codigo3" id="codigo3" placeholder="Escribe aquí el código">
            <button type="button">Jugar</button>
    </form>
</body>
</html>