<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>
            Imprimir por pantalla - Master en PHP
        </title>
    </head>
    <body>
        <h1>Master en PHP - <?php echo 'vitorroblesweb.es'; ?></h1>
        
        <?="Bienvenido al curso más grande de PHP"?>
        
            <?php
                //Titular de la seccón
                echo '<h3>Listado de videojuegos</h3>';
                
                /*
                    Esta es una lista de 
                    videojuegos
                    moderno
                */
                echo "<ul>" 
                ."<li>GTA</li>"
                ."<li>FIFA</li>"
                ."<li>MArio Bros</li>"
                ."</ul>";
                
                /*
                echo '<br>HOLA HOLA HOLA</br>';
                */
               //Párrafo explicativo
                echo '<p> Esta es toda'.' - '.' lista de juegos</p>';
                    
                    
            ?>
    </body>
</html>

