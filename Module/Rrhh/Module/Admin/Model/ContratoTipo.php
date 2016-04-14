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
namespace sowerphp\empresa\Rrhh\Admin;

/**
 * Clase para mapear la tabla contrato_tipo de la base de datos
 * Comentario de la tabla: Tipos de contratos
 * Esta clase permite trabajar sobre un registro de la tabla contrato_tipo
 * @author SowerPHP Code Generator
 * @version 2015-04-24 20:54:02
 */
class Model_ContratoTipo extends \Model_App
{

    // Datos para la conexión a la base de datos
    protected $_database = 'default'; ///< Base de datos del modelo
    protected $_table = 'contrato_tipo'; ///< Tabla del modelo

    // Atributos de la clase (columnas en la base de datos)
    public $codigo; ///< char(1) NOT NULL DEFAULT '' PK
    public $tipo; ///< varchar(40) NOT NULL DEFAULT ''

    // Información de las columnas de la tabla en la base de datos
    public static $columnsInfo = array(
        'codigo' => array(
            'name'      => 'Codigo',
            'comment'   => '',
            'type'      => 'char',
            'length'    => 1,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => true,
            'fk'        => null
        ),
        'tipo' => array(
            'name'      => 'Tipo',
            'comment'   => '',
            'type'      => 'varchar',
            'length'    => 40,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),

    );

    // Comentario de la tabla en la base de datos
    public static $tableComment = 'Tipos de contratos';

    public static $fkNamespace = array(); ///< Namespaces que utiliza esta clase

}
