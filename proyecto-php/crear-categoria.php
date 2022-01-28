<?php require_once 'includes/redireccion.php';?>
<?php require_once 'includes/cabecera.php';?>
<!--Barra lateral-->
<?php require_once 'includes/lateral.php';?>
<!--Caja principal-->
<div id="principal">
    <h1>Crear categorías</h1>
    <p>
        Añade nuevas categorías al blog para que los usuarios puedan usarlas al crear sus entradas.
    </p>
    <form action="guardar-categoria.php" method="POST">
        <label for="nombre">Nombre de la categoría: </label>
        <input type="text" name="nombre">
        
        <input type="submit" value="Guardar"/>
    </form>
</div>
<!--Footer-->
<?php require_once 'includes/pie.php';?>