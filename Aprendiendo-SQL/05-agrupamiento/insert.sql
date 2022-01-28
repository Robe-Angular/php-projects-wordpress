# Inserts para categorías #
INSERT INTO categorias VALUES(null, 'Acción');
INSERT INTO categorias VALUES(null, 'Rol');
INSERT INTO categorias VALUES(null, 'Deportes');

# INSERTS para entradas #
INSERT INTO entradas VALUES(null, 1, 1, 'Novedades de GTA 5 online', 'Review del GTA5', CURDATE());
INSERT INTO entradas VALUES(null, 1, 2, 'Review de LOL online', 'Todo sobre el LOL', CURDATE());
INSERT INTO entradas VALUES(null, 1, 3, 'Nuevos jugadores de FIFA 19', 'Review de FIFA 19', CURDATE());

INSERT INTO entradas VALUES(null, 2, 1, 'Novedades de ASSASINS 5 online', 'Review del Assasins', CURDATE());
INSERT INTO entradas VALUES(null, 2, 2, 'Review de WOW online', 'Todo sobre el WOW', CURDATE());
INSERT INTO entradas VALUES(null, 2, 3, 'Nuevos jugadores de PES 19', 'Review de PRO 19', CURDATE());

INSERT INTO entradas VALUES(null, 3, 1, 'Novedades de Call of Duty online', 'Review del COD', CURDATE());
INSERT INTO entradas VALUES(null, 3, 1, 'Review de Fornite online', 'Todo sobre el Fornite', CURDATE());
INSERT INTO entradas VALUES(null, 3, 3, 'Nuevos jugadores de Fórmula 1', 'Review de Fórmula 1', CURDATE());