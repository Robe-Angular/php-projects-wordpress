/* 
Consulta multitabla:
Consultar varias tablas en una sola sentencia
*/
# Mostrar las entradas con el nombre del usuario, el nombre del autor y la categoría #

SELECT  e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoría' 
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

# INNER JOIN #

SELECT  e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoría'
    FROM entradas e
        INNER JOIN usuarios u ON e.usuario_id = u.id
        INNER JOIN categorias c ON e.categoria_id = c.id;

# Mostrar el nombre de las categorias y al lado cuantas entradas tienen #
SELECT nombre, COUNT(e.id) FROM categorias c, entradas e
        WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

SELECT nombre, COUNT(e.id) FROM categorias c
LEFT JOIN entradas e ON  e.categoria_id = c.id GROUP BY e.categoria_id;

SELECT nombre, COUNT(e.id) FROM entradas e
RIGHT JOIN categorias c ON  e.categoria_id = c.id GROUP BY e.categoria_id;

SELECT nombre, COUNT(e.id) FROM entradas e
INNER JOIN categorias c ON  e.categoria_id = c.id GROUP BY e.categoria_id;
# Mostrar el email de los usuarios y al lado cuántas entradas tienen #

SELECT u.email, COUNT(titulo) FROM usuarios u, entradas e
    WHERE e.usuario_id = u.id GROUP BY e.usuario_id;
