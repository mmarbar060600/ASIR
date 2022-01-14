<?php
require "valida.php";
/*Creamos todas las funciones*/
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
function fibo($a)
{
    $nume1 = 0;
    $nume2 = 1;
    $contador = 0;
    while ($contador <= $a) {
        print "".$nume1;
        $nume3 = $nume2 + $nume1;
        $nume1 = $nume2;
        $nume2 = $nume3;
        $contador ++;
    };
    }
	$operando1 = $_POST["operando1"];
	$operando2 = $_POST["operando2"];
	$operador = $_POST["operador"];
	compruebanegativos($operando1,$operando2);
    /*Ejemplo con if*/

	/*if($operador == "+"){
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
    } */

    /*ejemplo con switch*/
    switch ($operador) {
        case '+':
            sumar($operando1, $operando2);
            break;
        case '*':
            multi($operando1, $operando2);
            break;
        case '-':
            restar($operando1, $operando2);
            break;
        case '/':
            divi($operando1, $operando2);
            break;
        case '%':
            resto($operando1, $operando2);
            break;
        case '√':
            raiz($operando1);
            break;
        case '^':
            elevar($operando1, $operando2);
            break;
        case 'fibo':
            fibo($operando1);
            break;
        
        default:
            echo "Operacion incorrecta";
            break;
    }
?>