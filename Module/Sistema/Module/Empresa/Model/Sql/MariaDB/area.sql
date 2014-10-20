BEGIN;

DROP TABLE IF EXISTS area CASCADE;
CREATE TABLE area (
	id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY
		COMMENT 'Identificador del área',
	area VARCHAR (30) NOT NULL
		COMMENT 'Nombre del área',
	superior INTEGER UNSIGNED
		COMMENT 'Área a la que pertenece esta área',
	CONSTRAINT area_superior_fk
		FOREIGN KEY (superior)
		REFERENCES area (id) MATCH FULL
		ON UPDATE CASCADE ON DELETE SET NULL
) COMMENT = 'Áreas de la empresa';

COMMIT;
