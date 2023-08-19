<?php
/*
function saludo($nombre){
    echo "¡Hola " . $nombre . ", eres un Programador Full Stack Web!" . "<br>";
}

saludo("Derian");
saludo("Julieth");
*/


function operaciones($numero1, $numero2, $operacion ) {
    $resultado = 0;
    if ($operacion == "Sumar"){
        $resultado = $numero1 + $numero2;
    }elseif ($operacion == "Restar"){
        $resultado = $numero1 - $numero2;
    }elseif ($operacion == "Multiplicar"){
        $resultado = $numero1 * $numero2;
    }elseif ($operacion == "Dividir"){
        $resultado = $numero1 / $numero2;
    }else{
        echo "No se reconoce la Operacion";
    }
    return $resultado;
}

$imprimir = operaciones(5, 2, "Dividir");
echo $imprimir;

?>