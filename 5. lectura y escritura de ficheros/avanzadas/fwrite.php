<?php
$myfile = fopen("newfile.txt", "w+") or die("Unable to open file!");
echo "Escribo liña1<br>";
$txt = "John Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("newfile.txt", "r+") or die("Unable to open file!");
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
  }
fclose($myfile);

$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
echo "Escribo liña2<br>";
fwrite($myfile, "Jane Doe\n");
fclose($myfile);

$myfile = fopen("newfile.txt", "r+") or die("Unable to open file!");
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
  }
fclose($myfile);

echo "Leo o ficheiro enteiro con readfile<br>";
echo readfile("newfile.txt");

echo "<br>leo con fread<br>";
$myfile = fopen("newfile.txt", "r+") or die("Unable to open file!");
echo fread($myfile,filesize("newfile.txt"));
fclose($myfile);

echo "<br>leo 20 bytes<br>";
$myfile = fopen("newfile.txt", "r+") or die("Unable to open file!");
echo fread($myfile,10);
fclose($myfile);
?>