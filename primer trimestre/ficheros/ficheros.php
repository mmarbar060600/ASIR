<?php
echo readfile("pruebafichero.txt");
echo "<br>";
echo filesize("pruebafichero.txt");
echo "<br>";
echo "<br>";

//Apertura y lectura de un fichero

$fichero= fopen("pruebafichero.txt","r") or die("Er migue de aeronautica");
//creo una variable con el peso
$pesofichero= filesize("pruebafichero.txt");
//leo el fichero junto con el peso 
echo fread($fichero,$pesofichero);
fclose($fichero);

?>

