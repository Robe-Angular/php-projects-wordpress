<?php
function muestraNombres(){
    echo "Víctor Robles <br>";
    echo "Antonio Robles <br>";
    echo "Miguel Robles <br>";
    echo "Jesús Robles <hr>";
   
}

function tabla($numero){
   echo "<h3>Tabla de multiplicar del número: $numero</h3>";
   for($i =1; $i <= 10; $i++){
       $operacion = $numero * $i;
       echo "$numero x $i = $operacion <br>";
   }
}
/*
for($i = 1; $i <= 10; $i++){
    tabla($i);
}
*/
/*
if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo "No hay número para multiplicar";
}
*/
/*
muestraNombres();
 */
function calculadora($numero1, $numero2, $negrita = false){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    
    $cadena_texto = "";
    if($negrita){
        $cadena_texto .= "<h1>";
    }
    $cadena_texto .= "Suma: $suma <br>"
        ."Resta: $resta <br>"
        ."Multiplicación: $multiplicacion <br>" 
        ."División: $division <br>"
        ."<hr>";
    if($negrita){
        $cadena_texto .= "</h1>";
    }
    var_dump($cadena_texto);
    return $cadena_texto;
        
}

echo calculadora(10,30);

//Ejemplo 4
function getNombre($nombrefunction){
    $texto = "El nombre es: $nombrefunction";
    return $texto;
}
function getApellidos($apellidosfunction){
    $texto = "Los apellidos son: $apellidosfunction";
    return $texto;
}

function devuelveElNombre($nombre, $apellidos){
    $texto = getNombre($nombre)
            ."<br/>"
            .getApellidos($apellidos)
            .'<br>';
    return $texto;
}
echo devuelveElNombre('Víctor', 'Robles');
echo getApellidos('De la Cruz');
?>

