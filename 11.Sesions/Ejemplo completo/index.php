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
<p>Bienvenido a tu sesión de usuario <?= $_SESSION["usuario"]; ?></p>
<p>Puedes pasarte por el sitio web <a href="otra_pagina.php">aqui</a></p>
<p>También puedes <a href="logout.php">salir</a></p>
</body>
</html>