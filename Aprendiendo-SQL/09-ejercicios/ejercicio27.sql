/* 
27. Visualizar los nombres de los clientes y la cantidad de encargos realizados, incluyendo los que no hayan
realizado encargos
 */
SELECT cl.nombre, COUNT(en.id) FROM clientes cl
LEFT JOIN encargos en ON en.cliente_id = cl.id
GROUP BY cl.id;

SELECT cl.nombre, COUNT(en.id) FROM clientes cl
LEFT JOIN encargos en ON en.cliente_id = cl.id
GROUP BY 1;    