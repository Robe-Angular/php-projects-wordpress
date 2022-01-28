# Consultas de agrupamiento #
SELECT COUNT(titulo) AS 'Numero de entradas', categoria_id from entradas GROUP BY categoria_id;

# Consultas de agrupamiento con condiciones#
SELECT COUNT(titulo) AS 'Numero de entradas', categoria_id 
from entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 4;
/*
AVG Sacar la media
COUNT Contar número de elementos
MAX Devuelve el valor máxiomo del grupo
MIN Valor mínimo del grupo
SUM Sumar todo el contenido del grupo
*/
SELECT AVG(id) AS 'Media de entradas' from entradas;
SELECT MAX(id) AS 'MAXIMO ID',titulo from entradas;
SELECT SUM(id) AS 'SUMA ID',titulo from entradas;