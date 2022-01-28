/* 
22. Mostrar listado de clientes, número de cliente y nombre, número de vendedor y su nombre
 */
SELECT cl.nombre AS 'Cliente', cl.id AS 'Número de cliente', ve.id AS 'Número de vendedor', CONCAT(ve.nombre,' ',VE.APELLIDOS) AS 'Vendedor' FROM clientes cl
INNER JOIN vendedores ve ON cl.vendedor_id = ve.id;
