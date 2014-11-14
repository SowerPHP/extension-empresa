BEGIN;

SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS empleado CASCADE;
CREATE TABLE empleado (
	run INTEGER UNSIGNED PRIMARY KEY
		COMMENT 'RUN de la persona, sin puntos ni dígito verificador',
	dv CHAR(1) NOT NULL
		COMMENT 'Dígito verificador del RUN',
	nombres CHARACTER VARYING (30) NOT NULL
		COMMENT 'Nombres de la persona',
	apellidos CHARACTER VARYING (30) NOT NULL
		COMMENT 'Apellidos de la persona',
	fecha_nacimiento DATE
		COMMENT 'Fecha de nacimiento de la persona',
	fecha_ingreso DATE
		COMMENT 'Fecha de ingreso a la empresa',
	sucursal CHARACTER VARYING (10)
		COMMENT 'Sucursal en la que trabaja este empleado',
	cargo INTEGER UNSIGNED
		COMMENT 'Cargo que ocupa dentro de la empresa',
	foto_data MEDIUMBLOB
		COMMENT 'Fotografía de la persona',
	foto_name character varying(100)
		COMMENT 'Nombre de la fotografía',
	foto_type character varying(10)
		COMMENT 'Mimetype de la fotografía',
	foto_size integer
		COMMENT 'Tamaño de la fotografía',
	usuario INTEGER UNSIGNED
		COMMENT 'Usuario del sistema (si es que tiene uno asignado)',
	activo BOOLEAN NOT NULL DEFAULT true
		COMMENT 'Indica si la persona aun pertenece a la empresa',
	CONSTRAINT empleado_sucursal_fk
		FOREIGN KEY (sucursal)
		REFERENCES sucursal (id) MATCH FULL
		ON UPDATE CASCADE ON DELETE SET NULL,
	CONSTRAINT empleado_cargo_fk
		FOREIGN KEY (cargo)
		REFERENCES cargo (id) MATCH FULL
		ON UPDATE CASCADE ON DELETE SET NULL,
	CONSTRAINT empleado_usuario_fk
		FOREIGN KEY (usuario)
		REFERENCES usuario (id) MATCH FULL
		ON UPDATE CASCADE ON DELETE SET NULL
) COMMENT = 'Listado de empleados de la empresa';
CREATE INDEX empleado_cargo_idx ON empleado (cargo);
CREATE INDEX empleado_sucursal_idx ON empleado (sucursal);
CREATE UNIQUE INDEX empleado_usuario_idx ON empleado (usuario);

SET FOREIGN_KEY_CHECKS=1;

COMMIT;
