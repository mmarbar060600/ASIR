<?php
//entrada
    $entrada=$_POST["mvuelo"];
    include ("Funciones.php");
//swich ejc2
switch ($entrada) {
    case 'e1':
        mediavuelo($vuedura);
        break;
    case 'e2':
        totalpasa($vuelopasa);
        break;
        case 'e3':
            fabriavi($avifabri);
            break;
        case 'e4':
            destimax($vuelodesti);
            break;
    default:
        echo "dato mal introducido";
        break;
}
?>