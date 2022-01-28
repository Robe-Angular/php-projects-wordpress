<?php
namespace MisClases;
class Categoria{
    public $nombre;
    public $descripcion;
    
    public function __construct() {
        $this->nombre = "Accion";
        $this->email = "Categoría enfocada a las reviews de videojuegos de acción";
        
    }
}