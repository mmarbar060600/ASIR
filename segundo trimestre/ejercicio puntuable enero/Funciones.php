<?php
//recoger datos del otro php
include 'datosvuelos.php';
    //mostrar
    //     $m1= $entrada["m1"];
    //     $m2= $entrada["m2"];
    //     $m3= $entrada["m3"];
    //     $m4= $entrada["m4"];
    // //estadisticas aero
    //     $e1= $entrada["e1"];
    //     $e2= $entrada["e2"];
    //     $e3= $entrada["e3"];
    //     $e4= $entrada["e4"];
    //     $e5= $entrada["e5"];
    // //estadisticas ciudades
    //     $c1= $entrada["c1"];
    //     $c2= $entrada["c2"];
    //     $c3= $entrada["c3"];
    //     $c4= $entrada["c4"];
    // //estadisticas avion
    //     $es1= $entrada["es1"];
    //     $es2= $entrada["es2"];
    //     $es3= $entrada["es3"];
    //     $es4= $entrada["es4"];
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
};
?>