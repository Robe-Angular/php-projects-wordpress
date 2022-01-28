/* 
Diseñar la base de datos de un concesionario
 */
CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE coches(
id      int(10) auto_increment not null,
modelo  varchar(100) not null,
marca   varchar(50),
precio  int(20) not null,
stock   int(255) not null,
CONSTRAINT pk_coches PRIMARY KEY (id)
)ENGINE = InnoDB;

CREATE TABLE grupos(
id      int(10) auto_increment not null,
nombre  varchar(100) not null,
ciudad  varchar(100),
CONSTRAINT pk_grupos PRIMARY KEY (id)
)ENGINE = InnoDB;

CREATE TABLE vendedores(
id          int(10) auto_increment not null,
grupo_id    int(10) not null,
jefe        int(10),
nombre      varchar(100) not null,
apellidos   varchar(150),
cargo       varchar(50),
fecha       date,
sueldo      float(20,2),
comision    float(10,2),
CONSTRAINT pk_vendedores PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id)  REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE = InnoDB;

CREATE TABLE clientes(
id          int(10) auto_increment not null,
vendedor_id int(10),
nombre      varchar(150) not null,
ciudad      varchar(100),
gastado     float(50,2),
fecha       date,
CONSTRAINT pk_clientes PRIMARY KEY(id),
CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE = InnoDB;

CREATE TABLE encargos(
id          int(10) auto_increment not null,
cliente_id  int(10) not null,
coche_id    int(10) not null,
cantidad    int(100),
fecha       date,
CONSTRAINT pk_encargos PRIMARY KEY(id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE = InnoDB;

# Rellenar la base de datos con información #

# Coches
INSERT INTO coches VALUES(NULL, 'Renault Clío', 'Renault', 12000, 13);
INSERT INTO coches VALUES(NULL, 'Seat Panda', 'Seat', 10000, 10);
INSERT INTO coches VALUES(NULL, 'Mercedes Ranchera', 'Mercedes Benz', 32000, 24);
INSERT INTO coches VALUES(NULL, 'Porche Cayene', 'Porche', 65000, 5);
INSERT INTO coches VALUES(NULL, 'Lambo Aventador', 'Lamborgini', 170000, 2);
INSERT INTO coches VALUES(NULL, 'Ferrari Spider', 'Ferrari', 12000, 13);

# Grupos
INSERT INTO GRUPOS VALUES(NULL, 'Vendedores A', 'Madrid');
INSERT INTO GRUPOS VALUES(NULL, 'Vendedores B', 'Madrid');
INSERT INTO GRUPOS VALUES(NULL, 'Directores Mecánicos', 'Madrid');
INSERT INTO GRUPOS VALUES(NULL, 'Vendedores A', 'Barcelona');
INSERT INTO GRUPOS VALUES(NULL, 'Vendedores B', 'Barcelona');
INSERT INTO GRUPOS VALUES(NULL, 'Vendedores C', 'Valencia');
INSERT INTO GRUPOS VALUES(NULL, 'Vendedores A', 'Bilbao');
INSERT INTO GRUPOS VALUES(NULL, 'Vendedores B', 'Pamplona');
INSERT INTO GRUPOS VALUES(NULL, 'Vendedores c', 'Santiago de Compostela');

# Vendedores
INSERT INTO Vendedores VALUES(NULL, 1, Null, 'David', 'López', 'Responsable de tienda', CURDATE(), 30000,4);
INSERT INTO Vendedores VALUES(NULL, 1, 1, 'Fran', 'Martínez', 'Ayudante en tienda', CURDATE(), 23000,2);
INSERT INTO Vendedores VALUES(NULL, 2, Null, 'Nelson', 'Sánchez', 'Responsable de tienda', CURDATE(), 38000,4);
INSERT INTO Vendedores VALUES(NULL, 2, 3, 'Jesús', 'López', 'Ayudante de tienda', CURDATE(), 12000,6);
INSERT INTO Vendedores VALUES(NULL, 3, Null, 'Víctor', 'López', 'Mecánico jefe', CURDATE(), 50000,2);
INSERT INTO Vendedores VALUES(NULL, 4, Null, 'Antonio', 'López', 'Vendedor de recambios', CURDATE(), 13000,4);
INSERT INTO Vendedores VALUES(NULL, 5, Null, 'Salvador', 'López', 'Vendedor experto', CURDATE(), 60000,2);
INSERT INTO Vendedores VALUES(NULL, 6, Null, 'Joaquín', 'López', 'Ejecutivo de cuentas', CURDATE(),80000,4);
INSERT INTO Vendedores VALUES(NULL, 6, 8, 'Luis', 'López', 'Ayudante en tienda', CURDATE(), 10000,10);

# Clientes
INSERT INTO clientes VALUES(NULL, 1, 'Construcciones Díaz Inc', 'Alcobendas', 24000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Frutería antonia', 'Fuenlabrada', 40000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Imprenta Martínez', 'Barcelona', 32000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Jesús colchones Inc', 'El Prat', 96000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Bar Pepe Inc', 'Valencia', 170000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Tienda PC Inc', 'Murcia', 245000, CURDATE());

# Encargos
INSERT INTO encargos VALUES(NULL, 1, 1, 2, CURDATE());
INSERT INTO encargos VALUES(NULL, 2, 2, 4, CURDATE());
INSERT INTO encargos VALUES(NULL, 3, 3, 1, CURDATE());
INSERT INTO encargos VALUES(NULL, 4, 3, 3, CURDATE());
INSERT INTO encargos VALUES(NULL, 5, 5, 1, CURDATE());
INSERT INTO encargos VALUES(NULL, 6, 6, 1, CURDATE());