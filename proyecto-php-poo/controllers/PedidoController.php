<?php
require_once 'models/Pedido.php';
require_once 'models/Producto.php';
class pedidoController{
    public function hacer(){
        require_once 'views/pedido/hacer.php';
    }
    public function add() {
        if(isset($_SESSION['identity'])){
            $usuario_id = $_SESSION['identity']->id;
            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
            
            $stats = Utils::statsCarrito();
            $coste= $stats['total'];
            if($provincia && $localidad && $direccion){
            //Guardar en la base de datos
                $pedido = new Pedido;
                $pedido->setUsuario_id($usuario_id);
                $pedido->setProvincia($provincia);
                $pedido->setLocalidad($localidad);
                $pedido->setDireccion($direccion);
                $pedido->setCoste($coste);
                
                $save = $pedido->save();
                
                //Guardar linea pedido
                $save_linea = $pedido->save_linea();
                
                $producto_stock = new Producto();
                $save_stock = $producto_stock->save_stock();
                
                if($save && $save_linea && $save_stock){
                    $_SESSION['pedido']='complete';
                }else{
                    $_SESSION['pedido']='failed';
                }
            }else{
                $_SESSION['pedido']='failed';
            }
            header('Location:'.base_url.'pedido/confirmado');
        }else{
            //Redirigir
            header('Location:'.base_url);
        }
    }
    
    public function confirmado(){
        if (isset($_SESSION['identity'])){
            $identity = $_SESSION['identity'];
            
            $pedido = new Pedido();
            $pedido->setUsuario_id($identity->id);
            $pedido = $pedido->getOneByUser();
            
            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductosByPedido($pedido->id);
        }
        require_once 'views/pedido/confirmado.php';
    }
    
    public function mis_pedidos(){
        Utils::isIdentity();
        $usuario_id = $_SESSION['identity']->id;
        $pedido = new Pedido();
        
        //Sacar los pedidos del usuario
        $pedido->setUsuario_id($usuario_id);
        $pedidos = $pedido->getAllByUser();
//        $prueba2 = $pedidos->fetch_object();
//        var_dump($prueba2);
//        die();
        require_once 'views/pedido/mis_pedidos.php';
    }
    
    public function detalle() {
        Utils::isIdentity();
        
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            //Sacar el pedido
            $pedido = new Pedido();
            $pedido->setid($id);
            $pedido = $pedido->getOne();
            
            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductosByPedido($id);
            
            $pedido_usuario = new Pedido();
            $usuario = $pedido_usuario->getUserByPedido($id);
            if($usuario->id != $_SESSION['identity']->id && !isset($_SESSION['admin'])){
                header('Location:'.base_url);
            }
            
            require_once 'views/pedido/detalle.php';
        }else{
            header('Location:'.base_url.'pedido/mis_pedidos');
        }
    }
    
    public function gestion() {
        Utils::isAdmin();
        $gestion = true;
        
        $pedido = new pedido;
        $pedidos = $pedido ->getAll();
        require_once 'views/pedido/mis_pedidos.php';
    }
    
    public function estado() {
        Utils::isAdmin();
        if(isset($_POST['pedido_id']) && isset($_POST['estado'])){
            //Recojo datos del formulario
            $id = $_POST['pedido_id'];
            $estado = $_POST['estado'];
            //Update del pedido
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedido->setEstado($estado);
            $pedido->edit();
            
            header('Location:'.base_url.'pedido/detalle&id='.$id);
        }else{
            header('Location:'.base_url);
        }
    }
}

