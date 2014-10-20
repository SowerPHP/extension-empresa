BEGIN;

DROP TABLE IF EXISTS proveedor CASCADE;
CREATE TABLE proveedor (
	rut INTEGER PRIMARY KEY,
	dv CHAR (1) NOT NULL,
	razon_social CHARACTER VARYING (60) NOT NULL,
	email CHARACTER VARYING (50),
	telefono CHARACTER VARYING (20),
	direccion CHARACTER VARYING (100),
	comuna CHAR (5),
	web CHARACTER VARYING (50),
	CONSTRAINT proveedor_comuna_fk
		FOREIGN KEY (comuna)
		REFERENCES comuna (codigo) MATCH FULL
		ON UPDATE CASCADE ON DELETE CASCADE
);
COMMENT ON TABLE proveedor IS 'Listado de proveedores de la empresa';
COMMENT ON COLUMN proveedor.rut IS 'RUT del proveedor, sin puntos ni dígito verificador';
COMMENT ON COLUMN proveedor.dv IS 'Dígito verificador del rut';
COMMENT ON COLUMN proveedor.razon_social IS 'Nombre o razón social';
COMMENT ON COLUMN proveedor.email IS 'Correo electrónico de contacto';
COMMENT ON COLUMN proveedor.telefono IS 'Teléfono de contacto';
COMMENT ON COLUMN proveedor.direccion IS 'Dirección de contacto';
COMMENT ON COLUMN proveedor.comuna IS 'Comuna de contacto';
COMMENT ON COLUMN proveedor.web IS 'Página web del proveedor';

COMMIT;
