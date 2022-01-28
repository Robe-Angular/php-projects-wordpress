<?php
echo "<table border='1'>";
for($i = 1; $i <= 10; $i++){
    for($j = 1; $j <= 10; $j++){
        $producto = ($i * $j);
        if ($j==1){
            echo "<tr><td>Tabla del $i</td></tr>";
        }
        echo "<tr>"
        ."<td>$i X $j</td><td>$producto</td>"
        . "</tr>";
    }
}
echo "</table>";
?>
