<?php
require_once 'models/producto.php';
class carritoController{
    public function index(){
        if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1){
        $carrito = ($_SESSION['carrito']);
        }
        require_once 'views/carrito/index.php';
        
    }
    
    public function add() {
        if(isset($_GET['id'])){
            $producto_id = $_GET['id'];
        }else{
            header('Location:'.base_url);
        }
            
            
        if(isset($_SESSION['carrito'])){
            $counter = 0;
//            for($indice = 0; $indice < count($_SESSION['carrito']); $indice++ ){
//                if($_SESSION['carrito'][$indice]['id_producto'] == $producto_id){
//                    $_SESSION['carrito'][$indice]['unidades']++;
//                    var_dump($_SESSION['carrito'][$indice]['producto']->id);
//                    die();
//                    $counter++;
//                }
//            }
            
            foreach($_SESSION['carrito'] as $indice => $elemento){
                if($elemento['id_producto'] == $producto_id){
                    $_SESSION['carrito'][$indice]['unidades']++;
                    $producto = new Producto();
                    $producto->setId($producto_id);
                    $producto = $producto->getOne();
                    
                    
                    
                    $_SESSION['carrito'][$indice]['producto'] = $producto;
                    if($_SESSION['carrito'][$indice]['unidades'] >= $_SESSION['carrito'][$indice]['producto']->stock){
                       $_SESSION['carrito'][$indice]['unidades'] = $_SESSION['carrito'][$indice]['producto']->stock;
                    }
                    
                    if($_SESSION['carrito'][$indice]['producto']->stock == 0){
                       $_SESSION['carrito'][$indice]['value_stock_on_data_base'] = false;
                    }
                    $counter++;
                }
            }
        }
        
        if(!isset($counter) || $counter == 0){
            
            //Conseguir Producto
            $producto = new Producto();
            $producto->setId($producto_id);
            $producto = $producto->getOne();
            $unidades = $producto->stock == 0 ? 0 : 1;
            $value_stock_on_data_base = $producto->stock == 0 ? false : true;
            //Añadir al carrito
            if(is_object($producto)){
                $_SESSION['carrito'][] = array(
                    "id_producto" => $producto->id,
                    "precio" => $producto->precio,
                    "unidades" =>$unidades,
                    "value_stock_on_data_base" => $value_stock_on_data_base,
                    "producto" => $producto
                );
                
            }   
            
        }
        header('Location:'.base_url.'carrito/index');
    }
    
    public function delete(){
        if(isset($_GET['index'])){
            $index = $_GET['index'];
            unset($_SESSION['carrito'][$index]);
        }
        header('Location:'.base_url.'carrito/index');
    }
    
    public function up(){
        if(isset($_GET['index'])){
            $index = $_GET['index'];
            $producto_id = $_SESSION['carrito'][$index]['producto']->id;
            $producto = new Producto();
            $producto->setId($producto_id);
            $producto = $producto->getOne();
            $_SESSION['carrito'][$index]['producto']=$producto;
            
            $_SESSION['carrito'][$index]['unidades']++;
            
            if($_SESSION['carrito'][$index]['unidades'] >= $_SESSION['carrito'][$index]['producto']->stock){
               $_SESSION['carrito'][$index]['unidades'] = $_SESSION['carrito'][$index]['producto']->stock;
            }
            
            if($_SESSION['carrito'][$index]['producto']->stock == 0){
                $_SESSION['carrito'][$index]['value_stock_on_data_base'] = false;
            }
        }
        header('Location:'.base_url.'carrito/index');
    }
    
    public function down(){
        if(isset($_GET['index'])){
            $index = $_GET['index'];
            $producto_id = $_SESSION['carrito'][$index]['producto']->id;
            $producto = new Producto();
            $producto->setId($producto_id);
            $producto = $producto->getOne();
            $_SESSION['carrito'][$index]['producto']=$producto;
            
            $_SESSION['carrito'][$index]['unidades']--;
            
            if($_SESSION['carrito'][$index]['unidades'] >= $_SESSION['carrito'][$index]['producto']->stock){
               $_SESSION['carrito'][$index]['unidades'] = $_SESSION['carrito'][$index]['producto']->stock;
            }
            
            if($_SESSION['carrito'][$index]['producto']->stock == 0){
                $_SESSION['carrito'][$index]['value_stock_on_data_base'] = false;
            }
            if($_SESSION['carrito'][$index]['unidades'] == 0){
            
                unset($_SESSION['carrito'][$index]);
            };
        }
        header('Location:'.base_url.'carrito/index');
    }
    
    public function delete_all(){
        unset($_SESSION['carrito']);
        header('Location:'.base_url.'carrito/index');
    }
    
}


