<?php
//entrada
$operando2 = $_POST["operando4"];
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