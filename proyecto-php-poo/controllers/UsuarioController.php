<?php
require_once 'models/Usuario.php';
class usuarioController{
    public function index(){
        echo "Controlador Usuarios, Acción index";
    }
    
    public function registro(){
        
        require_once 'views/usuario/registro.php';
    }
    
    public function save(){
        if(isset($_POST)){
            $nombre = isset($_POST['nombre'])? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos'])? $_POST['apellidos'] : false;
            $email = isset($_POST['email'])? $_POST['email'] : false;
            $password = isset($_POST['password'])? $_POST['password'] : false;
            
            //Session para errores
            $_SESSION['form-nombre']=$nombre;
            $_SESSION['form-apellidos']=$apellidos;
            $_SESSION['form-email']=$email;
            $_SESSION['form-password']=$password;
            
            if($nombre && preg_match("/[a-zA-Z ]+$/",$nombre) && $apellidos && preg_match("/[a-zA-Z ]+$/",$apellidos) && $email && filter_var($email, FILTER_VALIDATE_EMAIL)  && $password){
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);

                $save = $usuario->save();
                if($save){
                    $_SESSION['register'] = 'complete';
                }else{
                    $_SESSION['register'] = 'failed';
                }
            }else{
                $_SESSION['register'] = 'failed';
            }           
        } else {
            $_SESSION['register'] = 'failed';
        }
        header("Location:".base_url.'usuario/registro');
    }
    
    public function login(){
        if(isset($_POST)){
            //Identificar al usuario
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
           
            //Consulta a la base de datos
            $identity = $usuario->login();
            
            
            //Crear una sesión
            if($identity && is_object($identity)){
                $_SESSION['identity'] = $identity;
                
                if($identity->rol == 'admin'){
                    $_SESSION['admin'] = true;
                }
            }else{
                $_SESSION['error_login'] = 'Identificación fallida!!';
            }
        }
        header('Location:'.base_url);
    }
    
    public function logout() {
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }
        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }
        header('Location:'.base_url);
    }
}
