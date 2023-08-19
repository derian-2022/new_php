<?php

// Definición de la clase base SeleccionFutbol
class SeleccionFutbol {
    public $id;
    public $nombre;
    public $edad;

    // Constructor de la clase
    public function __construct($id, $nombre, $edad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método para concentrarse
    public function concentrarse() {
        echo $this->nombre . " Está en concentración";
    }

    // Método para viajar
    public function viajar() {
        echo $this->nombre . " Está viajando";
    }
}

// Definición de la clase Jugador que hereda de SeleccionFutbol
class Jugador extends SeleccionFutbol {
    public $posicion;
    public $numero;

    // Constructor de la clase Jugador
    public function __construct($id, $nombre, $edad, $posicion, $numero) {
        // Llamada al constructor de la clase padre
        parent::__construct($id, $nombre, $edad);
        $this->posicion = $posicion;
        $this->numero = $numero;
    }

    // Método para entrenar
    public function entrenar() {
        echo $this->nombre . " está Entrenando";
    }

    // Método para jugar
    public function jugar() {
        echo $this->nombre . " está Jugando";
    }

    // Método para mostrar la posición del jugador
    public function mostrarPosicion() {
        echo $this->nombre . " es Delantero";
    }
}

// Definición de la clase Entrenador que hereda de SeleccionFutbol
class Entrenador extends SeleccionFutbol {
    public $experiencia;

    // Constructor de la clase Entrenador
    public function __construct($id, $nombre, $edad, $experiencia) {
        // Llamada al constructor de la clase padre
        parent::__construct($id, $nombre, $edad);
        $this->experiencia = $experiencia;
    }

    // Método para dirigir el entrenamiento
    public function dirigirEntrenamiento() {
        echo $this->nombre . " Está dirigiendo el entrenamiento";
    }

    // Método para dirigir los partidos
    public function dirigirPartidos() {
        echo $this->nombre . " Está dirigiendo los partidos";
    }
}

// Creación de un objeto Jugador y llamada a métodos
$jugador1 = new Jugador(123, "Cristiano", 37, "Delantero", 7);
$entrenador1 = new Entrenador(1979, "Maradona", 55, 15 );
$jugador1->viajar();
echo "<br>";
$entrenador1->dirigirEntrenamiento();

?>
