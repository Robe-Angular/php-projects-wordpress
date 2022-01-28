<?php
class NotaController{
    public function listar(){
        require_once 'models/nota.php';
        //lógica controlador
        $nota = new Nota();
        
        $notas = $nota->conseguirTodos('notas');
        //vista
        require_once 'views/nota/listar.php';
    }
    public function crear(){
        require_once 'models/nota.php';
        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota número 4 desde PHP MVC");
        $nota->setDescripcion("La vida es bella");
        $guardar = $nota->guardar();
        //echo $nota->db->error;
        //die();
        
        header("Location:index.php?controller=Nota&action=listar");
    }
    
    public function borrar(){
        
    }
}
