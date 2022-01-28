/* 
24. Listar los encargos con el nombre del coche, nombre del cliente y el nombre 
de la ciudad, cuando sean de Barcelona
 */

SELECT en.id, co.modelo, cl.nombre, cl.ciudad FROM encargos en
INNER JOIN coches co ON en.coche_id = co.id
INNER JOIN clientes cl ON en.cliente_id = cl.id AND cl.ciudad = 'Barcelona';

SELECT en.id, co.modelo, cl.nombre, cl.ciudad FROM encargos en
INNER JOIN coches co ON en.coche_id = co.id
INNER JOIN clientes cl ON en.cliente_id = cl.id
WHERE cl.ciudad = 'Barcelona';