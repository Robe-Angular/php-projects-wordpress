/*
Subconsultas:
-Son consultas que se ejecutan dentro de otras.
-Consiste en utilizar los resultados de las subconsultas para operar en la 
consulta principal
-Jugando con  las FK (foreign keys)
*/
SELECT * FROM usuarios WHERE id IN (SELECT user_id from entradas);

# Sacar los usuarios que tengan una entrada que su título hable de GTA #
SELECT nombre, apellidos FROM usuarios WHERE id 
    IN (SELECT usuario_id FROM entradas WHERE titulo LIKE '%GTA%' );

# Sacar todas las entradas de la categoría acción utilizando su nombre #
SELECT categoria_id,titulo FROM entradas  WHERE categoria_id
    IN(SELECT id FROM categorias WHERE nombre = 'Acción');

# Mostrar las categorías con 3 o más de tres entradas #
SELECT nombre FROM categorias WHERE id
    IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >= 3);
# Mostrar los usuarios que crearon una entrada el jueves #
SELECT * FROM usuarios WHERE id 
    IN(SELECT usuario_id FROM entradas WHERE DAYOFWEEK(FECHA) = 5);

# Mostrar el nombre de usuario que tenga más entradas #
SELECT CONCAT(nombre,' ',apellidos) AS 'El usuario con más entradas'  FROM usuarios WHERE id 
    = (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

# Mostrar categorías sin entradas #
SELECT * FROM categorias WHERE id 
    NOT IN (SELECT categoria_id FROM entradas);
