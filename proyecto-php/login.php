<?php

//iniciar la sesión y la conexión a la bd
require_once 'includes/conexion.php';

//Recoger los datos del formulario
if(isset($_POST)){
    //Borrar sesión
    if(isset($_SESSION['error_login'])){
        unset($_SESSION['error_login']);
    }
    
    //Recoger datos
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    
    //Consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email';";
    $login = mysqli_query($db, $sql);
    if(!empty($login) && $login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);
        //Comprobar la contraseña
        $verify = password_verify($password, $usuario['password']);
        
        if($verify){
            //Utilizar una sesión para guardar los datos delusuario logueado
            $_SESSION['usuario'] = $usuario;
        } else {
            //Si algo falla enviar una sesión con el fallo
            $_SESSION['error_login'] = "Login incorrecto";
        }
    }else{
        //Mensaje de error
        echo mysqli_error($db);
       $_SESSION['error_login'] = "Login incorrecto";
    }
}
//Redirigir al Índex
header('Location: index.php');

