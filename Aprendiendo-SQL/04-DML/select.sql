# Mostrar todos los registros / Filas de una tabla #
SELECT email, nombre, apellidos FROM usuarios;
SELECT * FROM USUARIOS;

# Operadores aritméticos #
SELECT email, (7+7) AS 'OPERACION' FROM usuarios;
SELECT email, nombre, apellidos FROM usuarios ORDER BY email;

# funciones matemáticas # 
SELECT ABS(7) AS 'OPERACION' FROM USUARIOS;
SELECT SQRT(id) AS 'OPERACION' FROM USUARIOS;
SELECT IFNULL(apellidos,'este campo está vacío') FROM usuarios;