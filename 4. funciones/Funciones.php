<HTML LANG="es">

<HEAD>
   <TITLE>Manejo de cadenas</TITLE>

<?PHP
   require ("Funciones_Def.php");
?>

</HEAD>

<BODY>

<H1>Manejo de cadenas</H1>

<H2>Ejemplo de tratamiento de cadenas</H2>
<?PHP
   $fichero = "curriculum.pdf";
   $extension = calcula_extension ($fichero);
   $tipo = tipo_fichero ($extension);
   print ("El fichero '$fichero' es de tipo '$tipo'.\n");
   //print ("<H1>Practica 2</H1>\n");
?>

</BODY>
</HTML>
