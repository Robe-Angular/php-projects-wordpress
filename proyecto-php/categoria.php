<?php require_once 'includes/conexion.php';?>
<?php require_once 'includes/helpers.php';?>
<?php
    $categoria_actual = conseguirCategoria($db, $_GET['id']);
    if(!isset($categoria_actual['id'])){
        header('Location: index.php');
    }
?>
<?php require_once 'includes/cabecera.php';?>
<!--Barra lateral-->
<?php require_once 'includes/lateral.php';?>
<!--Caja principal-->
<div id="principal">
    <h1>Entradas de <?=$categoria_actual['nombre'];?></h1>
    <?php
        $entradas = conseguirEntradas($db,null,$_GET['id']);
        
        if(!empty($entradas)):
            while($entrada = mysqli_fetch_assoc($entradas)):
    ?>
                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2><?=$entrada['titulo'];?></h2>
                        <span class="fecha"><?=$entrada['nombre'].' | '.$entrada['fecha']?></span>
                        <p>
                            <?=substr($entrada['descripcion'], 0, 180).'...';?>
                        </p>
                    </a>
                </article>
    <?php
            endwhile;
        else:
    ?>
            <div class="alerta">No hay entradas en esta categoria</div>    
    <?php endif; ?>

</div>
<!--Fin Principal-->

<!--Pie de página-->
<?php require_once 'includes/pie.php';?>

