BEGIN;

DROP TABLE IF EXISTS cliente CASCADE;
CREATE TABLE cliente (
	rut INTEGER PRIMARY KEY,
	dv CHAR (1) NOT NULL,
	razon_social CHARACTER VARYING (60) NOT NULL,
	actividad_economica INTEGER,
	email CHARACTER VARYING (50),
	telefono CHARACTER VARYING (20),
	direccion CHARACTER VARYING (100),
	comuna CHAR (5),
	contrasenia CHAR (64),
	CONSTRAINT cliente_actividad_economica_fk
		FOREIGN KEY (actividad_economica)
		REFERENCES actividad_economica (codigo) MATCH FULL
		ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT cliente_comuna_fk
		FOREIGN KEY (comuna)
		REFERENCES comuna (codigo) MATCH FULL
		ON UPDATE CASCADE ON DELETE CASCADE
);
COMMENT ON TABLE cliente IS 'Listado de clientes de la empresa';
COMMENT ON COLUMN cliente.rut IS 'RUT del cliente, sin puntos ni dígito verificador';
COMMENT ON COLUMN cliente.dv IS 'Dígito verificador del rut';
COMMENT ON COLUMN cliente.razon_social IS 'Nombre o razón social';
COMMENT ON COLUMN cliente.actividad_economica IS 'Actividad económica o bien nulo si es Particular';
COMMENT ON COLUMN cliente.email IS 'Correo electrónico principal de contacto';
COMMENT ON COLUMN cliente.telefono IS 'Teléfono principal de contacto';
COMMENT ON COLUMN cliente.direccion IS 'Dirección de la casa matriz';
COMMENT ON COLUMN cliente.comuna IS 'Comuna de la casa matriz';
COMMENT ON COLUMN cliente.contrasenia IS 'Contraseña para acceder a servicios de la aplicación';

COMMIT;
