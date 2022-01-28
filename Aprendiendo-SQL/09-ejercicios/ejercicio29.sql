/* 
29. Crear una vista vendedores a que incluirá todos los vendedores del grupo a que se llame vendedores a
 */
CREATE VIEW vendedoresA AS
    SELECT * FROM vendedores WHERE grupo_id IN
        (SELECT id FROM grupos WHERE nombre = 'Vendedores A');
   
