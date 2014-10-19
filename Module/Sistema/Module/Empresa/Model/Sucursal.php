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
namespace sowerphp\empresa\Sistema\Empresa;

/**
 * Clase para mapear la tabla sucursal de la base de datos
 * Comentario de la tabla: Sucursales de la empresa
 * Esta clase permite trabajar sobre un registro de la tabla sucursal
 * @author SowerPHP Code Generator
 * @version 2014-10-19 10:08:32
 */
class Model_Sucursal extends \Model_App
{

    // Datos para la conexión a la base de datos
    protected $_database = 'default'; ///< Base de datos del modelo
    protected $_table = 'sucursal'; ///< Tabla del modelo

    // Atributos de la clase (columnas en la base de datos)
    public $id; ///< Identificador de la sucursal: varchar(10)(10) NOT NULL DEFAULT '' PK
    public $sucursal; ///< Nombre de la sucursal: varchar(30)(30) NOT NULL DEFAULT ''
    public $matriz; ///< Indica si la sucursal es la casa matriz: tinyint(1)(3) NOT NULL DEFAULT '0'
    public $direccion; ///< Dirección de la sucursal: varchar(100)(100) NULL DEFAULT ''
    public $comuna; ///< Comuna de la sucursal: char(5)(5) NULL DEFAULT '' FK:comuna.codigo
    public $telefono1; ///< Teléfono principal de la sucursal: varchar(30)(30) NULL DEFAULT ''
    public $telefono2; ///< Teléfono secundario de la sucursal: varchar(30)(30) NULL DEFAULT ''
    public $fax; ///< Fax principal de la sucursal: varchar(20)(20) NULL DEFAULT ''
    public $email; ///< Correo electrónico principal de la sucursal: varchar(50)(50) NULL DEFAULT ''
    public $contrasenia; ///< Contraseña del correo electrónico de la sucursal: varchar(20)(20) NULL DEFAULT ''

    // Información de las columnas de la tabla en la base de datos
    public static $columnsInfo = array(
        'id' => array(
            'name'      => 'ID',
            'comment'   => 'Identificador de la sucursal',
            'type'      => 'varchar(10)',
            'length'    => 10,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => true,
            'fk'        => null
        ),
        'sucursal' => array(
            'name'      => 'Sucursal',
            'comment'   => 'Nombre de la sucursal',
            'type'      => 'varchar(30)',
            'length'    => 30,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'matriz' => array(
            'name'      => 'Matriz',
            'comment'   => 'Indica si la sucursal es la casa matriz',
            'type'      => 'tinyint(1)',
            'length'    => 3,
            'null'      => false,
            'default'   => '0',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'direccion' => array(
            'name'      => 'Dirección',
            'comment'   => 'Dirección de la sucursal',
            'type'      => 'varchar(100)',
            'length'    => 100,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'comuna' => array(
            'name'      => 'Comuna',
            'comment'   => 'Comuna de la sucursal',
            'type'      => 'char(5)',
            'length'    => 5,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => array('table' => 'comuna', 'column' => 'codigo')
        ),
        'telefono1' => array(
            'name'      => 'Teléfono 1',
            'comment'   => 'Teléfono principal de la sucursal',
            'type'      => 'varchar(30)',
            'length'    => 30,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'telefono2' => array(
            'name'      => 'Teléfono 2',
            'comment'   => 'Teléfono secundario de la sucursal',
            'type'      => 'varchar(30)',
            'length'    => 30,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'fax' => array(
            'name'      => 'Fax',
            'comment'   => 'Fax principal de la sucursal',
            'type'      => 'varchar(20)',
            'length'    => 20,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'email' => array(
            'name'      => 'Email',
            'comment'   => 'Correo electrónico principal de la sucursal',
            'type'      => 'varchar(50)',
            'length'    => 50,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'contrasenia' => array(
            'name'      => 'Contraseña',
            'comment'   => 'Contraseña del correo electrónico de la sucursal',
            'type'      => 'varchar(20)',
            'length'    => 20,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),

    );

    // Comentario de la tabla en la base de datos
    public static $tableComment = 'Sucursales de la empresa';

    public static $fkNamespace = array(
        'Model_Comuna' => 'sowerphp\empresa\Sistema\General\DivisionGeopolitica'
    ); ///< Namespaces que utiliza esta clase

}
