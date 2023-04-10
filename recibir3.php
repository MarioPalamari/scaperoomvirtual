<?php
if(isset($_POST['respuesta']) && $_POST['respuesta'] == "Kevin Mitnick") {
    $_SESSION['loginOK'] = $_POST['respuesta'];
    header("location: p2.php");
} else {
    header("location: p1.php?error=2");
}

?>
