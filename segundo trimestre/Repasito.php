<?php

#constantes(Algo que no cambio o varia en el tiempo)
$pi=pi();
echo "numero pi: ". $pi."<br>";
define('GRAVEDAD',9.8);
echo "Constante de la gravedad: ".GRAVEDAD;
echo "<br>";
$numeros= array(2,4,8,7,4,10,GRAVEDAD);
print_r($numeros);
//contar
$cantidad_numeros=count($numeros);
//desordenar
$desordena=shuffle($numeros);
//mostrar por pantalla
echo "<br>";
print_r("Cuenta numeros: ".$cantidad_numeros);
echo "<br>";
print_r($numeros);
echo "<br>";
print_r("desordena ".$desordena);
echo "<br>";
//bucle recorrer
for ($i=0; $i < $cantidad_numeros ; $i++) { 
    echo "Valor de la posicion ".$i.": ".$numeros[$i]."<br>";
}
//ejemplo for each
echo "<br> For each <br>";
foreach ($numeros as $numerito) {
    echo $numerito."<br>";
}
/*
$manule="cafelaso de arvellana";

$migue=0;

$pako=true;

$dato1=$_POST["datito1"];
$dato2=$_GET["datito2"];
#condicionales
if (condition) {
    # code...
}
switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}
#BUCLES
while ($a <= 10) {
    # code...
}
for ($i=0; $i < ; $i++) { 
    # code...
}

*/
?>