<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location: no_permitido.php");
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>Hola de nuevo <?= $_SESSION["usuario"]; ?></p>
</body>
</html>