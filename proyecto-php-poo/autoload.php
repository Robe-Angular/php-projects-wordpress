<?php
function controllers_autoload($class){
    $class_rep = str_replace('\\','/',$class);
    require_once 'controllers/'.$class_rep.'.php';
}
spl_autoload_register('controllers_autoload');