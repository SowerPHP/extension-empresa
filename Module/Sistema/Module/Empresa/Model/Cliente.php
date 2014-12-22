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
 * Clase para mapear la tabla cliente de la base de datos
 * Comentario de la tabla: Listado de clientes de la empresa
 * Esta clase permite trabajar sobre un registro de la tabla cliente
 * @author SowerPHP Code Generator
 * @version 2014-10-19 22:25:56
 */
class Model_Cliente extends \Model_App
{

    // Datos para la conexión a la base de datos
    protected $_database = 'default'; ///< Base de datos del modelo
    protected $_table = 'cliente'; ///< Tabla del modelo

    // Atributos de la clase (columnas en la base de datos)
    public $rut; ///< RUT del cliente, sin puntos ni dígito verificador: int(11)(10) NOT NULL DEFAULT '' PK
    public $dv; ///< Dígito verificador del rut: char(1)(1) NOT NULL DEFAULT ''
    public $razon_social; ///< Nombre o razón social: varchar(60)(60) NOT NULL DEFAULT ''
    public $actividad_economica; ///< Actividad económica del cliente (si posee una): int(11)(10) NULL DEFAULT '' FK:actividad_economica.codigo
    public $email; ///< Correo electrónico principal de contacto: varchar(50)(50) NULL DEFAULT ''
    public $telefono; ///< Teléfono principal de contacto: varchar(20)(20) NULL DEFAULT ''
    public $direccion; ///< Dirección principal: varchar(100)(100) NULL DEFAULT ''
    public $comuna; ///< Comuna de la dirección: char(5)(5) NULL DEFAULT '' FK:comuna.codigo

    // Información de las columnas de la tabla en la base de datos
    public static $columnsInfo = array(
        'rut' => array(
            'name'      => 'Rut',
            'comment'   => 'RUT del cliente, sin puntos ni dígito verificador',
            'type'      => 'int',
            'length'    => 10,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => true,
            'fk'        => null
        ),
        'dv' => array(
            'name'      => 'Dv',
            'comment'   => 'Dígito verificador del rut',
            'type'      => 'char',
            'length'    => 1,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'razon_social' => array(
            'name'      => 'Razon Social',
            'comment'   => 'Nombre o razón social',
            'type'      => 'varchar',
            'length'    => 60,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'actividad_economica' => array(
            'name'      => 'Actividad Economica',
            'comment'   => 'Actividad económica del cliente (si posee una)',
            'type'      => 'int',
            'length'    => 10,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => array('table' => 'actividad_economica', 'column' => 'codigo')
        ),
        'email' => array(
            'name'      => 'Email',
            'comment'   => 'Correo electrónico principal de contacto',
            'type'      => 'varchar',
            'length'    => 50,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'telefono' => array(
            'name'      => 'Telefono',
            'comment'   => 'Teléfono principal de contacto',
            'type'      => 'varchar',
            'length'    => 20,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'direccion' => array(
            'name'      => 'Direccion',
            'comment'   => 'Dirección principal',
            'type'      => 'varchar',
            'length'    => 100,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'comuna' => array(
            'name'      => 'Comuna',
            'comment'   => 'Comuna de la dirección',
            'type'      => 'char',
            'length'    => 5,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => array('table' => 'comuna', 'column' => 'codigo')
        ),

    );

    // Comentario de la tabla en la base de datos
    public static $tableComment = 'Listado de clientes de la empresa';

    public static $fkNamespace = array(
        'Model_ActividadEconomica' => 'sowerphp\empresa\Sistema\General',
        'Model_Comuna' => 'sowerphp\app\Sistema\General\DivisionGeopolitica'
    ); ///< Namespaces que utiliza esta clase

}
