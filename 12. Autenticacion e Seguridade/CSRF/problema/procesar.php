<?php
session_start();
 
switch($_GET["accion"]) {
    case "login":
        // Si viene por POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = (isset($_POST["usuario"]) &&
                $_POST["usuario"]) ? $_POST["usuario"] : null;
            $pass = (isset($_POST["pass"])) ? $_POST["pass"] : null;
        $salt = '#l0S.p4Nd4s.Pr0T3g3N.3sT4.cL4v3#';           
 
            if (isset($usuario, $pass) && (crypt($usuario . $pass, $salt) ==
                crypt("adminprueba", $salt))) {
                $_SESSION["usuario"] = $_POST["usuario"];
            }
        }
        break;
     
    case "logout":
        $_SESSION = array();
        session_destroy();
        break;
}
 
header("Location: login.php");
?>