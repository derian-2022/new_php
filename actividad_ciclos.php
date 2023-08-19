<?php

/*
Actividad 2: Ciclos
Bienvenido a la segunda actividad llamada “Factorial”, en esta ocasión pondrás en práctica los conocimientos adquiridos hasta el momento. Recapitulando, hasta este punto hemos explicado el funcionamiento de las variables, los operadores, condicionales y ciclos.

Qué aprenderé
Descripción del problema
Imagina que te encuentras en la clase de lógica matemática y el tema que estás viendo es “factorial”, para calcular el factorial de un número se deben multiplicar todos los números enteros y positivos que hay entre el número que aparece en la fórmula y el número 1.


Por ejemplo: si tienes el número 7, su factorial sería:


7! = 1 * 2 * 3 * 4 * 5 * 6 * 7 = 5.040


Teniendo claro esto, te piden que escribas un programa que calcule el factorial de los siguientes números: 5, 10, 15 y 20. El resultado debes colocarlo en un comentario multilineas.

Cómo empezar
Observa el siguiente instructivo, donde se explicara el porqué, el cómo y el paso a paso de cada línea de código que escribirás:


1. Ingrese a Visual Studio Code y en la carpeta “Actividades” cree un nuevo archivo con el nombre “actividad_ciclos.php”.


2. Define la variable $numero, la cual almacenará los números dados en el problema. Después crea otra variable llamada $factorial inicializada con el número 1.
*/

$numero = 7;
$factorial = 1; //es 5040

$numero = 5;
$factorial = 1; //es 120

$numero = 10;
$factorial = 1; //es 3628800

$numero = 15;
$factorial = 1; //es 1307674368000

$numero = 20; //es 2432902008176640000
$factorial = 1;

/*
El factorial del núnero 7 es 5040
*/

/*
3. Cree el ciclo for con la variable iteradora $x inicializada en 1,
el ciclo se repetirá mientras $x sea menor o igual a $número e incremente el ciclo con $x++.
*/

for ($x = 1; $x <= $numero; $x++)
{
    $factorial = $factorial * $x;
}

//4. Imprima el resultado

echo "El factorial del núnero $numero es $factorial";

/*
5, 10, 15 y 20. El resultado es:
*/
?>