<?php
$datosrecogidos=$_POST["texto1"];
$opcion=$_POST["opcion"];
/*
//ejemplo del ejercicio sin recoger los datos en el html
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
echo "<br>";
//escribir
$fichero= fopen("pruebafichero.txt","w") or die("Er migue de aeronautica");
$nuevotexto="que te gusta tu padre";
$nuevotexto2=$datosrecogidos;
fwrite($fichero,$nuevotexto);
fclose($fichero);
*/
switch ($opcion) {
    case '1':
        $fichero= fopen("pruebafichero.txt","w") or die("Er migue de aeronautica");
        fwrite($fichero,$datosrecogidos);
        fclose($fichero);
        echo "Fichero editado para leerlo volver atras";
        break;
    case '2':
        $fichero= fopen("pruebafichero.txt","r") or die("Er migue de aeronautica");
            //creo una variable con el peso
        $pesofichero= filesize("pruebafichero.txt");
                //leo el fichero junto con el peso 
            echo fread($fichero,$pesofichero);
        fclose($fichero);
            echo "<br>";
        break;
    
        default:
         echo "Opcion no valida";
            break;
}
?>

