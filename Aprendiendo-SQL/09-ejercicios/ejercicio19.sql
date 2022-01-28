/* 
19. Obtener los vendedores con dos o más clientes
 */
SELECT ve.nombre, COUNT(cl.id) FROM vendedores ve 
INNER JOIN clientes cl ON ve.id = cl.vendedor_id
GROUP BY cl.vendedor_id HAVING COUNT(cl.id) >= 2;
