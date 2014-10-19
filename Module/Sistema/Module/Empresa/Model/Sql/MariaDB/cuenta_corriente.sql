BEGIN;

DROP TABLE IF EXISTS cuenta_corriente CASCADE;
CREATE TABLE cuenta_corriente (
	banco CHAR (3) NOT NULL
		COMMENT 'Identificador de la cuenta corriente',
	cuenta_corriente VARCHAR (20) NOT NULL
		COMMENT 'Número de cuenta corriente',
	activa BOOLEAN NOT NULL DEFAULT true
		COMMENT 'Indica si la cuenta corriente está o no activa',
	CONSTRAINT cuenta_corriente_pkey PRIMARY KEY (banco, cuenta_corriente),
	CONSTRAINT cuenta_corriente_banco_fk
		FOREIGN KEY (banco)
		REFERENCES banco (codigo) MATCH FULL
		ON UPDATE CASCADE ON DELETE CASCADE
) COMMENT = 'Cuentas corrientes de la empresa';

COMMIT;
