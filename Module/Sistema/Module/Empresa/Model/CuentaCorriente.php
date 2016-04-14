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
 * Clase para mapear la tabla cuenta_corriente de la base de datos
 * Comentario de la tabla: Cuentas corrientes de la empresa
 * Esta clase permite trabajar sobre un registro de la tabla cuenta_corriente
 * @author SowerPHP Code Generator
 * @version 2014-10-20 09:55:37
 */
class Model_CuentaCorriente extends \Model_App
{

    // Datos para la conexión a la base de datos
    protected $_database = 'default'; ///< Base de datos del modelo
    protected $_table = 'cuenta_corriente'; ///< Tabla del modelo

    // Atributos de la clase (columnas en la base de datos)
    public $codigo; ///< Código único de la cuenta corriente: varchar(20)(20) NOT NULL DEFAULT '' PK
    public $banco; ///< Identificador de la cuenta corriente: char(3)(3) NOT NULL DEFAULT '' FK:banco.codigo
    public $cuenta_corriente; ///< Número de cuenta corriente: varchar(20)(20) NOT NULL DEFAULT ''
    public $activa; ///< Indica si la cuenta corriente está o no activa: tinyint(1)(3) NOT NULL DEFAULT '1'

    // Información de las columnas de la tabla en la base de datos
    public static $columnsInfo = array(
        'codigo' => array(
            'name'      => 'Codigo',
            'comment'   => 'Código único de la cuenta corriente',
            'type'      => 'varchar',
            'length'    => 20,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => true,
            'fk'        => null
        ),
        'banco' => array(
            'name'      => 'Banco',
            'comment'   => 'Identificador de la cuenta corriente',
            'type'      => 'char',
            'length'    => 3,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => array('table' => 'banco', 'column' => 'codigo')
        ),
        'cuenta_corriente' => array(
            'name'      => 'Cuenta Corriente',
            'comment'   => 'Número de cuenta corriente',
            'type'      => 'varchar',
            'length'    => 20,
            'null'      => false,
            'default'   => '',
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'activa' => array(
            'name'      => 'Activa',
            'comment'   => 'Indica si la cuenta corriente está o no activa',
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
    public static $tableComment = 'Cuentas corrientes de la empresa';

    public static $fkNamespace = array(
        'Model_Banco' => 'sowerphp\empresa\Sistema\General'
    ); ///< Namespaces que utiliza esta clase

}
