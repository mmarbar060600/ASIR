<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio fechas</title>
</head>
<body>
    <h2>Ejercicio de tratamiento de fechas</h2>

<p>Vamos a aprender a tratar fechas en php y funcionalidades</p>
<br>

<?php
echo "vamos a trabajar con fechas". "<br>";
echo "Hoy es: ".date("l")."<br>";
echo "Dime la fecha actual: ".date("Y/F")."<br>";
echo "Dime el dia: ".date("j/n/y")."<br>";

echo "Ejercicio ejemplo if"."<br>"."<br>"."<br>";
$hora = date("H");
if($hora<15){
    echo "Lo siento, sigo en clase."."<br>";

} else{
    echo "Estoy en mi casa."."<br>";
}
echo "Ejercicio ejemplo elseif"."<br>"."<br>"."<br>";

$segundos = date("s");

if($segundos<10){
    echo "Primeros 10 segundos"."<br>";
    echo "segundos:".$segundos;

}elseif($segundos>"50"){
    echo "Ultimos 10 segundos"."<br>";
    echo "segundos: ".$segundos;
}else{
    echo "Segundos intermedios"."<br>";
    echo "Segundos: ".$segundos."<br>";
}

echo "Ejercicio ejemplo switch"."<br>"."<br>"."<br>";

$colores ="turquesa";
switch ($colores) {
    case 'Rojo':
        echo "La sangre es de color: ".$colores."<br>";
    break;

        case 'verde':
            echo "La hierba es de color: ".$colores."<br>";
        break;

        case 'amarillo':
            echo "el sol es de color: ".$colores."<br>";
        break;

        case 'azul':
            echo "el cielo es de color: ".$colores."<br>";
        break;
    
    default:
    echo "el color:".$colores." no esta registrado"."<br>";
    break;
}
?>
</body>
</html>