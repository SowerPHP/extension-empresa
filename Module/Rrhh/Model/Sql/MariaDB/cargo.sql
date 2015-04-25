BEGIN;

DROP TABLE IF EXISTS cargo CASCADE;
CREATE TABLE cargo (
	id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY
		COMMENT 'Identificador del cargo',
	cargo VARCHAR (30) NOT NULL
		COMMENT 'Nombre del cargo',
	jefe INTEGER UNSIGNED
		COMMENT 'Cargo superior a este cargo',
	area INTEGER UNSIGNED
		COMMENT 'Área en la que se desempeña este cargo',
	CONSTRAINT cargo_jefe_fk
		FOREIGN KEY (jefe)
		REFERENCES cargo (id) MATCH FULL
		ON UPDATE CASCADE ON DELETE SET NULL,
	CONSTRAINT cargo_area_fk
		FOREIGN KEY (area)
		REFERENCES area (id) MATCH FULL
		ON UPDATE CASCADE ON DELETE SET NULL
) COMMENT = 'Cargos de la empresa';
CREATE INDEX cargo_jefe_idx ON cargo (jefe);
CREATE INDEX cargo_area_idx ON cargo (area);

COMMIT;
