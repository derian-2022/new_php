<?php
    echo '<span style="color: blue;">RUTINA DEL GYM 🏋️‍♀️</span><br>';

    $rutinas = array(
        "Lunes" => "Pecho, Espalda, Hombros",
        "Martes" => "Piernas, Glúteos",
        "Miercoles" => "Bíceps, Espalda, Hombros",
        "Jueves" => "Tríceps, Bíceps",
        "Viernes" => "Piernas, Pantorrillas",
        "Sabado" => "Aerobics",
        "Domongo" => "Cerrado",
    );

    echo "El día Lunes toca: " . $rutinas[ "Lunes" ] . "<br>";
    echo "El día Martes toca: " . $rutinas[ "Martes" ] . "<br>";
    echo "El día Miercoles toca: " . $rutinas[ "Miercoles" ] . "<br>";
    echo "El día Jueves toca: " . $rutinas[ "Jueves" ] . "<br>";
    echo "El día Viernes toca: " . $rutinas[ "Viernes" ] . "<br>";
    echo "El día Sabado toca: " . $rutinas[ "Sabado" ] . "<br>";
    echo "El dia está: " . $rutinas[ "Domongo" ] . "<br>";


    /*
        RUTINA DEL GYM
        El día Lunes toca: Pecho, Espalda, Hombros
        El día Martes toca: Piernas, Glúteos
        El día Miercoles toca: Bíceps, Espalda, Hombros
        El día Jueves toca: Tríceps, Bíceps
        El día Viernes toca: Piernas, Pantorrillas
        El día Sabado toca: Aerobics
        El dia está: Cerrado
    */
?>