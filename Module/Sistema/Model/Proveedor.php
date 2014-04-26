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
namespace sowerphp\empresa\Sistema;

/**
 * Clase para mapear la tabla proveedor de la base de datos
 * Comentario de la tabla: Listado de proveedores de la empresa
 * Esta clase permite trabajar sobre un registro de la tabla proveedor
 * @author SowerPHP Code Generator
 * @version 2014-04-26 01:33:07
 */
class Model_Proveedor extends \Model_App
{

    // Datos para la conexión a la base de datos
    protected $_database = 'default'; ///< Base de datos del modelo
    protected $_table = 'proveedor'; ///< Tabla del modelo

    // Atributos de la clase (columnas en la base de datos)
    public $rut; ///< RUT del proveedor, sin puntos ni dígito verificador: integer(32) NOT NULL DEFAULT '' PK
    public $dv; ///< Dígito verificador del rut: character(1) NOT NULL DEFAULT ''
    public $razon_social; ///< Nombre o razón social: character varying(60) NOT NULL DEFAULT ''
    public $email; ///< Correo electrónico de contacto: character varying(50) NULL DEFAULT ''
    public $telefono; ///< Teléfono de contacto: character varying(20) NULL DEFAULT ''
    public $direccion; ///< Dirección de contacto: character varying(100) NULL DEFAULT ''
    public $comuna; ///< Comuna de contacto: character(5) NULL DEFAULT '' FK:comuna.codigo
    public $web; ///< Página web del proveedor: character varying(50) NULL DEFAULT ''

    // Información de las columnas de la tabla en la base de datos
    public static $columnsInfo = array(
        'rut' => array(
            'name'      => 'Rut',
            'comment'   => 'RUT del proveedor, sin puntos ni dígito verificador',
            'type'      => 'integer',
            'length'    => 32,
            'null'      => false,
            'default'   => "",
            'auto'      => false,
            'pk'        => true,
            'fk'        => null
        ),
        'dv' => array(
            'name'      => 'Dv',
            'comment'   => 'Dígito verificador del rut',
            'type'      => 'character',
            'length'    => 1,
            'null'      => false,
            'default'   => "",
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'razon_social' => array(
            'name'      => 'Razon Social',
            'comment'   => 'Nombre o razón social',
            'type'      => 'character varying',
            'length'    => 60,
            'null'      => false,
            'default'   => "",
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'email' => array(
            'name'      => 'Email',
            'comment'   => 'Correo electrónico de contacto',
            'type'      => 'character varying',
            'length'    => 50,
            'null'      => true,
            'default'   => "",
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'telefono' => array(
            'name'      => 'Telefono',
            'comment'   => 'Teléfono de contacto',
            'type'      => 'character varying',
            'length'    => 20,
            'null'      => true,
            'default'   => "",
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'direccion' => array(
            'name'      => 'Direccion',
            'comment'   => 'Dirección de contacto',
            'type'      => 'character varying',
            'length'    => 100,
            'null'      => true,
            'default'   => "",
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),
        'comuna' => array(
            'name'      => 'Comuna',
            'comment'   => 'Comuna de contacto',
            'type'      => 'character',
            'length'    => 5,
            'null'      => true,
            'default'   => "",
            'auto'      => false,
            'pk'        => false,
            'fk'        => array('table' => 'comuna', 'column' => 'codigo')
        ),
        'web' => array(
            'name'      => 'Web',
            'comment'   => 'Página web del proveedor',
            'type'      => 'character varying',
            'length'    => 50,
            'null'      => true,
            'default'   => "",
            'auto'      => false,
            'pk'        => false,
            'fk'        => null
        ),

    );

    // Comentario de la tabla en la base de datos
    public static $tableComment = 'Listado de proveedores de la empresa';

    public static $fkNamespace = array(
        'Model_Comuna' => 'sowerphp\empresa\Sistema\General\DivisionGeopolitica'
    ); ///< Namespaces que utiliza esta clase

}
