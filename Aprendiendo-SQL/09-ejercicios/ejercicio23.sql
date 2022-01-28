/* 
23. Listar todos los encargos realizados con la marca del coche y el nombre del cliente
 */
SELECT en.id, en.cantidad, co.modelo, cl.nombre FROM encargos en
INNER JOIN  coches co ON en.coche_id = co.id
INNER JOIN  clientes cl ON en.cliente_id = cl.id;
