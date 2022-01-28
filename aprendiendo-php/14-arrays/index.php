<?php
//Arrays
$pelicula = 'Batman';
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantantes = ['2pac','Drake','Jennifer López'];
$personas =[
    'nombre' => 'Víctor',
    'apellidos' => 'Robles',
    'web' => 'victorroblesweb.es'
];
var_dump($_GET);
echo ($personas['apellidos']);
var_dump($peliculas[0]);
var_dump($cantantes);

echo $peliculas[0];
echo '<br>';
echo $cantantes[2];
echo '<h1>Listado de películas</h1>';
echo '<ul>';

for($i = 0; $i < count($peliculas); $i++){
    echo '<li>'.$peliculas[$i].'</li>';
    
}
echo '</ul>';

//Recorrer foreach
echo '<ul>';
foreach ($cantantes as $index => $cantante) {
    echo '<li>'.($index+1).' - '.$cantante.'</li>';
}
echo '</ul>';

//Arrays multidimensionales
$contactos = array(
    array(
      'nombre'  => 'Antonio',
      'email'  => 'antonio@antonio.com',
    ),
    array(
      'nombre'  => 'Luis',
      'email'  => 'luis@luis.com',
    ),
    array(
      'nombre'  => 'Salvador',
      'email'  => 'salvador@salvador.com',
    )
);
foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}
?>

