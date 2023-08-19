<?php
/*
Operador ternario
El operador ternario es una forma simple de realizar un condicional sobre el flujo del programa, es decir,
una manera rápida de plasmar un bloque if-else en una sola línea de código mediante el uso de tres operandos en una única operación.
 */

/* Ejercicio
Para que un alumno gane una asignatura deb,
sacar mas de 3 en la nota final,
caso contario pierde la asignatura

//Opcion #1

if($nota > 4){
    echo 'Ganaste la asignatura';
}else{
    echo 'Perdiste la asignatura';
}

*/

$nota = 4.2;


echo($nota > 4 ? 'Ganaste la asignatura' : 'Perdiste la asignatura' );

?>

