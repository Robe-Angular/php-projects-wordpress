<?php
function validarEmail($email){
    $status = 'No válido';
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
            $status = 'Válido';
    }
    return $status;       
}

if(isset($_GET['email'])){
    echo validarEmail($_GET['email']);
}else{
    echo 'pasa por get un email';
}


?>
