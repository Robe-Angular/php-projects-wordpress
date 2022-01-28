<?php
class Persona{
    private $nombre;
    private $edad;
    private $ciudad;
   
    public function __construct($nombre, $edad, $ciudad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }
    
    public function __call($name,$arguments){
        $prefix_metodo = substr($name,0 ,3);
        
        if($prefix_metodo == 'get'){
            $nombre_metodo = substr(strtolower($name),3);
            
            if(isset($this->$nombre_metodo)){
                return $this->$nombre_metodo."<br>";
            }else{
                return "El método $nombre_metodo no existe <br>";
            }
            
        } else {
            return "El método que estás invocando no existe<br>";
        }
        
    }
}
$persona = new Persona("paco", 66, "MAdrid");

echo $persona->getNombre();
echo $persona->getEdad();
echo $persona->getCiudad();
echo $persona->getHola();