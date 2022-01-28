<h1>Hola MUNDO PHP POO</h1>
<?php

/* 
Programación Orientada a objetos en PHP POO
 */

//Definir una clase (molde para crear objetos de tipo coche con características parecidas)
class Coche{
    //Atributos o propiedades(variables)
    public $color = 'rojo';
    public $marca = 'Ferrari';
    public $modelo = 'Aventador';
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;
    
//Métodos: son acciones que hace el ojeto
    public function getColor(){
        return $this->color;
    }
    
    public function setColor($color){
        $this->color = $color;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function acelerar(){
        $this->velocidad++;
    }
    
    public function frenar(){
        $this->velocidad--;
    }
    
    public function getVelocidad(){
        return $this->velocidad;
    }
}
// Fin definición de la clase

//CRear objeto o instanciar la clase

$coche = new Coche();

//Usar los métodos

echo $coche->getVelocidad().'<br>';

echo "El color del coche es ".$coche->getColor().'<br>';
$coche->setColor('amarillo');
echo "El color del coche es ".$coche->getColor().'<br>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad del coche: ".$coche->getVelocidad();

$coche2 = new Coche();
$coche2 ->setColor('verde');
$coche2 ->setModelo('Gallardo');


var_dump($coche);
var_dump($coche2);