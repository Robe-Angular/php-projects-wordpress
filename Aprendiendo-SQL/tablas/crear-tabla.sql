/*
int(n° cifras) Entero
integer(n° cifras) Entero (máximo 429967295)
varchar(n° caracteres) string-alfanumérico (máximo 255)
char(n° caracteres) string-alfanumérico
float (n° cifras, n° decimales) coma flotante
TEXT 65535 caracteres
MEDIUMTEXT  16000000 caracteres
LONGTEXT 4000,000,000,0000 caracteres
date, time, timestamp

MEDIUMINT
BIGINT
*/
/*
Crear tabla
*/

CREATE TABLE usuarios(
    id          int(11) auto_increment not null,
    nombre      varchar(100) not null,
    apellidos   varchar(255) default'Hola qué tal',
    email       varchar(100) not null,
    password    varchar(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);
