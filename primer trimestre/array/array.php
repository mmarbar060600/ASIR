<?php

#ARRAY NORMALES
    $numeros = array(8, 3, 7, 1);

    $suspenso = array("Miguel","Kerry");

    $coches = array("Ferrari","Seat","BMW","Opel","Mercedes");

    echo $suspenso[0];
    echo $numeros[3];
    echo $coches[1];
$cuentacoches=count($coches);

echo "Numero de coches " .$cuentacoches;


$aleatorio=rand(0,$cuentacoches-1);

echo "coche aleatorio: ".$coches[$aleatorio]."<br>";
$parada=0;

while ($parada <= 5) {
    $aleatorio=rand(0,$cuentacoches-1);
    echo $coches[$aleatorio]. "<br>";
    $parada++;
}

$cochesordenados=sort($coches);

echo "este es el orden: ". $cochesordenados."<br>";

while ($parada < $cuentacoches-1) {
    echo $coches[$cochesordenados]. "<br>";
    $parada++;
}
#ARRAY ASOCIATIVOS

$alumnos = array("Nombre" => "Miguel",
                                    "apellidos" => "Kerry",
                                    "Edad" =>23,
                                    "estaaprobado"=>false);
echo "el alumno es". $alumnos["Edad"].$alumnos["apellidos"].$alumnos["Nombre"];

?>