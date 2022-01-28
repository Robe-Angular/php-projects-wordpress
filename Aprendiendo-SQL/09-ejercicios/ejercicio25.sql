/* 
25. Obtener una lista de los nombres de los clientes con el importe de sus encargos
acomulados
 */
SELECT cl.nombre, SUM(co.precio * en.cantidad) AS 'Importe total', SUM(en.cantidad) AS 'Unidades vendidas' FROM clientes cl
INNER JOIN encargos en ON en.cliente_id = cl.id
INNER JOIN coches co ON en.coche_id = co.id
GROUP BY cliente_id;

SELECT cl.nombre, SUM(co.precio * en.cantidad) AS 'Importe total', SUM(en.cantidad) AS 'Unidades vendidas' FROM clientes cl
INNER JOIN encargos en ON en.cliente_id = cl.id
INNER JOIN coches co ON en.coche_id = co.id
GROUP BY cl.nombre
ORDER BY 3;
