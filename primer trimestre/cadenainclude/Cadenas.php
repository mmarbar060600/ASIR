<?php
/*Creamos todas las funciones*/
function caracter($t1)
{
    $resul = strlen($t1);
    print "tiene esta cantidad de caracteres " . $resul;
}
function cuenpala($t1)
{
    $resul = str_word_count($t1);
    print "tiene " . $resul . " palabras";
}
function busqueda($t1, $t2)
{
    $resul = strpos($t1, $t2);
    if ($resul === true) {
        print "Hay palabras que coinciden"; 
    }
    else {
        print "No se encuentran palabras que coinciden";
    }
}
function invierte($t1)
{
    $resul = strrev($t1);
    print "palabra invertida: ". $resul;
}
function remplaza($t3,$t2,$t1)
{
    $resul = str_replace($t3,$t2,$t1);
    print "resultado: ". $resul;
}
?>