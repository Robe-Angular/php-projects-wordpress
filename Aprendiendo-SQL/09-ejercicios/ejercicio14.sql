/* 
14. visualizar las unidades totales vendidas de cada coche a cada cliente.
    Mostrando el nombre del producto, número de cliente y la suma de unidades
 */
SELECT co.modelo AS 'Coche', cl.nombre AS 'cliente', SUM(e.cantidad) AS 'Unidades' FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes cl ON cl.id = e.cliente_id
GROUP BY e.coche_id, e.cliente_id;
