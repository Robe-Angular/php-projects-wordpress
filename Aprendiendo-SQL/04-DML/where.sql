# Consulta con una condición #
# Comodín like: % , _ #
SELECT * FROM usuarios WHERE email = 'admin@admin.com';
SELECT nombre,apellidos FROM usuarios WHERE YEAR(fecha) = 2019;
SELECT nombre,apellidos FROM usuarios WHERE YEAR(fecha) = 2019 AND MONTH(fecha) != 5;
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = '1234';
SELECT * FROM usuarios WHERE YEAR(fecha) % 2 = 0;
SELECT UPPER(nombre),apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND MONTH(fecha) < 8;
select * from usuarios ORDER BY fecha asc;
select * from usuarios ORDER BY fecha asc LIMIT 2;
select * from usuarios ORDER BY fecha asc LIMIT 1,4;
