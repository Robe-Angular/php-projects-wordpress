<?php
class Usuario{
    public $nombre;
    public $email;
    
    public function __construct(){
        $this->nombre = "Víctor Robles";
        $this->email = "Victor@victor.com";
        echo "Creando el objeto <br>";
    }
    
    public function __toString() {
        return "Hola,{$this->nombre}, estás registrado con {$this->email}<br>";
    }
    
    public function __destruct() {
        echo 'Destruyendo el objeto<br>';
    }
}

$usuario = new Usuario();
echo $usuario;

?>

