<?php
function check_vote( $nombre, $edad ) {

    if ($edad >= 18 ) {
        echo $nombre . ", Puedes Votar" . "<br>";
    } else {
        echo $nombre . ", No puedes Votar" . "<br>";
    }
}

    check_vote( "Ashley", 14 ); //Ashley, No puedes Votar
    check_vote( "Luis Camilo", 20 ); //Luis Camilo, Puedes Votar
    check_vote( "Fernando:", 16 ); //Fernando:, No puedes Votar
    check_vote( "Jorge:", 22 ); //Puedes Votar

?>