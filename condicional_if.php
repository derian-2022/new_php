<?php
    /*
    Realizar un programa que envie un mensaje
    solo si este contiene m,enos de 100 letras,
    caso contrario que arroje un mensaje de error

    Ejemplo #1
    $total_letras =  strlen("Hola. ¿Como estas? ¿Qué haces?");

    if($total_letras < 100){
        echo "El mensaje fue enviado exitosamente";
    } else {
        echo "No se ha podido enviar el mensaje porque contiene" . $total_letras . "letras";
    }
    */

    /*
        Crear un programa que indique si los habitantes hablan español u otro idioma
    */

    //Ejemplo #2

    $pais = "España";

    if(( $pais == "Mexico" || $pais == "España" || $pais == "Colombia" )) {
        echo "Aqui se habla español";
    } else {
        echo "Aqui se habla otro idioma";
    }
?>