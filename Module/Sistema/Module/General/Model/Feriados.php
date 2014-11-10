<?php

/**
 * SowerPHP: Minimalist Framework for PHP
 * Copyright (C) SowerPHP (http://sowerphp.org)
 *
 * Este programa es software libre: usted puede redistribuirlo y/o
 * modificarlo bajo los términos de la Licencia Pública General GNU
 * publicada por la Fundación para el Software Libre, ya sea la versión
 * 3 de la Licencia, o (a su elección) cualquier versión posterior de la
 * misma.
 *
 * Este programa se distribuye con la esperanza de que sea útil, pero
 * SIN GARANTÍA ALGUNA; ni siquiera la garantía implícita
 * MERCANTIL o de APTITUD PARA UN PROPÓSITO DETERMINADO.
 * Consulte los detalles de la Licencia Pública General GNU para obtener
 * una información más detallada.
 *
 * Debería haber recibido una copia de la Licencia Pública General GNU
 * junto a este programa.
 * En caso contrario, consulte <http://www.gnu.org/licenses/gpl.html>.
 */

// namespace del modelo
namespace sowerphp\empresa\Sistema\General;

/**
 * Clase para mapear la tabla feriado de la base de datos
 * Comentario de la tabla:
 * Esta clase permite trabajar sobre un conjunto de registros de la tabla feriado
 * @author SowerPHP Code Generator
 * @version 2014-09-10 14:46:08
 */
class Model_Feriados extends \Model_Plural_App
{

    // Datos para la conexión a la base de datos
    protected $_database = 'default'; ///< Base de datos del modelo
    protected $_table = 'feriado'; ///< Tabla del modelo

    private static $feriados = ['desde'=>[], 'hasta'=>[]]; ///< Caché para feriados

    /**
     * Método que entrega los feriados desde la fecha consultada
     * @param fecha Fecha desde cuando (inclusive) se consultarán feriados
     * @return Columna con los días feriados encontrados
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2014-11-10
     */
    public function desde($fecha)
    {
        if (!isset(self::$feriados['desde'][$fecha])) {
            self::$feriados['desde'][$fecha] = $this->db->getCol('
                SELECT fecha
                FROM feriado
                WHERE fecha >= :fecha
                ORDER BY fecha ASC
            ', [':fecha'=>$fecha]);
        }
        return self::$feriados['desde'][$fecha];
    }

    /**
     * Método que entrega los feriados hasta la fecha consultada
     * @param fecha Fecha hasta cuando (inclusive) se consultarán feriados
     * @return Columna con los días feriados encontrados
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2014-11-10
     */
    public function hasta($fecha)
    {
        if (!isset(self::$feriados['hasta'][$fecha])) {
            self::$feriados['hasta'][$fecha] = $this->db->getCol('
                SELECT fecha
                FROM feriado
                WHERE fecha <= :fecha
                ORDER BY fecha DESC
            ', [':fecha'=>$fecha]);
        }
        return self::$feriados['hasta'][$fecha];
    }

}
