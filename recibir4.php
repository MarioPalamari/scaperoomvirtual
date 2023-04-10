<?php
if(isset($_POST['respuesta']) && $_POST['respuesta'] == "Blanco") {
    $_SESSION['loginOK'] = $_POST['respuesta'];
    header("location: c3.php");
} else {
    header("location: p2.php?error=2");
}

?>
