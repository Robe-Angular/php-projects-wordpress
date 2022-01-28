/* 
21. Obtener los nombres y ciudades de los clientes con encargos de 3 o más unidades
 */
SELECT nombre, ciudad FROM clientes cl
INNER JOIN encargos en ON cl.id = en.cliente_id
WHERE en.cantidad >= 3;

SELECT nombre, ciudad FROM clientes WHERE id IN
    (SELECT cliente_id FROM encargos WHERE cantidad >= 3);
