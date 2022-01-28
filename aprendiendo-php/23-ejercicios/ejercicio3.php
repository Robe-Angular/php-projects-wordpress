<?php
$resultado = false;
if(isset($_POST['numero1']) && isset($_POST['numero2'])){
    $resultado = false;
    if(isset($_POST['sumar'])){
        $resultado = 'El resultado es: '.($_POST['numero1'] + $_POST['numero2']);
    }
    if(isset($_POST['restar'])){
        $resultado = 'El resultado es: '.($_POST['numero1'] - $_POST['numero2']);
    }
    if(isset($_POST['multiplicar'])){
        $resultado = 'El resultado es: '.($_POST['numero1'] * $_POST['numero2']);
    }
    if(isset($_POST['dividir'])){
        $resultado = 'El resultado es: '.($_POST['numero1'] / $_POST['numero2']);
    }
    
}
?>
<!DOCTYPE>
<html lang="es">
    <head>
        <title>Calculadora PHP</title>
    </head>
    <body>
        <h1>Calculadora PHP</h1>
        <form action="" method="POST">
            <label for="numero1">Numero 1:</label><br>
            <input type="number" name="numero1"><br>
            <label for="numero2">Numero 2:</label><br>
            <input type="number" name="numero2"><br>
            <p>
                <input type="submit" value="sumar" name="sumar">
                <input type="submit" value="restar" name="restar">
                <input type="submit" value="multiplicar" name="multiplicar">
                <input type="submit" value="dividir" name="dividir">
            </p>
        </form>
        <?php
        if($resultado != false){
            echo $resultado;
        }
        ?>
    </body>
</html>