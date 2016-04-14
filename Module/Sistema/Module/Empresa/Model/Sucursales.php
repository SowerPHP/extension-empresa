<?php

/**
 * SowerPHP
 * Copyright (C) SowerPHP (http://sowerphp.org)
 *
 * Este programa es software libre: usted puede redistribuirlo y/o
 * modificarlo bajo los términos de la Licencia Pública General Affero de GNU
 * publicada por la Fundación para el Software Libre, ya sea la versión
 * 3 de la Licencia, o (a su elección) cualquier versión posterior de la
 * misma.
 *
 * Este programa se distribuye con la esperanza de que sea útil, pero
 * SIN GARANTÍA ALGUNA; ni siquiera la garantía implícita
 * MERCANTIL o de APTITUD PARA UN PROPÓSITO DETERMINADO.
 * Consulte los detalles de la Licencia Pública General Affero de GNU para
 * obtener una información más detallada.
 *
 * Debería haber recibido una copia de la Licencia Pública General Affero de GNU
 * junto a este programa.
 * En caso contrario, consulte <http://www.gnu.org/licenses/agpl.html>.
 */

// namespace del modelo
namespace sowerphp\empresa\Sistema\Empresa;

/**
 * Clase para mapear la tabla sucursal de la base de datos
 * Comentario de la tabla: Sucursales de la empresa
 * Esta clase permite trabajar sobre un conjunto de registros de la tabla sucursal
 * @author SowerPHP Code Generator
 * @version 2014-10-19 20:49:00
 */
class Model_Sucursales extends \Model_Plural_App
{

    // Datos para la conexión a la base de datos
    protected $_database = 'default'; ///< Base de datos del modelo
    protected $_table = 'sucursal'; ///< Tabla del modelo

    /**
     * Método que entrega el listado de sucursales
     * @return Tabla con las sucursales
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2015-02-19
     */
    public function getList()
    {
        return $this->db->getTable('
            SELECT id, CONCAT(id, \': \', sucursal) AS sucursal
            FROM sucursal
            ORDER BY orden
        ');
    }

    /**
     * Método que entrega el listado de sucursales con su correo electrónico
     * @return Tabla con las sucursales y su correo electrónico
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2015-02-19
     */
    public function getListWithEmail()
    {
        return $this->db->getTable('
            SELECT
                id,
                CONCAT(id, \': \', sucursal, \' (\', email, \')\') AS sucursal
            FROM sucursal
            WHERE email IS NOT NULL
            ORDER BY orden
        ');
    }

}
