<?php
//dato escrito 1
$operando1 = $_POST["operando1"];
//entrada
    $entrada=$_POST["mvuelo"];
    include ("Funciones.php");
switch ($entrada) {
    case 'm1':
        mediapasa($vuelopasa,$operando1);
        break;
        case 'm2':
            vuelosdestis($vuelodesti,$operando1);
            break;
    default:
        echo "Prueba ejc1";
        break;
}
?>