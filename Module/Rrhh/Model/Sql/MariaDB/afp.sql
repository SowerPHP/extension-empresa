BEGIN;

SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS afp CASCADE;
CREATE TABLE afp (
    codigo SMALLINT UNSIGNED PRIMARY KEY,
    afp VARCHAR(20) NOT NULL,
    web VARCHAR(30) NOT NULL,
    descuento REAL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT 'Listado de AFPs de Chile';

-- http://www.spensiones.cl/compendio/584/w3-propertyvalue-3000.html
INSERT INTO afp VALUES
    (1033, 'Capital', 'https://www.afpcapital.cl', 0),
    (1003, 'Cuprum', 'https://www.cuprum.cl', 11.48),
    (1005, 'Habitat', 'https://www.afphabitat.cl', 0),
    (1032, 'Planvital', 'https://www.planvital.cl', 0),
    (1008, 'Provida', 'https://www.provida.cl', 0),
    (1034, 'Modelo', 'https://www.afpmodelo.cl', 0)
;

SET FOREIGN_KEY_CHECKS=0;

COMMIT;
