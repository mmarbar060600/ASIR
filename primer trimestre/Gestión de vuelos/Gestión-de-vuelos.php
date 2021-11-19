<?php
    //Funciones del PHP
    $operador = $_POST["operador"];
if (isset($_POST["infovuelo1"]) && isset($_POST["infovuelo2"])) {
    $operador=$_POST["operador"];
    //datos vuelo1
    $vuelo1=$_POST["infovuelo1"];
    $c1= $vuelo1["c1"];
    $co1= $vuelo1["co1"];
    $cd1= $vuelo1["cd1"];
    $p1= $vuelo1["p1"];
    $f1= $vuelo1["f1"];

    //datos vuelo2
    $vuelo2=$_POST["infovuelo2"];
    $c2= $vuelo2["c2"];
    $co2= $vuelo2["co2"];
    $cd2= $vuelo2["cd2"];
    $p2= $vuelo2["p2"];
    $f2= $vuelo2["f2"];
}
    function unir($vuelo1,$vuelo2)
    {
        $unirarray = array_merge($vuelo1,$vuelo2);
        echo "vuelos unidos: ";
        print_r($unirarray);
    }
    function dife($vuelo1,$vuelo2)
    {
        $difearray = array_diff($vuelo1,$vuelo2);
        echo "Diferencia de vuelos: ";
        print_r($difearray);
    }
    function orde($vuelo1)
    {
        sort($vuelo1);
        echo "Vuelo 1 ordenado: ";
        print_r($vuelo1);
    }
    function infcomu($vuelo1,$vuelo2)
    {
        $infcomuarray = array_intersect($vuelo1,$vuelo2);
        echo "Info comun: ";
        print_r($infcomuarray);
    }
switch ($operador) {
    case '1':
        unir($vuelo1,$vuelo2);
        break;
    
    case '2':
        dife($vuelo1,$vuelo2);
        break;
    case '3':
        orde($vuelo1);
        break;
    case '4';
        infcomu($vuelo1,$vuelo2);
        break;
    default;
    echo "Opcion no valida";
    break;
        
}
?>