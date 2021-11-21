<?php
    $usuario= $_POST["usuario"];
    $contraseña= $_POST["contraseña"];
    $usuarios = array("manuel","antonio","federico","paco");
    $contraseñas = array("12345","54321","abcdef","ABCDEF");
    for ($i=0; $i<=3 ; $i++) { 
        if ($usuario==$usuarios[$i] and $contraseña==$contraseñas[$i]) {
            $i++;
            echo "El usuario es correcto y esta en la posicion: ". $i;
            break;
        }else {
            echo "usuario incorrecto";
        };
        }
?>