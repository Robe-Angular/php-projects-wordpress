/* 
7. Obtener un listado con los encargos realizados por el cliente 'Frutería antonia'
 */
SELECT e.id AS 'n° Encargo', cantidad, c.nombre, co.modelo, e.fecha from encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id  = e.coche_id
WHERE e.cliente_id IN
(select id FROM clientes WHERE nombre = 'Frutería antonia');
