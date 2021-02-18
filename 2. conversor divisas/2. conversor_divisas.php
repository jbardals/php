<HTML LANG="es">

<HEAD>
   <TITLE>Tabla de conversion de euros a pesetas</TITLE>
</HEAD>

<BODY>

<H1>Conversion euros/pesetas</H1>

<?PHP

   define ("EUROPTS", "166.386");

   print ("<TABLE BORDER WIDTH='200'>\n");
   print ("<TR>\n");
   print ("   <TH>Euros</TH>\n");
   print ("   <TH>Pesetas</TH>\n");
   print ("</TR>\n");
   for ($i=2; $i<=10; $i=$i+2)
   {
      $pesetas[i]= $i*EUROPTS;
      print ("<TR ALIGN='CENTER'>\n");
      print ("   <TD>$i</TD>\n");
      print ("   <TD>" . $pesetas[i] . "</TD>\n");
      print ("</TR>\n");
   }
   print ("</TABLE>\n");
?>

</BODY>
</HTML>
