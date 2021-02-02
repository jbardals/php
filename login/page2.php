<?php
$username = $_POST["username"];
$password = $_POST["password"];
$password2 = $_POST["password2"];

if($username=="pepe")
   {
       if($password==$password2 && $password=="abc123.")
       {
        echo "Bienvenido al área interna " . $username . "!";
       }
       else{
            echo "contraseña incorrecta";
       }
   }
else
   {
   echo "usuario incorrecto";
   }
?>
