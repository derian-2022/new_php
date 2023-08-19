<?php
    /*Variables con valores Booleanos, si ambos son false y true sera = nada en el
    http://localhost/curso_php/op_logicos.php
    */
    $x = true;
    $y = false;

    //Operador AND
    echo $x and $y;
    echo '<br>';
    echo $x && $y;
    echo '<br>';


    //Operador OR
    echo $x or $y;
    echo '<br>';
    echo $x || $y;
    echo '<br>';

    //Operador XOR
    echo $x xor $y;
    echo '<br>';

    //Operador Negacion
    echo !$y;
?>