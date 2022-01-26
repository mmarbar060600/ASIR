<?php
//entrada
$entrada=$_POST["mvuelo"];
include ("Funciones.php");
//swich ejc 03
switch ($entrada) {
    case 'c1':
        totalciudades($vuelodesti);
        break;
    
    default:
        # code...
        break;
}
?>