<?php

#constantes(Algo que no cambio o varia en el tiempo)
echo "<br>";
echo "crear constantes";
echo "<br>";
$pi=pi();
echo "numero pi: ". $pi."<br>";
define('GRAVEDAD',9.8);
echo "Constante de la gravedad: ".GRAVEDAD;
echo "<br>";
$numeros= array(2,4,8,7,4,10,GRAVEDAD);
print_r($numeros);
//contar
echo "<br>";
echo "contar array";
echo "<br>";
$cantidad_numeros=count($numeros);
//desordenar
echo "<br>";
echo "desordenar, esta comentado";
echo "<br>";
/*$desordena=shuffle($numeros);*/
//mostrar por pantalla
echo "<br>";
print_r("Cuenta numeros: ".$cantidad_numeros);
echo "<br>";
print_r($numeros);
echo "<br>";
print_r("desordena ".$desordena);
echo "<br>";
//bucle recorrer
echo "<br>";
echo "bucle for";
echo "<br>";
for ($i=0; $i < $cantidad_numeros ; $i++) { 
    echo "Valor de la posicion ".$i.": ".$numeros[$i]."<br>";
}
//ejemplo for each
echo "<br>";
echo "ejemplo for each";
echo "<br>";
echo "<br> For each <br>";
foreach ($numeros as $numerito) {
    echo $numerito."<br>";
}
//array asociativo
echo "<br>";
echo "array asociativo";
echo "<br>";
$provincias=array(
"Andalucia"=>"Sevilla",
"Madrid"=>"Vallecas",
"Aragon"=>"Zaragoza",
"Pais Vasco"=>"Bilbao"
);
print_r($provincias);
echo "<br>";
//recorrer un for de manera mas sencilla
echo "<br>";
echo "recorrer un for de manera mas sencilla";
echo "<br>";
foreach ($provincias as $ciudad => $i) {
    echo "La comunidad autonoma: ".$ciudad ." Su capital: ". $i."<br>";
}
//añadir Valores al array(Se añade al final)
echo "<br>";
echo "añadir valores al array";
echo "<br>";
$numeros[]=3;
//modificar un valor del array
echo "<br>";
echo "Modificar valor del array";
echo "<br>";
$numeros[6]=3;
echo "<br>";
foreach ($numeros as $numerito) {
    echo $numerito."<br>";
}
//eliminar un valor de un array
echo "<br>";
echo "eliminar valor de un array";
echo "<br>";
echo "<br>";
unset($numeros[7]);
foreach ($numeros as $numerito) {
    echo $numerito."<br>";
}
//array multidimensional
echo "<br>";
echo "array multidimensional";
echo "<br>";
$asir= array(
    array("Nombre"=>"Naasho","Frase"=>"Gusano Morris"),
    array("Nombre"=>"Manule","Frase"=>"Ere tela de gracioso capi"),
    array("Nombre"=>"Kerry","Frase"=>"au au au"),
    array("Nombre"=>"Migue","Frase"=>"Ke ezoh, CHI CHI")
);
foreach ($asir as $alumno) {
    echo"Frase tipica de ".$alumno["Nombre"].": ". $alumno["Frase"]."<br>";
}
echo "<br>";
echo "funciones";
echo "<br>";
//funciones
$numero1=10;
$numero2=4;

function suma($numero1,$numero2){
    $suma=$numero1+$numero2;
    return $suma;
}
$sumado=suma($numero1,$numero2);
echo $sumado;
echo "<br>";
echo "Redondear";
echo "<br>";
echo "<br>";
echo "gravedad sin redondear";
echo "<br>";
echo GRAVEDAD;
echo "<br>";
echo "Redondeado";
echo "<br>";
$redon=round(GRAVEDAD);
echo $redon
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