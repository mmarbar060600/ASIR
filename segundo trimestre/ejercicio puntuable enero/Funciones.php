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
//e3
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
//e4
function destimax($vuelodesti){
$Milan=0;
$Roma=0;
$Estambul=0;
$Madrid=0;
$Lima=0;
$Bilbao=0;
foreach($vuelodesti as $destinos){
    $destino=$destinos['Destino'];
    if ($destino == 'Milán') {
        $Milan++;
    }
    elseif ($destino == 'Roma') {
        $Roma++;
    }
    elseif ($destino == 'Estambul') {
        $Estambul++;
    }
    elseif ($destino == 'Madrid') {
        $Madrid++;
    }
    elseif ($destino == 'Lima') {
        $Lima++;
    }
    else {
        $Bilbao++;
    }

}
//creo un array para dividir los datos
$destinomax= array(
    array("Destino" => "Milan","conexiones" => $Milan),
    array("Destino" => "Roma","conexiones" => $Roma),
    array("Destino" => "Estambul","conexiones" => $Estambul),
    array("Destino" => "Madrid","conexiones" => $Madrid),
    array("Destino" => "Lima","conexiones" => $Lima),
    array("Destino" => "Bilbao","conexiones" => $Bilbao)
);
//calcular el maximo
rsort($destinomax);
$ciudadmaximo=(array_column($destinomax,'Destino'));
$vuelosvisita=$ciudadmaximo[0];
echo "el destino con mas conexiones es: ".$vuelosvisita."<br>";
//calcular el minimo
asort($destinomax);
    $ciudadminimo=(array_column($destinomax,'Destino'));
    $vuelosvisita=$ciudadminimo[0];
    echo "el destino con menos conexiones es: ".$vuelosvisita;
}
//c1
function totalciudades($vuelodesti){
$vuelodestiunique=array_unique(array_column($vuelodesti,'Destino'));
$vuelofinish=array_intersect_key($vuelodesti,$vuelodestiunique);
echo "Ciudades visitadas: ".count($vuelofinish);
}
//c2
//para este lo que voy a hacer es pedirle un parametro por pantalla al usuario desde el html
function ciudadvisita($vuelodesti,$operando2){
    $ciudad=$operando2;
    $contador=0;
    foreach($vuelodesti as $destino){
        $destinos=$destino['Destino'];
        if ($destinos == $operando2) {
            $contador++;
        }
       
    }
    echo "La ciudad: ".$operando2." Ha sido visitada: ".$contador." veces";
}
//c3
function visitamax($vuelodesti){
    $Milan=0;
$Roma=0;
$Estambul=0;
$Madrid=0;
$Lima=0;
$Bilbao=0;
foreach($vuelodesti as $destinos){
    $destino=$destinos['Destino'];
    if ($destino == 'Milán') {
        $Milan++;
    }
    elseif ($destino == 'Roma') {
        $Roma++;
    }
    elseif ($destino == 'Estambul') {
        $Estambul++;
    }
    elseif ($destino == 'Madrid') {
        $Madrid++;
    }
    elseif ($destino == 'Lima') {
        $Lima++;
    }
    else {
        $Bilbao++;
    }

}
//creo un array para dividir los datos
$destinomax= array(
    array("Destino" => "Milan","conexiones" => $Milan),
    array("Destino" => "Roma","conexiones" => $Roma),
    array("Destino" => "Estambul","conexiones" => $Estambul),
    array("Destino" => "Madrid","conexiones" => $Madrid),
    array("Destino" => "Lima","conexiones" => $Lima),
    array("Destino" => "Bilbao","conexiones" => $Bilbao)
);
//calcular el maximo
rsort($destinomax);
$ciudadmaximo=(array_column($destinomax,'Destino'));
$vuelosvisita=$ciudadmaximo[0];
echo "el destino con mas visitas es: ".$vuelosvisita."<br>";
//calcular el minimo
asort($destinomax);
    $ciudadminimo=(array_column($destinomax,'Destino'));
    $vuelosvisita=$ciudadminimo[0];
    echo "el destino con menos visitas es: ".$vuelosvisita;
}
function pruebahtml($entrada2){
    if ($entrada2 == '1') {
        echo "aro";
    }
}
?>