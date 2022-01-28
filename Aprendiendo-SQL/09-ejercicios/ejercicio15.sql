/* 
15. Mostrar los clientes con mayor número de pedidos han hecho y mostrar cuántos
hicieron
 */
SELECT c.nombre, COUNT(e.id) FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;
