BEGIN;

DROP TABLE IF EXISTS actividad_economica CASCADE;
CREATE TABLE actividad_economica (
	codigo INTEGER PRIMARY KEY
		COMMENT 'Código de la actividad económica',
	actividad_economica CHARACTER VARYING (120) NOT NULL
		COMMENT 'Glosa de la actividad económica',
	afecta_iva BOOLEAN
		COMMENT 'Si la actividad está o no afecta a IVA',
	categoria SMALLINT
		COMMENT 'Categoría a la que pertenece la actividad (tipo)'
) COMMENT = 'Actividades económicas del país';

COMMIT;
