
<?php
 $example = file_get_contents('example.txt');
 //inserta un salto de linea en cada linea
echo nl2br($example);

$example = file("example.txt");
echo $example[0];
/*echo "example ".$example;
foreach($example as $value){
    echo $value;
}*/

echo readfile("webdictionary.txt");

?>

