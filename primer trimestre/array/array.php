<?php
/*
#ARRAY NORMALES
    $numeros = array(8, 3, 7, 1);

    $suspenso = array("Miguel","Kerry");

    $coches = array("Ferrari","Seat","BMW","Opel","Mercedes");

    echo $suspenso[0];
    echo $numeros[3];
    echo $coches[1];
$cuentacoches=count($coches);

echo "Numero de coches " .$cuentacoches;


$aleatorio=rand(0,$cuentacoches-1);

echo "coche aleatorio: ".$coches[$aleatorio]."<br>";
$parada=0;

while ($parada <= 5) {
    $aleatorio=rand(0,$cuentacoches-1);
    echo $coches[$aleatorio]. "<br>";
    $parada++;
}

$cochesordenados=sort($coches);

echo "este es el orden: ". $cochesordenados."<br>";

while ($parada < $cuentacoches-1) {
    echo $coches[$cochesordenados]. "<br>";
    $parada++;
}
#ARRAY ASOCIATIVOS

$alumnos = array("Nombre" => "Miguel",
                                    "apellidos" => "Kerry",
                                    "Edad" =>23,
                                    "estaaprobado"=>false));
                                    array("Nombre" => "pako",
                                    "apellidos" => "makako",
                                    "Edad" =>20,
                                    "estaaprobado"=>false));
echo "el alumno es". $alumnos["Edad"].$alumnos["apellidos"].$alumnos["Nombre"];

#Primera prueba de array

*/
//Bucles anidados de forma independiente
print "<br><b>BUCLE INDEPENDIENTE</b>"."<br>";
for ($inicio=1; $inicio < 5 ; $inicio++) { //bucle exterior
    print "Vamos por la interaccion inicio: ".$inicio."<br>";
    for ($inicio2=0; $inicio2 < 5 ; $inicio2++) { //bucle interior
        print "Vamos por la interaccion inicio2: ".$inicio2."<br>";
    }
}
//bucles anidados de forma dependiente
print "<br><b>BUCLE DEPENDIENTE</b>"."<br>";
for ($varexterior=0; $varexterior < 5 ; $varexterior++) { 
    print "Vamos por la interaccion exterior: ".$varexterior."<br>";
for ($varinterior=0; $varinterior < $varexterior ; $varinterior++) { 
    print "Muentro variable interior: ".$varinterior."<br>";
    }
}

#Arrays
print "<br><b>ARRAY 'ESTÁNDAR'</b>"."<br>";

#Forma1

$numerosp = $numeros = array(2,4,6,8,10);
print_r($numerosp);
print "Muestro lo que hay en la posicion 3: ".$numerosp[3]."<br>";
$cuentanumerosp=count($numerosp);
print "valor de la cuenta array: ".$cuentanumerosp."<br>";
#Arrays asociativos
print "<br><b>ARRAY 'ASOCIATIVOS'</b>"."<br>";
$potencias2=[1 => 2 ,2 => 4 ,3 => 8];
print_r($potencias2);
print "<br>";

$capitales= array("Andalucia"=> "Sevilla", "Madrid"=>"Madrid", "Aragon"=>"Zaragoza", "Baleares"=>"Mallorca");
print_r($capitales);
echo "<br>";

//añadir elementor a un array

$capitales["Cataluña"]="barcelona";

print_r($capitales);

$capitales["Andalucia"]="Almeria";
echo"<br>";

print_r($capitales);
echo"<br>";


$cuentaletras=strlen($capitales["Andalucia"]);
echo $cuentaletras;
echo "<br>";
$notasasignaturasMiguel=["LMI"=>0,"FOL"=>10,"PAR"=>9,"ISO"=>0,"FH"=>0,"BD"=>4];
print_r($notasasignaturasMiguel);
/*for ($i=0; $i < ; $i++) { 
    # code...
}
#Forma2
$numeros1 = [1,3,5,7,9];
print_r($numeros1);*/
?>