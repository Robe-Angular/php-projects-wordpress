<?php
echo '<h1>Hola qué tal</h2>';
if (isset($_POST['titulo']) && isset($_POST['descripcion'])){
    echo "<h1>".$_POST['titulo']."</h1>";
    echo "<h2>".$_POST['descripcion']."</h2>";
}
?>
