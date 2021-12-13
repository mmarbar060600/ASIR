<?php
switch ($operador) {
    case '1':
        caracter($t1);
        break;
    case '2':
        cuenpala($t1);
        break;
    case '3':
        invierte($t1);
        break;
    case '4':
        busqueda($t1,$t2);
        break;
    case '5':
        remplaza($t3, $t2, $t1);
        break;
    default:
        echo "Operacion incorrecta";
        break;
}
?>