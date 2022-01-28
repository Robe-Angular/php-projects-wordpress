/* 
11. Visualizar todos los cargos de los vendedores y el número de los vendedores que estpan en el cargo
 */
SELECT cargo,count(id) FROM vendedores GROUP BY fecha;
SELECT cargo,count(id) FROM vendedores GROUP BY cargo ORDER BY COUNT(ID) DESC;