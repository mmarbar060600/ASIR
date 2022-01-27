<?php
//entrada
$operando4 = $_POST["operando4"];
$entrada=$_POST["mvuelo"];
include ("Funciones.php");
    switch ($entrada) {
        case 'es1':
            avionvisita($vuelodesti,$operando4);
            break;
        case 'es2':
            vuefabri($avifabri,$operando4);
            break;
        case 'es3':
            minutostotales($vuedura,$operando4);
            break;
        case 'es4':
            mediahoras($vuedura,$operando4);
            break;
        case 'es5':
            mediapasajeros($vuelopasa,$operando4);
            break;
        default:
        case 'es6':
            pasajerostotales($vuelopasa,$operando4);
            break;
        echo "opcion no valida";
            break;
    }
?>