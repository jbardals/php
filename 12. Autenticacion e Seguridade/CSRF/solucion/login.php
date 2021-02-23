<?php
session_start();
?>
<html>
 <body>
<?php
if (isset($_SESSION["usuario"])) {
    // Generando ID único, podríamos usar la id de sesión  
    $_SESSION["token"] = md5(uniqid(mt_rand(), true));
 
    echo "<p>¡Bienvenido, " . $_SESSION["usuario"] . "!<br>";
    echo '<a href="procesar.php?accion=logout&token=' . $_SESSION["token"] . '">Salir</a></p>';
}
else {
?>
  <form action="procesar.php?accion=login" method="post">
   <p>El usuario es: admin</p>
   <input type="text" name="usuario" size="20">
   <p>Contraseña: prueba</p>
   <input type="password" name="pass" size="20">
   <input type="submit" value="Entrar">
   <input type="hidden" value="<?php echo $_SESSION['token']; ?>">
  </form>
<?php
}
?>
 </body>
</html>