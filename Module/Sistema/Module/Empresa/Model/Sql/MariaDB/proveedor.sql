BEGIN;

DROP TABLE IF EXISTS proveedor CASCADE;
CREATE TABLE proveedor (
	rut INTEGER PRIMARY KEY
		COMMENT 'RUT del proveedor, sin puntos ni dígito verificador',
	dv CHAR (1) NOT NULL
		COMMENT 'Dígito verificador del rut',
	razon_social CHARACTER VARYING (60) NOT NULL
		COMMENT 'Nombre o razón social',
	email CHARACTER VARYING (50)
		COMMENT 'Correo electrónico de contacto',
	telefono CHARACTER VARYING (20)
		COMMENT 'Teléfono de contacto',
	direccion CHARACTER VARYING (100)
		COMMENT 'Dirección de contacto',
	comuna CHAR (5)
		COMMENT 'Comuna de la dirección',
	web CHARACTER VARYING (50)
		COMMENT 'Página web del proveedor',
	CONSTRAINT proveedor_comuna_fk
		FOREIGN KEY (comuna)
		REFERENCES comuna (codigo) MATCH FULL
		ON UPDATE CASCADE ON DELETE CASCADE
) COMMENT = 'Listado de proveedores de la empresa';

COMMIT;
