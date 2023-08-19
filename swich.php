<?php

/*
Sentencia switch
La sentencia switch es similar a una serie de sentencias if en la misma expresión.
En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes,
y ejecutar una parte de código distinta dependiendo de a qué valor es igual.

En este caso definimos una variable de tipo string con llamada $color_favorito e inicializamos con el carácter “verde”. 



Después empleamos el switch y dentro la variable de selección, entonces lo que hará el programa será encontrar una coincidencia.
Primero ingresa al primer caso: ¿‘verde’ es igual a ‘azul? Como esto no se cumple, pasa al segundo caso ¿’rojo’ es igual a ‘verde’?
Esto tampoco se cumple, así que pasa al siguiente caso ¿‘rosado’ es igual a ‘verde?, como no se cumple, pasa al siguiente caso ¿’morado’ es igual ‘verde’?
Como no es válido, entonces ejecutamos la instrucción “No se ha encontrado este color”.
*/

/* Ejemplo:
Realice un programa que imprima cual es su color favotito.
Mostrar un ejemplo con if-else y con Swich.
*/


$color_favorito = "Pink";

//Ejemplo #1 Con Swich La mejor opcion, es mas silmple

switch($color_favorito){
    case "Red":
        echo "Tu color favorito es el Rojo";
        break;
    case "Green":
        echo "Tu color favorito es el Verde";
        break;
    case "Blue":
        echo "Tu color favorito es el Azul";
        break;
    default:
        echo "Tu color favorito no es rojo, ni verde, ni azul";
}


//Ejemplo #2 con else-if
/*
if($color_favorito == 'Blue'){
    echo "Tu color favorito es: " . $color_favorito;
}else if($color_favorito == 'Red'){
    echo "Tu color favorito es: " . $color_favorito;
}else if($color_favorito == 'Pink') {
    echo "Tu color favorito es: " . $color_favorito;
}else if($color_favorito == 'White'){
    echo "Tu color favorito es: " . $color_favorito;
}else if($color_favorito == 'Purple' ){
    echo "Tu color favorito es: " . $color_favorito;
}else{
    echo "No se ha encontrado tu color favorito";
}
*/

//Ejemplo #3 con Operadore Logicos
/*
if($color_favorito == 'Blue' || 'Yellow'){
    echo "Tu color favorito es: " . $color_favorito;
}else if($color_favorito == 'Red' || 'Coffe'){
    echo "Tu color favorito es: " . $color_favorito;
}else if($color_favorito == 'Pink' || 'Beig') {
    echo "Tu color favorito es: " . $color_favorito;
}else if($color_favorito == 'White' || 'Black'){
    echo "Tu color favorito es: " . $color_favorito;
}else if($color_favorito == 'Purple' || 'Transparent'){
    echo "Tu color favorito es: " . $color_favorito;
}else{
    echo "No se ha encontrado tu color favorito";
}
*/
?>