CREATE TABLE feriado (
	fecha date NOT NULL PRIMARY KEY
		COMMENT 'Día del feriado',
	descripcion varchar(30) NOT NULL
		COMMENT 'Glosa u observación del feriado'
) COMMENT = 'Tabla de feriados o fechas que afectan la aplicación';
