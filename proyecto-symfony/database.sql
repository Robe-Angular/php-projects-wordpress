CREATE DATABASE IF NOT EXISTS symfony_master;
USE symfony_master;

CREATE TABLE IF NOT EXISTS users(
id          int(255) autoincrement not null,
role        varchar(50),
name        varchar(100),
surname     varchar(200),
password    varchar(255),
created_at  datetime,
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=Innodb;

INSERT INTO users VALUES(NULL, 'ROLE_USER', 'Víctor', 'Robles', 'victor@victor.com', 'password', CURTIME());
INSERT INTO users VALUES(NULL, 'ROLE_USER', 'Manolo', 'Pérez', 'manolo@manolo.com', 'password', CURTIME());
INSERT INTO users VALUES(NULL, 'ROLE_USER', 'Carlos', 'Sánchez', 'carlos@carlos.com', 'password', CURTIME());


INSERT INTO tasks VALUES(NULL, 1, 'Tarea 1', 'Contenido de prueba 1', 'high', 40, CURTIME());
INSERT INTO tasks VALUES(NULL, 1, 'Tarea 2', 'Contenido de prueba 2', 'low', 20, CURTIME());
INSERT INTO tasks VALUES(NULL, 2, 'Tarea 3', 'Contenido de prueba 3', 'medium', 10, CURTIME());
INSERT INTO tasks VALUES(NULL, 3, 'Tarea 4', 'Contenido de prueba 4', 'high', 50, CURTIME());


CREATE TABLE IF NOT EXISTS tasks(
id          int(255) autoincrement not null,
user_ id    int(255) not null,
title       varchar(50),
content     text,
priority    varchar(200),
hours       int(100),
created_at  datetime,
CONSTRAINT pk_tasks PRIMARY KEY(id),
CONSTRAINT fk_task_user FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=Innodb;

