<?php
    //Formas de declarar un arreglo
    //$arreglo1 = array( "Elemento1", 2, "Elemento3", 25, 5.6 );

    //$arreglo2 = [ "Elemento1", 20, "Elemento3", "Elemento4", false, true  ];


    // Clave => Valor
    $arreglo3 = array (
        'nombre' => 'Derian',
        'edad' => 43,
        'celular' => 123456789,
        'estatura' => 1.79,
    );


    echo '<pre>';
    var_dump($arreglo3);
    echo '</pre>';

    //Agregar Valores
    $arreglo3[ 'email' ] = 'derian@gmail.com';
    //Modificar Valores
    $arreglo3[ 'celular'] = 12345678910;

    echo '<pre>';
    var_dump($arreglo3);
    echo '</pre>';

    //Eliminar el ultimo elemento del arreglo
    array_pop($arreglo3);

    //Encontrar Valores en el arreglo
    in_array(43, $arreglo3);

    echo '<pre>';
    var_dump( in_array ( 43, $arreglo3 ));
    echo '</pre>';

?>