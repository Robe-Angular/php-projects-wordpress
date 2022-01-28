/* 
16. Listado de clientes atendidos por el vendedor 'David López'
 */

SELECT * FROM clientes where vendedor_id IN 
(SELECT id FROM vendedores WHERE nombre ='David' && apellidos = 'López');
