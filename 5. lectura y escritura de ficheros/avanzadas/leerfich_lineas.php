<!DOCTYPE html>
<html>
<body>

<?php
$file = fopen("example.txt","r");
$i=0;
while(! feof($file))
  {
    $i++;
    echo "Linea ".$i."<br>";
    echo fgets($file). "<br />";
  }

fclose($file);
?>

</body>
</html>