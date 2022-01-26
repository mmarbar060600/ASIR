<?php
//entrada
$operando2 = $_POST["operando2"];
$entrada=$_POST["mvuelo"];
include ("Funciones.php");
//swich ejc 03
switch ($entrada) {
    case 'c1':
        totalciudades($vuelodesti);
        break;
        case 'c2':
            ciudadvisita($vuelodesti,$operando2);
            break;
        case 'c3':
            visitamax($vuelodesti);
            break;
    default:
        echo "Opnción no valida";
        break;
}
?>