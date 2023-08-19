<?php
    //Clase
    class Jugador{
        //Propiedades
        public $nombre;
        public $posicion;
        public $numero;


        //Metodo Constructor = reduce lineas de code
        public function __construct( $nombre, $posicion, $numero )
        {
        $this->nombre = $nombre;
        $this->posicion = $posicion;
        $this->numero = $numero;
        }


        //Metodos de una clase
        //public = Modificadores de acceso
        public function entrenar(){
            echo $this->nombre . " está Entrenando";
        }

        public function jugar(){
            echo $this->nombre . " está Jugando";
        }

        public function posicion(){
            echo $this->nombre . " es Delantero";
        }
    }

    //Instancia de una clase
    $jugador1 = new Jugador(" Cristiano Ronaldo", "Delantero", 7);
    //$jugador1->nombre = ;
    //$jugador1->posicion = ;
    //$jugador1->numero = ;
    //$jugador1->entrenar();
    //$jugador1->jugar();
    //$jugador1->posicion();

    echo '<pres>' . "<br>";
    var_dump( $jugador1 );
    echo  '</pres>';

    echo  '</br>';

    //Instancia de una clase
    $jugador2 = new Jugador(" Leo Messi", "Delantero", 10);
    //$jugador2->nombre = ;
    //$jugador2->posicion = ;
    //$jugador2->numero = ;
    //$jugador2->entrenar();
    //$jugador2->jugar();
    //$jugador2->posicion();

    echo '<pres>' . "<br>";
    var_dump( $jugador2 );
    echo  '</pres>';


?>