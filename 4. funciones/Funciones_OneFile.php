<HTML LANG="es">

<HEAD>
   <TITLE>Manejo de cadenas</TITLE>

</HEAD>

<BODY>

<H1>Manejo de cadenas</H1>

<H2>Ejemplo de tratamiento de cadenas</H2>
<?PHP
   $fichero = "curriculum.pdf";

// -----------------------------------------------------------------
// Funci�n que obtiene la extensi�n de un fichero
// -----------------------------------------------------------------
function calcula_extension ($nombreFichero)
{
   $extension = stristr ($nombreFichero, '.');
   $extension = ltrim ($extension, '.');
   $extension = strtoupper ($extension);
   return ($extension);
}

// -----------------------------------------------------------------
// Funci�n que obtiene el tipo de un fichero a partir de su extensi�n
// -----------------------------------------------------------------
function tipo_fichero ($extension)
{
   if ($extension == 'PDF')
      $tipo = 'Documento Adobe PDF';
   else if ($extension == 'TXT')
      $tipo = 'Documento de texto';
   else if ($extension == 'HTML' || $extension == 'HTM')
      $tipo = 'Documento HTML';
   else if ($extension == 'PPT')
      $tipo = 'Presentaci�n Microsoft Powerpoint';
   else if ($extension == 'DOC')
      $tipo = 'Documento Microsoft Word';
   else if ($extension == 'GIF')
      $tipo = 'Imagen GIF';
   else if ($extension == 'JPG')
      $tipo = 'Imagen JPG';
   else if ($extension == 'ZIP')
      $tipo = 'Archivo comprimido ZIP';
   else
      $tipo = "Archivo " . $extension;
   return ($tipo);
}

//Calculamos extension y tipo de fichero
   $extension = calcula_extension ($fichero);
   $tipo = tipo_fichero ($extension);
   print ("El fichero '$fichero' es de tipo '$tipo'.\n");
?>

</BODY>
</HTML>
