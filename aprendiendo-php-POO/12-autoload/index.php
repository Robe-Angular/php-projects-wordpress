<?php
//require_once 'clases/MisClases/usuario.php';
//require_once 'clases/MisClases/categoria.php';
//require_once 'clases/MisClases/entrada.php';
require_once 'autoload.php';
/*

$usuario = new Usuario();
echo $usuario->nombre.'<br>';
echo $usuario->email.'<br>';
$categoria = new Categoria();
echo $categoria->nombre.'<br>';
 * 
 */
//Espacios de nombre y paqueter
//use MisClases\Usuario, MisClases\Categoria,MisClases\Entrada;
use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;
    
    public function __construct() {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->categoria = new Entrada();
    }
    public function getUsuario() {
        return $this->usuario;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getEntrada() {
        return $this->entrada;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setEntrada($entrada) {
        $this->entrada = $entrada;
    }
    
    public function informacion(){
        echo __NAMESPACE__;
    }


}

$usuario = new UsuarioAdmin();
var_dump($usuario);
$usuario->informacion();

$principal = new Principal();
$principal->informacion();
$metodos = get_class_methods($principal);

$busqueda = array_search('setApellidos', $metodos);
var_dump($busqueda);

//Comprobar si existe una clase
$clase = @class_exists('PanelAdministrador\Usuar2io');
if($clase){
    echo "<h1>La calse sí existe</h1>";
}else{
    echo "<h1>La calse no existe</h1>";
}
?>
