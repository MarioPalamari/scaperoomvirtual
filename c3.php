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
h4 {
font-size: 15px;
margin-top: 0;
}
</style>
</head>

<body>
    <div class="texto" style="width: 100%; height: 10%; text-align: center; background-color: aqua; margin-top: 15%;">
<h1>Tu código es: 2821</h1>
    </div>
<body style="background-image:url('img/60f2da3ca2ed4b3d77a4db55b131f40f.webp');background-size:cover;">
<form method = "LINK" ACTION = "home.php">
<button type="submit" style="text-align:center;display:block;width:9%;padding:18px;font-size:16px;border:none;border-radius:5px;background-color:#007bff;color:#fff;cursor:pointer; margin-left: 45%; margin-top: 10%;">Correr</button>

</body>
</html>