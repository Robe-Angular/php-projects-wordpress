<?php
    define('nombre', 'Victor Robles');
    define('web','victorroblesweb.es');
    $web = 'victorroblesweb.es/academy';
    $web = 'victorroblesweb.es/academy/cursos';
    
    echo '<h1>'.nombre.'</h1>';
    echo '<h1>'.web.'</h1>';
    echo '<h1>'.$web.'</h1>';
    
    //Constantes predefinidas
    function holaMundo(){
        echo __FUNCTION__;
    }
    
    holaMundo();
?>
