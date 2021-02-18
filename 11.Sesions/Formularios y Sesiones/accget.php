<?php

/* Como hemos utilizado el método GET en el formulario, recogemos los
 * valores en un array. Cada elemento tiene el mismo nombre que la 
 * variable del formulario.
 * 
 * Y los pasamos al elemento de $_SESSION que se crea en ese instante.
 * 
 * */
 
 // Iniciamos la sesión
 session_start();
 
 // Pasamos los valores del formulario a la sesión
 if (!empty($_GET['nombre'])){
	 $_SESSION['nombre'] = $_GET['nombre'];
 }
 else {
	 $_SESSION['nombre'] = "Usuario anónimo";
 }
 
 // Usamos el operador ternario para hacer lo mismo con el correo pero 
 // de otro modo.
 $_SESSION['correo'] = (!empty($_GET['correo'])) ? $_GET['correo'] : 
 "No tiene";
 
 // El elemento radio siempre devolverá un valor, así que lo asignamos 
 // directamente.
 $_SESSION['gustos'] = $_GET['gustos'];
  
 // Con esos datos damos la bienvenida al visitante
 echo "Hola <b>".$_SESSION['nombre']."</b>. le damos la Bienvenida.<br />"; 
 echo "Sabemos que prefiere <b>".$_SESSION['gustos']."</b>.<br />";
 echo "Y que podemos contactar en la siguiente dirección <b>".
 $_SESSION['correo']."</b>.<br /><br />"; 
 echo "El identificador de sesión es: <b>".session_id()."</b>.";
?>

