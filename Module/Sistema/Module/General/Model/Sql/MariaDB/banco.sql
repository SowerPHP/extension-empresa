BEGIN;

DROP TABLE IF EXISTS banco CASCADE;
CREATE TABLE banco (
	codigo CHAR(3) PRIMARY KEY
		COMMENT 'Código de banco de la SBIF',
	banco VARCHAR (40) NOT NULL
		COMMENT 'Nombre del banco'
) COMMENT = 'Tabla para bancos';

COMMIT;
