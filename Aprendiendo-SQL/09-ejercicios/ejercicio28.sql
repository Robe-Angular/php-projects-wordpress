/* 
28. Listar los vendedores y el número de clientes que tienen, y mostrar los que no tienen también.
 */
SELECT CONCAT(ve.nombre, ' ', ve.apellidos),COUNT(cl.id) FROM vendedores ve
LEFT JOIN clientes cl ON ve.id = cl.vendedor_id
GROUP BY 1;
