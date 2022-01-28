<?php
class Usuario{
    
    const URL_COMPLETA = "http://localhost";
    public $email;
    public $password;
    
    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }


}

$usuario = new Usuario();
echo Usuario::URL_COMPLETA;
var_dump($usuario);