<?php

// Crear un programa qie imprima los números del 1 al 10 o 1 a 100


//Ejemplo de mala practica

/*echo 1 . '<br>';
echo 2 . '<br>';
echo 3 . '<br>';
echo 4 . '<br>';
echo 5 . '<br>';
*/


// La mejor prctica, la formula Itera del 1 al 10 o del 1 al 100
$i = 1;


/* while($i <= 100){
    echo $i++ . " ";
}
*/

// Crear un programa que imprima las tablas de multiplicar

$numero = 9;

while($i <= 10){
    echo $i++ * $numero . " ";
}


?>