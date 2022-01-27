<?php
//entrada
$operando4 = $_POST["operando4"];
$entrada=$_POST["mvuelo"];
include ("Funciones.php");
    switch ($entrada) {
        case 'es1':
            avionvisita($vuelodesti,$operando4);
            break;
        
        default:
        echo "aro";
            break;
    }
?>