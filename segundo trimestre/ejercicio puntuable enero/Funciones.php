<?php
//recoger datos del otro php
include 'datosvuelos.php';
//creacion de funciones
function mediapasa($vuelopasa,$operando1)
{
$contador=0;
$contadormedia=0;
foreach($vuelopasa as $key => $valor){
    $vuelos=$valor['vuelo'];
    $pasajeros=$valor['Pasajeros'];
    if ($vuelos == $operando1) {
        $contador=$pasajeros+$contador;
        $contadormedia++;
    }
}
$media=$contador/$contadormedia;
echo "La media es: ".$media;
};
function vuelosdestis($vuelodesti,$operando1)
{
foreach($vuelodesti as $key => $valor){
    $vuelos=$valor['vuelo'];
    $destino=$valor['Destino'];
    if ($vuelos == $operando1){
    echo "Ultimos destinos: ". $destino."<br>";
    }
    }
}
function fabricante($avifabri,$operando1)
{
    foreach($avifabri as $key => $valor){
        $vuelos=$valor['vuelo'];
        $fabricante=$valor['Fabricante'];
        if ($vuelos == $operando1){
        echo "Fabricante del vuelo: ". $fabricante."<br>";
        }
        }
}
function sumatotal($vuedura,$operando1)
{
$contador=0;
    foreach($vuedura as $key => $valor){
        $vuelos=$valor['vuelo'];
        $duracion=$valor['Duración-viaje'];
        if ($vuelos == $operando1){
            $contador=$duracion+$contador;
        
        }
        }
        echo "Minutos totales del vuelo: ". $contador."<br>";
}
?>