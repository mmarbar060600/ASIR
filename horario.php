<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario Manuel Martínez 2ºASIR</title>
    <style>
        table,
        tr,
        td{
            border: 1px solid black;
            width: auto;
        }
    </style>
</head>
<body>
<h1>Horario de clases</h1>
    <h2>Este es el horario de Manuel Martínez</h2>
    <?php
        $dia = date("w");
        $hora = date("G");
        switch ($dia) {
            case '1' :
                echo "Lunes ". date("j"). "mes: ". date("F")."año: ".date("y") . "<br>";
                echo "
                <table>
                    <caption>Horario de hoy</caption>
                    <tr>
                        <td><a>8:15/9:15</a></td>
                        <td><a>APW(Aplicaciones Web)</a></td>
                    </tr>
                    <tr>
                        <td><a>9:15/10:15</a></td>
                        <td><a>APW(Aplicaciones Web)</a></td>
                    </tr>
                    <tr>
                        <td><a>10:15/11:15</a></td>
                        <td><a>APW(Aplicaciones Web)</a></td>
                    </tr>
                    <tr>
                        <td><a>RECREO</a></td>
                    </tr>
                    <tr>
                        <td>11:45/12:45</td>
                        <td><a>SR(Servicios en Red)</a></td>
                    </tr>
                    <tr>
                        <td>12:45/13:45</td>
                        <td><a>SR(Servicios en Red)</a></td>
                    </tr>
                    <tr>
                        <td>13:45/14:45</td>
                        <td><a>SR(Servicios en Red)</a></td>
                    </tr>
                </table>";
                if ($hora == 8) {
                    echo "Toca Aplicaciones web";
                }
                elseif ($hora == 9) {
                    
                    echo "Toca Aplicaciones web";
                }
                elseif ($hora == 10){
                        echo "Toca Aplicaciones web";
                }
                elseif ($hora == 11){
                        echo "Recreo";
                }
                elseif ($hora == 12){
                        echo "Toca Servicios en red";
                }
                elseif ($hora == 13){
                        echo "Toca Servicios en red";
                }
                elseif ($hora == 14){
                        echo "Toca Servicios en red";
                        }
                else {
                    echo "No hay clases";
                }
                break;
        case '2' :
            echo "Martes ". date("j"). "mes: ". date("F")."año: ".date("y") . "<br>";
            echo "
                <table>
                <caption>Horario de hoy</caption>
                <tr>
                    <td><a>8:15/9:15</a></td>
                    <td><a>ASO(Administracion sistemas operativos)</a></td>
                </tr>
                <tr>
                    <td><a>9:15/10:15</a></td>
                    <td><a>ASO(Administracion sistemas operativos)</a></td>
                </tr>
                <tr>
                    <td><a>10:15/11:15</a></td>
                    <td><a>ASO(Administracion sistemas operativos)</a></td>
                </tr>
                <tr>
                    <td><a>RECREO</a></td>
                </tr>
                <tr>
                    <td>11:45/12:45</td>
                    <td><a>SI (Seguridad informatica)</a></td>
                </tr>
                <tr>
                    <td>12:45/13:45</td>
                    <td><a>E.I.E(Empresas e Iniciativa emprendedora)</a></td>
                </tr>
                <tr>
                    <td>13:45/14:45</td>
                    <td><a>E.I.E (Empresas e iniciativa emprendedora)</a></td>
                </tr>
                </table>";
                if ($hora == 8) {
                    echo "Toca  Administracion de sistemas operativos";
                }
                elseif ($hora == 9) {
                    
                    echo "Toca Administracion de sistemas operativos";
                }
                elseif ($hora == 10){
                        echo "Toca Administracion de sistemas operativos";
                }
                elseif ($hora == 11){
                        echo "Recreo";
                }
                elseif ($hora == 12){
                        echo "Toca Seguridad";
                }
                elseif ($hora == 13){
                        echo "Toca Empresas";
                }
                elseif ($hora == 14){
                        echo "Toca Empresas";
                        }
                else {
                    echo "No hay clases";
                }
                break;
        case '3' :
            echo "Miercoles ". date("j"). "mes: ". date("F")."año: ".date("y") . "<br>";
            echo "
                <table>
                <caption>Horario de hoy</caption>
                <tr>
                    <td><a>8:15/9:15</a></td>
                    <td><a>ASO(Administracion sistemas operativos)</a></td>
                </tr>
                <tr>
                    <td><a>9:15/10:15</a></td>
                    <td><a>ASO(Administracion sistemas operativos)</a></td>
                </tr>
                <tr>
                    <td><a>10:15/11:15</a></td>
                    <td><a>ASO(Administracion sistemas operativos)</a></td>
                </tr>
                <tr>
                    <td><a>RECREO</a></td>
                </tr>
                <tr>
                    <td>11:45/12:45</td>
                    <td><a>SR(Servicios en Red)</a></td>
                </tr>
                <tr>
                    <td>12:45/13:45</td>
                    <td><a>SR(Servicios en Red)</a></td>
                </tr>
                <tr>
                    <td>13:45/14:45</td>
                    <td><a>SR(Servicios en Red)</a></td>
                </tr>
                </table>";
                if ($hora == 8) {
                    echo "Toca Administracion de sistemas operativos";
                }
                elseif ($hora == 9) {
                    
                    echo "Toca Administracion de sistemas operativos";
                }
                elseif ($hora == 10){
                        echo "Toca Administracion de sistemas operativos";
                }
                elseif ($hora == 11){
                        echo "Recreo";
                }
                elseif ($hora == 12){
                        echo "Toca Servicios en red";
                }
                elseif ($hora == 13){
                        echo "Toca Servicios en red";
                }
                elseif ($hora == 14){
                        echo "Toca Servicios en red";
                        }
                else {
                    echo "No hay clases";
                }
                break;
        case '4' :
            echo "Jueves ". date("j"). "mes: ". date("F")."año: ".date("y") . "<br>";
            echo "
                <table>
                <caption>Horario de hoy</caption>
                <tr>
                    <td><a>8:15/9:15</a></td>
                    <td><a>BD(Base de datos)</a></td>
                </tr>
                <tr>
                    <td><a>9:15/10:15</a></td>
                    <td><a>BD(Base de datos)</a></td>
                </tr>
                <tr>
                    <td><a>10:15/11:15</a></td>
                    <td><a>BD(Base de datos)</a></td>
                </tr>
                <tr>
                    <td><a>RECREO</a></td>
                </tr>
                <tr>
                    <td>11:45/12:45</td>
                    <td><a>SI(Seguridad)</a></td>
                </tr>
                <tr>
                    <td>12:45/13:45</td>
                    <td><a>ing(Ingles)</a></td>
                </tr>
                <tr>
                    <td>13:45/14:45</td>
                    <td><a>ing(Ingles)</a></td>
                </tr>
                </table>";
                if ($hora == 8) {
                    echo "Toca Base de datos";
                }
                elseif ($hora == 9) {
                    
                    echo "Toca Base de datos";
                }
                elseif ($hora == 10){
                        echo "Toca Base de datos";
                }
                elseif ($hora == 11){
                        echo "Recreo";
                }
                elseif ($hora == 12){
                        echo "Toca Seguridad";
                }
                elseif ($hora == 13){
                        echo "Toca ingles";
                }
                elseif ($hora == 14){
                        echo "Toca ingles";
                        }
                else {
                    echo "No hay clases";
                }
                break;
        case '5' :
            echo "Viernes ". date("j"). "mes: ". date("F")."año: ".date("y") . "<br>";
            echo "
                <table>
                <caption>Horario de hoy</caption>
                <tr>
                    <td><a>8:15/9:15</a></td>
                    <td><a>BD(Base de datos)</a></td>
                </tr>
                <tr>
                    <td><a>9:15/10:15</a></td>
                    <td><a>BD(Base de datos)</a></td>
                </tr>
                <tr>
                    <td><a>10:15/11:15</a></td>
                    <td><a>BD(Base de datos)</a></td>
                </tr>
                <tr>
                    <td><a>RECREO</a></td>
                </tr>
                <tr>
                    <td>11:45/12:45</td>
                    <td><a>SI(Seguridad informatica)</a></td>
                </tr>
                <tr>
                    <td>12:45/13:45</td>
                    <td><a>Ing(Ingles)</a></td>
                </tr>
                <tr>
                    <td>13:45/14:45</td>
                    <td><a>Ing(Ingles)</a></td>
                </tr>
                </table>";
                if ($hora == 8) {
                    echo "Toca Ingles";
                }
                elseif ($hora == 9) {
                    
                    echo "Toca Seguridad";
                }
                elseif ($hora == 10){
                        echo "Toca Seguridad";
                }
                elseif ($hora == 11){
                        echo "Recreo";
                }
                elseif ($hora == 12){
                        echo "Toca Aplicaciones web";
                }
                elseif ($hora == 13){
                        echo "Toca Empresas";
                }
                elseif ($hora == 14){
                        echo "Toca empresas";
                        }
                else {
                    echo "No hay clases";
                }
                break;
                    default:
                        echo "Es finde de semana, no hay clases";
                        break;
                }
    ?>
</body>
</html>