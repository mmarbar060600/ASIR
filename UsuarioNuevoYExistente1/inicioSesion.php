<?php
    $usuarios=array("hormiga","coche","alfonso","Gono","manuel");
    $contraseñas=array("112233","coche","alcala","1234","kerry");
    $usuario=$_POST["usuario"];
    $contraseña=$_POST["contraseña"];
    for($i=0; $i<=5; $i++){
        if($usuario==$usuarios[$i] and $contraseña==$contraseñas[$i]){
            $i++;
            echo "<h1>Acceso permitido</h1></br> eres el " . $i . " usuario de la plataforma";
        }elseif ($usuario==$usuarios[$i] or $contraseña==$contraseñas[$i]){
            echo "usuario o contraseña erronea";
            break;
        };
    }
?>