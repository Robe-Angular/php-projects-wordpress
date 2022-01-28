<?php
$nombre = 'Victor Robles';
var_dump($nombre);
echo date('D-j-M-Y')."<br>";

echo time()."<br>";
echo "Raíz cuadrada de 10: ".sqrt(10)."<br>";
echo "Número aleatorio entre 10 y 40: ". rand(10,40)."<br>";
echo "Número pi: ".pi()."<br>";

echo "redondeo de raíz de 10: " .round(sqrt(10),5)."<br>";

//más funciones
//Detectar tipos
echo gettype(sqrt(10))."<br>";
if(is_string($nombre)){
    echo "Esa variable es un string"."<br>";
}
if(!is_float($nombre)){
    echo "Esa variable no es un número con decimales"."<br>";
}
//Comprobar si existe una variable
if(isset($nombre)){
    echo "la variable existe".'<br>';
}else{
    echo "la variable no existe".'<br>';
}
//Limpiar espacios
$frase = trim('    Mi contenido   ');
echo "<p>$frase</p>";
var_dump($frase);
//Eliminar variables o índices de arrays
$year = 2020;
var_dump($year);
unset($year);
//Empty
$texto = "  ";
echo '<p>';
if(empty(trim($texto))){
    echo "La variable texto está vacía";
} else {
    echo "La variable texto tiene contenido";
}
echo '</p>';
//Contar carácteres de una cadena
$cadena = '12345';
echo strlen($cadena).'<br>';
$frase = 'La vida es bella';
echo strpos($frase, "dsdsdi").'<br>';
//reemplazar
echo str_replace('vida','moto',$frase).'<br>';
//Mayúsculas y minúsculas
echo strtolower($frase).'<br>';
echo strtoupper($frase).'<br>';
?>