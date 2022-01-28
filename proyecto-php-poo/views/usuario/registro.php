<h1>Registrarse</h1>
<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete') :?>
<strong class="alert-green">Registro completado correctamente</strong>
    <?php
        $form_array = ['form-nombre','form-apellidos','form-email','form-password'];
        foreach($form_array as $campo){
            $_SESSION[$campo]='';
        }
    ?>  
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
<strong class="alert-red">Registro fallido, introduce bien los datos</strong>
<?php else: ?>
<?php
$form_array = ['form-nombre','form-apellidos','form-email','form-password'];
        foreach($form_array as $campo){
            $_SESSION[$campo]='';
        
        }
?>
<?php endif; ?>
<?php Utils::deleteSession('register') ;?>


<form action="<?=base_url;?>usuario/save" method="POST"> 
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="<?=$_SESSION['form-nombre']?>" required>
    
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" value="<?=$_SESSION['form-apellidos']?>" required>
    
    <label for="email">Email</label>
    <input type="email" name="email" value="<?=$_SESSION['form-email']?>" required>
    
    <label for="password">Contraseña</label>
    <input type="password" name="password" value="<?=$_SESSION['form-password']?>" required>
    
    <input type="submit" value="Registrarse">
        
</form>
