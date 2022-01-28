# Renombrar una tabla #

ALTER TABLE usuarios RENAME TO usuarios_renom;

# Cambiar EL nombre de una columna #
ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

# Modificar columna sin cambiar el nombre #

ALTER TABLE usuarios_renom MODIFY apellido char(50) not null;

# Añadir columna #
ALTER TABLE usuarios_renom ADD website varchar(100) null;

# Añadir una restricción a columna #
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

# Borrar una columna #
ALTER TABLE usarios_renom DROP website;

ALTER TABLE `usuarios_renom` DROP website;
ALTER TABLE usarios_renom DROP website;