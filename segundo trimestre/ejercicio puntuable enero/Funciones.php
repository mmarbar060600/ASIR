<?php
//recoger datos del otro php
include 'datosvuelos.php';
//creacion de funciones

//funcion media de pasajeros
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
//Funcion ultimos destinos
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
// funcion fabricante
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
//funcion minutos totales de vuelo
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
//FUNCIONES EJC 2
 
//funcion media de horas voladas de todos los vuelos
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
//funcion de numero total de pasajeros de todos los vuelos
function totalpasa($vuelopasa){
$pasajerostotal=0;
    foreach($vuelopasa as $keypasa){
        $pasa=$keypasa['Pasajeros'];
        $pasajerostotal=$pasa+$pasajerostotal;
    }
    echo "el total de pasajeros de todos los vuelos es: ".$pasajerostotal;
}
//Funcion de numero de aviones por fabricante
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
//Funcion de destinos con mas conexiones y menos
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

//FUNCIONES EJERCICIO 3
//Funcion Cual es la ciudad mas visitada y la menos visitada
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
////FUNCION de numero total de ciudades visitadas
function totalciudades($vuelodesti){
//Uso el array unique y columm para borrar los datos duplicados del array
$vuelodestiunique=array_unique(array_column($vuelodesti,'Destino'));
$vuelofinish=array_intersect_key($vuelodesti,$vuelodestiunique);
echo "Ciudades visitadas: ".count($vuelofinish);
}
//Funcion de veces que se ha ido a una ciudad
function ciudadvisita($vuelodesti){
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
        elseif ($destino == 'Bilbao'){
            $Bilbao++;
        }

    }
    echo "Las veces que se ha ido a Roma es/son: ".$Roma."<br>";
    echo "Las veces que se ha ido a Milan es/son: ".$Milan."<br>";
    echo "Las veces que se ha ido a Estambul es/son: ".$Estambul."<br>";
    echo "Las veces que se ha ido a Madrid es/son: ".$Madrid."<br>";
    echo "Las veces que se ha ido a Lima es/son: ".$Lima."<br>";
    echo "Las veces que se ha ido a Bilbao es/son: ".$Bilbao."<br>";
}
//Funcion de ciudad mas visitada y menos visitada
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

//FUNCIONES EJERCICIO 4

//Funcion destinos del avion
function avionvisita($vuelodesti,$operando4){
    foreach($vuelodesti as $key => $valor){
        $vuelos=$valor['vuelo'];
        $destino=$valor['Destino'];
        if ($vuelos == $operando4){
        echo "los  destinos del vuelo : ".$vuelos." Es: ". $destino."<br>";
        }
        }
    }
//Funcion fabricante del avion
function vuefabri($avifabri,$operando4){
    foreach($avifabri as $key => $valor){
        $vuelos=$valor['vuelo'];
        $fabricante=$valor['Fabricante'];
        if ($vuelos == $operando4){
            echo "El fabricante del vuelo: ".$vuelos." es: ".$fabricante;
        }
    }
}
//Funcion minutos totales de vuelo
function minutostotales($vuedura,$operando4){
    $total=0;
    foreach($vuedura as $valor){
        $vuelos=$valor['vuelo'];
        $tiempo=$valor['Duración-viaje'];
        if ($vuelos == $operando4) {
            $total=$tiempo+$total;
        }
    }
    echo "Tiempo total del vuelo: ".$operando4." es: ".$total;
}
//Funcion media de horas voladas
function mediahoras($vuedura,$operando4)
{
$contador=0;
$contadormedia=0;
foreach($vuedura as $key => $valor){
    $vuelos=$valor['vuelo'];
    $tiempo=$valor['Duración-viaje']/60;
    if ($vuelos == $operando4) {
        $contador=$tiempo+$contador;
        $contadormedia++;
        
    }
}
$media=$contador/$contadormedia;
echo "La media de horas del vuelo: ".$operando4." es: ".$media;
};
//Funcion media de pasajeros
function mediapasajeros($vuelopasa,$operando4){
    $contador=0;
$contadormedia=0;
foreach($vuelopasa as $key => $valor){
    $vuelos=$valor['vuelo'];
    $pasajeros=$valor['Pasajeros'];
    if ($vuelos == $operando4) {
        $contador=$pasajeros+$contador;
        $contadormedia++;
    }
}
$media=$contador/$contadormedia;
echo "La media del vuelo: ".$operando4." es: ".$media;
}
//Funcion pasajeros totales del vuelo
function pasajerostotales($vuelopasa,$operando4){
    $pasajerostotal=0;
    foreach($vuelopasa as $vuepasa){
        $pasa=$vuepasa['Pasajeros'];
        $vuelos=$vuepasa['vuelo'];
        if ($vuelos == $operando4) {
            $pasajerostotal=$pasa+$pasajerostotal;
        }
    }
    echo "el total de pasajeros del vuelo: ".$operando4." es: ".$pasajerostotal;
}
?>