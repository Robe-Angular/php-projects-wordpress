<?php

trait Utilidades {
    public function mostrarNombre() {
        echo '<h1>El nombre es '.$this->nombre.'</h1>';
    }
}

class Coche{
    public $nombre;
    public $marca;
    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;
    use Utilidades;
}

class VideoJuego{
    public $nombre;
    public $year;
    use Utilidades;
}

$coche = new Coche();
$coche->nombre = 'Ferrari Testarosa';
$persona = new Persona();
$persona->nombre = 'Antonio Machado';
$videojuego = new VideoJuego();
$videojuego->nombre = 'GTA 4';

$coche->mostrarNombre();
$videojuego->mostrarNombre();
$persona->mostrarNombre();