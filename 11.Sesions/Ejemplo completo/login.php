<?php
session_start();
$_SESSION["usuario"] = $_POST["usuario"];
$_SESSION["fecha"] = date()
 
header("location: index.php");