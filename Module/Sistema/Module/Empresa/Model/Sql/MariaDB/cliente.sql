BEGIN;

DROP TABLE IF EXISTS cliente CASCADE;
CREATE TABLE cliente (
	rut INTEGER PRIMARY KEY
		COMMENT 'RUT del cliente, sin puntos ni dígito verificador',
	dv CHAR (1) NOT NULL
		COMMENT 'Dígito verificador del rut',
	razon_social CHARACTER VARYING (60) NOT NULL
		COMMENT 'Nombre o razón social',
	actividad_economica INTEGER
		COMMENT 'Actividad económica del cliente (si posee una)',
	email CHARACTER VARYING (50)
		COMMENT 'Correo electrónico principal de contacto',
	telefono CHARACTER VARYING (20)
		COMMENT 'Teléfono principal de contacto',
	direccion CHARACTER VARYING (100)
		COMMENT 'Dirección principal',
	comuna CHAR (5)
		COMMENT 'Comuna de la dirección',
	CONSTRAINT cliente_actividad_economica_fk
		FOREIGN KEY (actividad_economica)
		REFERENCES actividad_economica (codigo) MATCH FULL
		ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT cliente_comuna_fk
		FOREIGN KEY (comuna)
		REFERENCES comuna (codigo) MATCH FULL
		ON UPDATE CASCADE ON DELETE CASCADE
) COMMENT = 'Listado de clientes de la empresa';

COMMIT;
