BEGIN;

DROP TABLE IF EXISTS sucursal CASCADE;
CREATE TABLE sucursal (
	id CHARACTER VARYING (10) PRIMARY KEY
		COMMENT 'Identificador de la sucursal',
	sucursal VARCHAR (30) NOT NULL
		COMMENT 'Nombre de la sucursal',
	matriz BOOLEAN NOT NULL DEFAULT false
		COMMENT 'Indica si la sucursal es la casa matriz',
	direccion CHARACTER VARYING (50)
		COMMENT 'Dirección de la sucursal (calle y número)',
	direccion_extra CHARACTER VARYING (50)
		COMMENT 'Información que no es parte de la calle ni el número',
	comuna CHAR (5)
		COMMENT 'Comuna de la sucursal',
	telefono1 CHARACTER VARYING (30)
		COMMENT 'Teléfono principal de la sucursal',
	telefono2 CHARACTER VARYING (30)
		COMMENT 'Teléfono secundario de la sucursal',
	fax CHARACTER VARYING (20)
		COMMENT 'Fax principal de la sucursal',
	email CHARACTER VARYING (50)
		COMMENT 'Correo electrónico principal de la sucursal',
	contrasenia CHARACTER VARYING (20)
		COMMENT 'Contraseña del correo electrónico de la sucursal',
	orden INTEGER NOT NULL DEFAULT 9999
		COMMENT 'Orden para mostrar la sucursal en listados',
	CONSTRAINT sucursal_comuna_fk
		FOREIGN KEY (comuna)
		REFERENCES comuna (codigo) MATCH FULL
		ON UPDATE CASCADE ON DELETE CASCADE
) COMMENT = 'Sucursales de la empresa';

COMMIT;
