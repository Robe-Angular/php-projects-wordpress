/* 
18. Listar los clientes que han hecho algún encargo del coche 'Mercedes Ranchera'
 */
SELECT nombre FROM clientes WHERE id IN
    (SELECT cliente_id FROM encargos WHERE coche_id IN
        (SELECT id FROM coches WHERE modelo LIKE '%Mercedes Ranchera%'));

