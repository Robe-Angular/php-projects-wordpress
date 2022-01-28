<?php
//Conectar a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'phpmysql');

//Comprobar si la conexión es correcta

if(mysqli_connect_errno()){
    echo 'La conexión a la base de datos mysql ha fallado'.mysqli_connect_error();
}else{
    echo 'Conexión realizada correctamente';
}

//Consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta SELECT desde PHP
$query= mysqli_query($conexion, "SELECT * FROM notas");

while($nota = mysqli_fetch_assoc($query)){
    //var_dump($nota);
    echo '<h2>'.$nota['titulo'].'</h2>'.'<br>';
    echo $nota['descripcion'].'<br>';
}
echo '<hr>';
//Insertar en la base de datos
$sql = "INSERT INTO notas VALUES(null, 'Nota desde PHP', 'Esto es una nota de PHP', 'green')";
$insert = mysqli_query($conexion, $sql);
if($insert){
    echo 'Datos insertados correctamente'.'<hr>';
}else{
    echo 'Error: '.mysqli_error($conexion);
}
