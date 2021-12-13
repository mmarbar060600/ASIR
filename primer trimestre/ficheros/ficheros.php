<?php
echo readfile("pruebafichero.txt");
echo "<br>";
echo filesize("pruebafichero.txt");
echo "<br>";
echo "<br>";

//Apertura y lectura de un fichero

$fichero= fopen("pruebafichero.txt","r") or die("Er migue de aeronautica");
$pesofichero= filesize("pruebafichero.txt");
 echo fread($fichero,$pesofichero);
fclose($fichero);
?>

