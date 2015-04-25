BEGIN;

SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS contrato_tipo CASCADE;
CREATE TABLE contrato_tipo (
    codigo CHAR(1) PRIMARY KEY,
    tipo VARCHAR(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT 'Tipos de contratos';

INSERT INTO contrato_tipo VALUES
    ('h', 'Contrato a honorarios'),
    ('f', 'Contrato plazo fijo'),
    ('i', 'Contrato plazo indefinido')
;

SET FOREIGN_KEY_CHECKS=0;

COMMIT;
