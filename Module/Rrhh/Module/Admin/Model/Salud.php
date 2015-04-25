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
namespace sowerphp\empresa\Rrhh\Admin;

/**
 * Clase para mapear la tabla salud de la base de datos
 * Comentario de la tabla: Tipos de previsión de salud
 * Esta clase permite trabajar sobre un registro de la tabla salud
 * @author SowerPHP Code Generator
 * @version 2015-04-24 20:54:02
 */
class Model_Salud extends \Model_App
{

    // Datos para la conexión a la base de datos
    protected $_database = 'default'; ///< Base de datos del modelo
    protected $_table = 'salud'; ///< Tabla del modelo

    // Atributos de la clase (columnas en la base de datos)
    public $codigo; ///< smallint(5) NOT NULL DEFAULT '' PK
    public $salud; ///< varchar(20) NOT NULL DEFAULT ''
    public $web; ///< varchar(30) NOT NULL DEFAULT ''
    public $telefono; ///< varchar(20) NOT NULL DEFAULT ''

    // Información de las columnas de la tabla en la base de datos
    public static $columnsInfo = array(
        'codigo' => array(
            'name'      => 'Codigo',
            'comment'   => '',
            'type'      => 'smallint',
            'length'    => 5,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => true,
            'fk'        => null
        ),
        'salud' => array(
            'name'      => 'Salud',
            'comment'   => '',
            'type'      => 'varchar',
            'length'    => 20,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'web' => array(
            'name'      => 'Web',
            'comment'   => '',
            'type'      => 'varchar',
            'length'    => 30,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'telefono' => array(
            'name'      => 'Telefono',
            'comment'   => '',
            'type'      => 'varchar',
            'length'    => 20,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),

    );

    // Comentario de la tabla en la base de datos
    public static $tableComment = 'Tipos de previsión de salud';

    public static $fkNamespace = array(); ///< Namespaces que utiliza esta clase

}
