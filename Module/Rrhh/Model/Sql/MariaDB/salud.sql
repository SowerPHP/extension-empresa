BEGIN;

SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS salud CASCADE;
CREATE TABLE salud (
    codigo SMALLINT UNSIGNED PRIMARY KEY,
    salud VARCHAR(20) NOT NULL,
    web VARCHAR(30) NOT NULL,
    telefono VARCHAR(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT 'Tipos de previsión de salud';

-- http://www.supersalud.gob.cl/568/w3-article-2528.html
INSERT INTO salud VALUES
    (1, 'Fonasa', 'https://www.fonasa.cl', '600 360 3000'),
    (99, 'Banmédica', 'http://www.banmedica.cl', '600 600 3600'),
    (67, 'Colmena Golden Cross', 'https://www.colmena.cl', '800 633 444'),
    (107, 'Consalud', 'https://www.consalud.cl', '600 500 9000'),
    (78, 'Cruz Blanca S.A', 'http://www.cruzblanca.cl', '600 818 0000'),
    (88, 'Masvida S.A', 'http://www.masvida.cl', '600 600 0262'),
    (80, 'Vida Tres', 'http://www.vidatres.cl', '600 600 3535')
;

SET FOREIGN_KEY_CHECKS=0;

COMMIT;
