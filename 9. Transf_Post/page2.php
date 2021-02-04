<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"]; 
echo "Hola " . $nombre . " " . $apellido . ", <br /> 
Te has registrado con el siguiente correo electrónico: " . $email . ".";
?>