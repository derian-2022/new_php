<?php
    /*
    Condicional else if
        elseif, como su nombre lo sugiere, es una combinación de if y else.
        Del mismo modo que else, extiende una sentencia if para ejecutar una sentencia diferente en caso que la expresión if original se evalúe como false.
        Sin embargo, a diferencia de else, esa expresión alternativa sólo se ejecutará si la expresión condicional del elseif se evalúa como true.
    */
    $edad = 15;

    if($edad > 21){
        echo 'Eres mayor de 21 años'; //Primera situacion
    }else if($edad == 21){
        echo 'Tienes 21 años'; //Segunda situacion
    }else {
        echo 'Eres menor de 21 años'; //Tercera situacion
    }

?>