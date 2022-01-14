<?php
    function compruebanegativos($n1,$n2){
        if ($n1<0) {
            echo "ERROR: Numero 1 es negativo, introduzca valores positivos";
        }
        elseif($n2<0){
            echo "ERROR: Numero 2 es negativo, introduzca valores positivos";
        }
    }
?>