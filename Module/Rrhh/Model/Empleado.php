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
 * @version 2015-04-24 20:48:07
 */
class Model_Empleado extends \Model_App
{

    // Datos para la conexión a la base de datos
    protected $_database = 'default'; ///< Base de datos del modelo
    protected $_table = 'empleado'; ///< Tabla del modelo

    // Atributos de la clase (columnas en la base de datos)
    public $run; ///< RUN de la persona, sin puntos ni dígito verificador: int(10) NOT NULL DEFAULT '' PK
    public $dv; ///< Dígito verificador del RUN: char(1) NOT NULL DEFAULT ''
    public $sexo; ///< Sexo del empleado ("m" o "f"): char(1) NOT NULL DEFAULT 'm'
    public $nombres; ///< Nombres de la persona: varchar(30) NOT NULL DEFAULT ''
    public $apellidos; ///< Apellidos de la persona: varchar(30) NOT NULL DEFAULT ''
    public $telefono; ///< Teléfono principal del empleado: varchar(20) NULL DEFAULT ''
    public $fecha_nacimiento; ///< Fecha de nacimiento de la persona: date() NULL DEFAULT ''
    public $sueldo; ///< Sueldo bruto base del empleado: int(10) NULL DEFAULT ''
    public $contrato_tipo; ///< Tipo de contrato: char(1) NULL DEFAULT '' FK:contrato_tipo.codigo
    public $fecha_ingreso; ///< date() NULL DEFAULT ''
    public $fecha_egreso; ///< Fecha de egreso de la empresa (ej: fin contrato): date() NULL DEFAULT ''
    public $sucursal; ///< Sucursal en la que trabaja este empleado: varchar(10) NULL DEFAULT '' FK:sucursal.id
    public $cargo; ///< Cargo que ocupa dentro de la empresa: int(10) NULL DEFAULT '' FK:cargo.id
    public $foto_data; ///< Fotografía de la persona: mediumblob(16777215) NULL DEFAULT ''
    public $foto_name; ///< Nombre de la fotografía: varchar(100) NULL DEFAULT ''
    public $foto_type; ///< Mimetype de la fotografía: varchar(10) NULL DEFAULT ''
    public $foto_size; ///< Tamaño de la fotografía: int(10) NULL DEFAULT ''
    public $usuario; ///< Usuario del sistema (si es que tiene uno asignado): int(10) NULL DEFAULT '' FK:usuario.id
    public $activo; ///< Indica si la persona aun pertenece a la empresa: tinyint(3) NOT NULL DEFAULT '1'
    public $afp; ///< AFP del empleado: smallint(5) NULL DEFAULT '' FK:afp.codigo
    public $salud; ///< Tipo de salud del empleado (Fonasa o Isapre): smallint(5) NULL DEFAULT '' FK:salud.codigo

    // Información de las columnas de la tabla en la base de datos
    public static $columnsInfo = array(
        'run' => array(
            'name'      => 'Run',
            'comment'   => 'RUN de la persona, sin puntos ni dígito verificador',
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
            'comment'   => 'Dígito verificador del RUN',
            'type'      => 'char',
            'length'    => 1,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'sexo' => array(
            'name'      => 'Sexo',
            'comment'   => 'Sexo del empleado ("m" o "f")',
            'type'      => 'char',
            'length'    => 1,
            'null'      => false,
            'default'   => 'm',
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
        'telefono' => array(
            'name'      => 'Telefono',
            'comment'   => 'Teléfono principal del empleado',
            'type'      => 'varchar',
            'length'    => 20,
            'null'      => true,
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
        'sueldo' => array(
            'name'      => 'Sueldo',
            'comment'   => 'Sueldo bruto base del empleado',
            'type'      => 'int',
            'length'    => 10,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'contrato_tipo' => array(
            'name'      => 'Contrato Tipo',
            'comment'   => 'Tipo de contrato',
            'type'      => 'char',
            'length'    => 1,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => array('table' => 'contrato_tipo', 'column' => 'codigo')
        ),
        'fecha_ingreso' => array(
            'name'      => 'Fecha Ingreso',
            'comment'   => '',
            'type'      => 'date',
            'length'    => null,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'fecha_egreso' => array(
            'name'      => 'Fecha Egreso',
            'comment'   => 'Fecha de egreso de la empresa (ej: fin contrato)',
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
            'type'      => 'int',
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
            'name'      => 'Foto Name',
            'comment'   => 'Nombre de la fotografía',
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
            'type'      => 'int',
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
        'afp' => array(
            'name'      => 'Afp',
            'comment'   => 'AFP del empleado',
            'type'      => 'smallint',
            'length'    => 5,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => array('table' => 'afp', 'column' => 'codigo')
        ),
        'salud' => array(
            'name'      => 'Salud',
            'comment'   => 'Tipo de salud del empleado (Fonasa o Isapre)',
            'type'      => 'smallint',
            'length'    => 5,
            'null'      => true,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => array('table' => 'salud', 'column' => 'codigo')
        ),

    );

    // Comentario de la tabla en la base de datos
    public static $tableComment = 'Listado de empleados de la empresa';

    public static $fkNamespace = array(
        'Model_ContratoTipo' => 'sowerphp\empresa\Rrhh\Admin',
        'Model_Sucursal' => 'sowerphp\empresa\Sistema\Empresa',
        'Model_Cargo' => 'sowerphp\empresa\Rrhh\Admin',
        'Model_Usuario' => 'sowerphp\app\Sistema\Usuarios',
        'Model_Afp' => 'sowerphp\empresa\Rrhh\Admin',
        'Model_Salud' => 'sowerphp\empresa\Rrhh\Admin'
    ); ///< Namespaces que utiliza esta clase

}
