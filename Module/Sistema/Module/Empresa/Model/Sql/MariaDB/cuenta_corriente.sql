BEGIN;

DROP TABLE IF EXISTS cuenta_corriente CASCADE;
CREATE TABLE cuenta_corriente (
	codigo CHARACTER VARYING (20) PRIMARY KEY
		COMMENT 'Código único de la cuenta corriente',
	banco CHAR (3) NOT NULL
		COMMENT 'Identificador de la cuenta corriente',
	cuenta_corriente VARCHAR (20) NOT NULL
		COMMENT 'Número de cuenta corriente',
	activa BOOLEAN NOT NULL DEFAULT true
		COMMENT 'Indica si la cuenta corriente está o no activa',
	CONSTRAINT cuenta_corriente_banco_fk
		FOREIGN KEY (banco)
		REFERENCES banco (codigo) MATCH FULL
		ON UPDATE CASCADE ON DELETE CASCADE
) COMMENT = 'Cuentas corrientes de la empresa';
CREATE INDEX cuenta_corriente_banco_idx ON cuenta_corriente (banco);
CREATE INDEX cuenta_corriente_activa_idx ON cuenta_corriente (activa);

COMMIT;
