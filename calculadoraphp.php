<?php
function sumar($operando1, $operando2)
{
    $resul = $operando1 + $operando2;
    print "el resultado es " . $resul;
}
function multi($operando1, $operando2)
{
    $resul = $operando1 * $operando2;
    print "el resultado es " . $resul;
}
function restar($operando1, $operando2)
{
    $resul = $operando1 - $operando2;
    print "el resultado es " . $resul;
}
function divi($operando1, $operando2)
{
    $resul = $operando1 / $operando2;
    print "el resultado es " . $resul;
}
function resto($operando1, $operando2)
{
    $resul = $operando1 % $operando2;
    print "el resultado es " . $resul;
}
function raiz($operando1)
{
    $resul = sqrt($operando1);
    print "el resultado es " . $resul;
}
function elevar($operando1, $operando2)
{
    $resul = pow($operando1, $operando2);
    print "el resultado es " . $resul;
}
	$operando1 = $_POST["operando1"];
	$operando2 = $_POST["operando2"];
	$operador = $_POST["operador"];
	
	if($operador == "+"){
		sumar($operando1, $operando2);
	}else if($operador == "*"){
		multi($operando1, $operando2);
	}else if($operador == "-"){
		restar($operando1, $operando2);
	}else if($operador == "/"){
		divi($operando1, $operando2);
	}else if($operador == "%"){
	    resto($operando1, $operando2);
    }else if($operador == "√"){
        raiz($operando1);
    }else if ($operador == "^"){
        elevar($operando1, $operando2);
    } 
?>