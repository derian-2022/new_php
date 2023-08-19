<?php
/*
Primera Evaluacion del Curso en PHP

Actividad 1: Condicionales
Bienvenido a la primera actividad llamada “Descuentos” en la cual pondrá en práctica los conocimientos adquiridos sobre los condicionales simples y compuestos.

Qué aprenderé
Descripción del problema
Imagine que la tienda donde usted trabaja ofrece descuentos a los clientes en navidad, de acuerdo con el monto de su compra. El criterio para establecer el descuento se muestra a continuación:

Compra (USD)

Porcentaje

Si es menor a 50

5%

Si es mayor o igual a 50 y menor que 100

10%

Si es mayor o igual a 100 y menor o igual a 250

15%

Si es mayor a 250 y menor a 400

20%


Teniendo en cuenta la tabla, te piden que escribas un programa que solicite el nombre del cliente y el valor de la compra. Y que arroje como resultado: 


Recuerde que para calcular el descuento primero debe multiplicar el valor de la compra por el porcentaje. Luego, debe restar el valor obtenido al valor de la compra y con eso obtiene el precio con descuento.

descuento = valor_compra x porcentaje
precio final = valor_compra - descuento
Cómo empezar
Observa el siguiente instructivo, donde se explicara el porqué, el cómo y el paso a paso de cada linea de codigo que escribirás:


1. Ingrese a Visual Studio Code y en la carpeta “Actividades” cree un nuevo archivo con el nombre “actividad_condicionales.php”.

2. Define las variables nombre y valor_compra, las cuales almacenarán el nombre del usuario y el valor de la compra.
*/
    $nombre = "Magda";
    $compra = 350; //$343 USD
    $nombre = "Juan Pablo";
    $compra = 55; //$49.5 USD
    $nombre = "Kenia Ortiz";
    $compra = 120; //$102 USD
    $nombre = "Angie Andrade";
    $compra = 275; //$275 USD
    $nombre = "Eva Castro";
    $compra = 350; //$343 UDS



/* 3. Cree las condiciones usando los operadores lógicos y de comparación. En la variable descuento guarde el porcentaje asignado de acuerdo al valor de la compra realizada.
*/

//Establecer condiciones

    if ($compra < 50 ) {
        $descuento = 0.05;
    }elseif ($compra >= 50 && $compra < 100 ) {
        $descuento = 0.1;
    }elseif ($compra >= 100 && $compra <= 250 ) {
        $descuento = 0.15;
    }elseif ($compra > 250 && $compra < 400 ) {
        $descuento = .02;
    }else {
        $descuento = 0;
    }

    //4. Obtenga el precio final usando la fórmula indicada en el problema.

    $precio_final = $compra - ( $compra * $descuento );

    //5. Imprima los resultados:

    echo ('Hola, ' . $nombre . 'El valor de su compra es: $' . $compra . 'y con el descuento es $' . $precio_final );
?>