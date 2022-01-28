/* 
30. Mostrar los datos del vendedor con más antiguedad en el concesionario
 */
SELECT * FROM vendedores ORDER BY fecha LIMIT 1;


# 30plus: Obtener los coches con más unidades vendidas #
SELECT * FROM coches WHERE id =
    (SELECT coche_id FROM encargos GROUP BY coche_id ORDER BY SUM(cantidad) DESC LIMIT 1);

SELECT * FROM coches WHERE id in
    (SELECT coche_id FROM encargos WHERE cantidad IN
        (SELECT MAX(cantidad) FROM encargos));