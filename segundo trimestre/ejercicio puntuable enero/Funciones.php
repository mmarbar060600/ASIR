<?php
//recoger datos del otro php
include 'datosvuelos.php';
//creacion de funciones
//m1
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
//m2
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
//m3
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
//m4
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
//e1
function mediavuelo($vuedura){
$e1=0;
$e2=0;
    foreach($vuedura as $dura){
        $tiempo=$dura['Duración-viaje']/60;
        $e1=$tiempo+$e1;
        $e2++;
    }
    $e2=$e1/$e2;
    echo "media horas de todos los vuelos: ".$e2."<br>";
}
//e2
function totalpasa($vuelopasa){
$pasajerostotal=0;
    foreach($vuelopasa as $keypasa){
        $pasa=$keypasa['Pasajeros'];
        $pasajerostotal=$pasa+$pasajerostotal;
    }
    echo "el total de pasajeros de todos los vuelos es: ".$pasajerostotal;
}
function fabriavi($avifabri){
$contadorfabri=0;
$contadorfabri2=0;
foreach($avifabri as $keyfabri){
    $fabricante=$keyfabri['Fabricante'];
    $vuelo=$keyfabri['vuelo'];
    if ($fabricante == 'Boeing') {
        $contadorfabri++;
    }
    else {
        $contadorfabri2++;
    }
}
echo "Boeing ha fabricado: ".$contadorfabri."<br>";
echo "Airbus ha fabricado: ".$contadorfabri2."<br>";
}
?>