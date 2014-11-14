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
namespace sowerphp\empresa\Rrhh;

/**
 * Clase para mapear la tabla empleado de la base de datos
 * Comentario de la tabla: Listado de empleados de la empresa
 * Esta clase permite trabajar sobre un registro de la tabla empleado
 * @author SowerPHP Code Generator
 * @version 2014-10-19 21:38:18
 */
class Model_Empleado extends \Model_App
{

    // Datos para la conexión a la base de datos
    protected $_database = 'default'; ///< Base de datos del modelo
    protected $_table = 'empleado'; ///< Tabla del modelo

    // Atributos de la clase (columnas en la base de datos)
    public $run; ///< RUN de la persona, sin puntos ni dígito verificador: int(10) unsigned(10) NOT NULL DEFAULT '' PK
    public $dv; ///< Dígito verificador del RUN: char(1)(1) NOT NULL DEFAULT ''
    public $nombres; ///< Nombres de la persona: varchar(30)(30) NOT NULL DEFAULT ''
    public $apellidos; ///< Apellidos de la persona: varchar(30)(30) NOT NULL DEFAULT ''
    public $fecha_nacimiento; ///< Fecha de nacimiento de la persona: date() NULL DEFAULT ''
    public $fecha_ingreso; ///< Fecha de ingreso a la empresa: date() NULL DEFAULT ''
    public $sucursal; ///< Sucursal en la que trabaja este empleado: varchar(10)(10) NULL DEFAULT '' FK:sucursal.id
    public $cargo; ///< Cargo que ocupa dentro de la empresa: int(10) unsigned(10) NULL DEFAULT '' FK:cargo.id
    public $foto_data; ///< Fotografía de la persona: mediumblob(16777215) NULL DEFAULT ''
    public $foto_name; ///< Nombre de la fotografía: varchar(100)(100) NULL DEFAULT ''
    public $foto_type; ///< Mimetype de la fotografía: varchar(10)(10) NULL DEFAULT ''
    public $foto_size; ///< Tamaño de la fotografía: int(11)(10) NULL DEFAULT ''
    public $usuario; ///< Usuario del sistema (si es que tiene uno asignado): int(10) unsigned(10) NULL DEFAULT '' FK:usuario.id
    public $activo; ///< Indica si la persona aun pertenece a la empresa: tinyint(1)(3) NOT NULL DEFAULT '1'

    // Información de las columnas de la tabla en la base de datos
    public static $columnsInfo = array(
        'run' => array(
            'name'      => 'RUN',
            'comment'   => 'RUN de la persona, sin puntos ni dígito verificador',
            'type'      => 'int unsigned',
            'length'    => 10,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => true,
            'fk'        => null
        ),
        'dv' => array(
            'name'      => 'DV',
            'comment'   => 'Dígito verificador del RUN',
            'type'      => 'char',
            'length'    => 1,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'nombres' => array(
            'name'      => 'Nombres',
            'comment'   => 'Nombres de la persona',
            'type'      => 'varchar',
            'length'    => 30,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'apellidos' => array(
            'name'      => 'Apellidos',
            'comment'   => 'Apellidos de la persona',
            'type'      => 'varchar',
            'length'    => 30,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'fecha_nacimiento' => array(
            'name'      => 'Fecha Nacimiento',
            'comment'   => 'Fecha de nacimiento de la persona',
            'type'      => 'date',
            'length'    => null,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'fecha_ingreso' => array(
            'name'      => 'Fecha Ingreso',
            'comment'   => 'Fecha de ingreso a la empresa',
            'type'      => 'date',
            'length'    => null,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'sucursal' => array(
            'name'      => 'Sucursal',
            'comment'   => 'Sucursal en la que trabaja este empleado',
            'type'      => 'varchar',
            'length'    => 10,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => array('table' => 'sucursal', 'column' => 'id')
        ),
        'cargo' => array(
            'name'      => 'Cargo',
            'comment'   => 'Cargo que ocupa dentro de la empresa',
            'type'      => 'int unsigned',
            'length'    => 10,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => array('table' => 'cargo', 'column' => 'id')
        ),
        'foto_data' => array(
            'name'      => 'Foto Data',
            'comment'   => 'Fotografía de la persona',
            'type'      => 'mediumblob',
            'length'    => 16777215,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'foto_name' => array(
            'name'      => 'Fotografía',
            'comment'   => 'Fotografía del empleado',
            'type'      => 'varchar',
            'length'    => 100,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'foto_type' => array(
            'name'      => 'Foto Type',
            'comment'   => 'Mimetype de la fotografía',
            'type'      => 'varchar',
            'length'    => 10,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'foto_size' => array(
            'name'      => 'Foto Size',
            'comment'   => 'Tamaño de la fotografía',
            'type'      => 'int',
            'length'    => 10,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'usuario' => array(
            'name'      => 'Usuario',
            'comment'   => 'Usuario del sistema (si es que tiene uno asignado)',
            'type'      => 'int unsigned',
            'length'    => 10,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => array('table' => 'usuario', 'column' => 'id')
        ),
        'activo' => array(
            'name'      => 'Activo',
            'comment'   => 'Indica si la persona aun pertenece a la empresa',
            'type'      => 'tinyint',
            'length'    => 3,
            'null'      => false,
            'default'   => '1',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),

    );

    // Comentario de la tabla en la base de datos
    public static $tableComment = 'Listado de empleados de la empresa';

    public static $fkNamespace = array(
        'Model_Sucursal' => 'sowerphp\empresa\Sistema\Empresa',
        'Model_Cargo' => 'sowerphp\empresa\Sistema\Empresa',
        'Model_Usuario' => 'sowerphp\app\Sistema\Usuarios'
    ); ///< Namespaces que utiliza esta clase

}
