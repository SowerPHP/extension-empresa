BEGIN;

SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS empleado CASCADE;
CREATE TABLE empleado (
    run INTEGER UNSIGNED PRIMARY KEY
        COMMENT 'RUN de la persona, sin puntos ni dígito verificador',
    dv CHAR(1) NOT NULL
        COMMENT 'Dígito verificador del RUN',
    sexo CHAR(1) NOT NULL DEFAULT 'm'
        COMMENT 'Sexo del empleado ("m" o "f")',
    nombres CHARACTER VARYING (30) NOT NULL
        COMMENT 'Nombres de la persona',
    apellidos CHARACTER VARYING (30) NOT NULL
        COMMENT 'Apellidos de la persona',
    telefono CHARACTER VARYING (20)
        COMMENT 'Teléfono principal del empleado',
    fecha_nacimiento DATE
        COMMENT 'Fecha de nacimiento de la persona',
    foto_data MEDIUMBLOB
        COMMENT 'Fotografía de la persona',
    foto_name character varying(100)
        COMMENT 'Nombre de la fotografía',
    foto_type character varying(10)
        COMMENT 'Mimetype de la fotografía',
    foto_size integer
        COMMENT 'Tamaño de la fotografía',
    activo BOOLEAN NOT NULL DEFAULT true
        COMMENT 'Indica si la persona aun pertenece a la empresa',
    sueldo INTEGER
        COMMENT 'Sueldo bruto base del empleado',
    contrato_tipo CHAR(1)
        COMMENT 'Tipo de contrato',
    fecha_ingreso DATE
        COMMENT 'Fecha de ingreso a la empresa',
    fecha_egreso DATE
        COMMENT 'Fecha de egreso de la empresa (ej: fin contrato)',
    sucursal CHARACTER VARYING (10)
        COMMENT 'Sucursal en la que trabaja este empleado',
    cargo INTEGER UNSIGNED
        COMMENT 'Cargo que ocupa dentro de la empresa',
    usuario INTEGER UNSIGNED
        COMMENT 'Usuario del sistema (si es que tiene uno asignado)',
    afp SMALLINT UNSIGNED
        COMMENT 'AFP del empleado',
    afp_porcentaje REAL
        COMMENT 'Porcentaje de descuento de la AFP',
    salud SMALLINT UNSIGNED
        COMMENT 'Tipo de salud del empleado (Fonasa o Isapre)',
    CONSTRAINT empleado_contrato_tipo_fk
        FOREIGN KEY (contrato_tipo)
        REFERENCES contrato_tipo (codigo) MATCH FULL
        ON UPDATE CASCADE ON DELETE SET NULL,
    CONSTRAINT empleado_sucursal_fk
        FOREIGN KEY (sucursal)
        REFERENCES sucursal (id) MATCH FULL
        ON UPDATE CASCADE ON DELETE SET NULL,
    CONSTRAINT empleado_cargo_fk
        FOREIGN KEY (cargo)
        REFERENCES cargo (id) MATCH FULL
        ON UPDATE CASCADE ON DELETE SET NULL,
    CONSTRAINT empleado_usuario_fk
        FOREIGN KEY (usuario)
        REFERENCES usuario (id) MATCH FULL
        ON UPDATE CASCADE ON DELETE SET NULL,
    CONSTRAINT empleado_afp_fk
        FOREIGN KEY (afp)
        REFERENCES afp (codigo) MATCH FULL
        ON UPDATE CASCADE ON DELETE SET NULL,
    CONSTRAINT empleado_salud_fk
        FOREIGN KEY (salud)
        REFERENCES salud (codigo) MATCH FULL
        ON UPDATE CASCADE ON DELETE SET NULL
) COMMENT = 'Listado de empleados de la empresa';
CREATE INDEX empleado_cargo_idx ON empleado (cargo);
CREATE INDEX empleado_sucursal_idx ON empleado (sucursal);
CREATE UNIQUE INDEX empleado_usuario_idx ON empleado (usuario);

SET FOREIGN_KEY_CHECKS=1;

COMMIT;
