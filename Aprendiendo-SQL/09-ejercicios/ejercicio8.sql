/* 
8. Visualizar todos los coches en cuya marca exista la letra a y que el modelo
 empiece con f
 */
SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'F%';
