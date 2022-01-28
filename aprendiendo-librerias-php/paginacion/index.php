<?php
    
    require_once '../vendor/autoload.php';
    
    //Conexión bd
    $conexion = new mysqli("localhost","root","","notas_master");
    $conexion->query("SET NAMES 'utf8'");
    
    //Consultar a la página
    $consulta = $conexion->query("SELECT * FROM notas");
    $numero_elementos = $consulta->num_rows;
    $numero_elementos_pagina = 5;
    
    //Hacer paginacion
    $pagination = new Zebra_Pagination();
    
    //Némero total de elementos a paginar
    $pagination->records($numero_elementos);
    
    //Número  de elementos por página
    $pagination->records_per_page($numero_elementos_pagina);
    
    $page = $pagination->get_page();
    $empieza_aqui = ($page-1)*$numero_elementos_pagina;
    
    $sql = "SELECT * FROM notas LIMIT $empieza_aqui,$numero_elementos_pagina";
    
    $notas = $conexion->query($sql);
    echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
    
    while($nota = $notas->fetch_object()){
        echo "<h1>{$nota->titulo}</h1>"
        . "<h3>{$nota->descripcion}</h3><hr>";
    }
$pagination->render();
?>
