<?php

//Metodo #1

/*
Nombre  Edad  Depósito
Mariano  25    5700
Leonel   56    3500
Yaneth   34    8400
Martín   45    2500


class Persona
{
    public string $nombre;
    public int $edad;

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function imprimirDatos()
    {
        echo $this->nombre . "\n" . $this->edad . "\n";
    }
}

class Ciudadano extends Persona
{
    public string $deposito;

    public function __construct($nombre, $edad, $deposito)
    {
        parent::__construct($nombre, $edad);
        $this->deposito = $deposito;
    }

    public function imprimirDatos()
    {
        parent::imprimirDatos();
        echo $this->deposito . "\n";
    }

    public function impuestos()
    {
        if ($this->deposito > 3000) {
            echo "El ciudadano " . $this->nombre . " debe pagar los impuestos";
        } else {
            echo "El ciudadano " . $this->nombre . " no debe pagar los impuestos";
        }
    }
}

$ciudadano = new Ciudadano("Mariano", 25, 5700); // Mariano debe pagar los impuestos
$ciudadano = new Ciudadano("Leonel", 56, 3500); // Leonel debe pagar los impuestos
$ciudadano = new Ciudadano("Yaneth", 34, 8400); // Yaneth debe pagar los impuestos
$ciudadano = new Ciudadano("Martín", 45, 2500); // Martín no debe pagar los impuestos
$ciudadano->imprimirDatos();
$ciudadano->impuestos();
*/
?>





<?php

//Metodo #2


/*
Nombre  Edad  Depósito
Mariano  25    5700
Leonel   56    3500
Yaneth   34    8400
Martín   45    2500
*/

class Persona
{
    public string $nombre;
    public int $edad;

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function imprimirDatos()
    {
        echo "Nombre: " . $this->nombre . "\nEdad: " . $this->edad . "\n";
    }
}

class Ciudadano extends Persona
{
    public string $deposito;

    public function __construct($nombre, $edad, $deposito)
    {
        parent::__construct($nombre, $edad);
        $this->deposito = $deposito;
    }

    public function imprimirDatos()
    {
        parent::imprimirDatos();
        echo "Depósito: " . $this->deposito . "\n";
    }

    public function impuestos()
    {
        if ($this->deposito > 3000) {
            echo "El ciudadano " . $this->nombre . " debe pagar los impuestos";
        } else {
            echo "El ciudadano " . $this->nombre . " no debe pagar los impuestos";
        }
    }
}


// Crear instancias de Ciudadano y demostrar cálculo de impuestos


// Mariano tiene un depósito de 5700, por lo que debe pagar impuestos
$ciudadanoMariano = new Ciudadano("Mariano", 25, 5700);
$ciudadanoMariano->imprimirDatos();
$ciudadanoMariano->impuestos();
echo "\n";


// Leonel tiene un depósito de 3500, por lo que debe pagar impuestos

$ciudadanoLeonel = new Ciudadano("Leonel", 56, 3500);
$ciudadanoLeonel->imprimirDatos();
$ciudadanoLeonel->impuestos();
echo "\n";


// Yaneth tiene un depósito de 8400, por lo que debe pagar impuestos

$ciudadanoYaneth = new Ciudadano("Yaneth", 34, 8400);
$ciudadanoYaneth->imprimirDatos();
$ciudadanoYaneth->impuestos();
echo "\n";


// Martín tiene un depósito de 2500, por lo que no debe pagar impuestos

$ciudadanoMartin = new Ciudadano("Martín", 45, 2500);
$ciudadanoMartin->imprimirDatos();
$ciudadanoMartin->impuestos();
echo "\n";
?>
