<?php
//entrada
    $entrada=$_POST["mvuelo"];
    include ("Funciones.php");
//swich ejc2
switch ($entrada) {
    case 'e1':
        mediavuelo($vuedura);
        break;
    
    default:
        echo "dato mal introducido";
        break;
}
?>