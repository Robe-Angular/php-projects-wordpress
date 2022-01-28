/* 
 26. Sacar vendedores que tienen jefe y sacar el niombre del jefe
 */
SELECT CONCAT(ve1.nombre,' ', ve1.apellidos) AS 'nombre completo del vendedor', ve2.nombre AS 'jefe' FROM vendedores ve1 
INNER JOIN vendedores ve2 ON ve1.jefe = ve2.id;

