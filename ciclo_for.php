<?php

//Crear un programa que imprima los numeros del 1 al 10

for( $i = 1; $i <= 10; $i++ ){
    echo $i . ' ';
}

echo "<br>" . "<br>";

//Mostrar los numeros pares del 0 al 50

echo "<span style='color: blue;'>NÚMEROS PARES</span><br>"; // Cambiar el color a azul
for( $par = 0; $par <= 50; $par++ ){
    if($par % 2 == 0){
        echo $par . " ";
    }
}


/*
La estructura de la sentencia For en PHP es la siguiente: su nombre (for), la inicialización de datos que deseemos,
una condición o varias entre paréntesis, una actualización de información que se ejecutará cuando una repetición termine y unas llaves para indicar sobre que líneas actúa.

La primera parte consiste en colocar la palabra for seguido de paréntesis e inicializar la variable, normalmente se coloca una variable llamada “i” haciendo referencia a iteración”.

La segunda parte es la condición que deberá cumplirse para que se detenga la ejecución, para esto utilizamos los operadores relacionales, si, esos que te explique anteriormente, tales como: mayor que, menor que, igual a, menor o igual que, entre otros.

Y la tercera parte es el incremento después de cada repetición, es decir, inicialmente se encuentra en 0, después en la segunda vuelta la variable i también conocida como iteradora pasa a ser 1, después de realizar otra vuelta pasa a ser 2, y así sucesivamente hasta que se cumple la condición.
*/
?>