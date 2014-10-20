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

// namespace del controlador
namespace sowerphp\empresa\Sistema\Empresa;

/**
 * Clase para el controlador asociado a la tabla cliente de la base de
 * datos
 * Comentario de la tabla: Listado de clientes de la empresa
 * Esta clase permite controlar las acciones entre el modelo y vista para la
 * tabla cliente
 * @author SowerPHP Code Generator
 * @version 2014-10-19 22:25:56
 */
class Controller_Clientes extends \Controller_Maintainer
{

    protected $namespace = __NAMESPACE__; ///< Namespace del controlador y modelos asociados

    protected $columnsView = [
        'listar'=>['rut', 'razon_social', 'email', 'telefono']
    ]; ///< Columnas que se deben mostrar en las vistas

}
