<?php
//entrada
$entrada=$_POST["mvuelo"];
include ("Funciones.php");
//swich ejc 03
switch ($entrada) {
    case 'c1':
        totalciudades($vuelodesti);
        break;
        case 'c2':
            ciudadvisita($vuelodesti);
            break;
        case 'c3':
            visitamax($vuelodesti);
            break;
    default:
        echo "Opnción no valida";
        break;
}
?>