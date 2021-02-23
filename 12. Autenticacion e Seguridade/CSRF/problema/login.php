<?php
session_start();
?>
<html>
 <body>
<?php
if (isset($_SESSION["usuario"])) {
    echo "<p>¡Bienvenido, " . $_SESSION["usuario"] . "!<br>";
    echo '<a href="procesar.php?accion=logout">Salir</a></p>';
}
else {
?>
  <form action="procesar.php?accion=login" method="post">
   <p>El usuario es: admin</p>
   <input type="text" name="usuario" size="20">
   <p>Contraseña: prueba</p>
   <input type="password" name="pass" size="20">
   <input type="submit" value="Entrar">
  </form>
<?php
}
?>
 </body>
</html>