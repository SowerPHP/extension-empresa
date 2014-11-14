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
namespace sowerphp\empresa\Rrhh;

/**
 * Clase para el controlador asociado a la tabla empleado de la base de
 * datos
 * Comentario de la tabla: Listado de empleados de la empresa
 * Esta clase permite controlar las acciones entre el modelo y vista para la
 * tabla empleado
 * @author SowerPHP Code Generator
 * @version 2014-10-19 21:38:18
 */
class Controller_Empleados extends \Controller_Maintainer
{

    protected $namespace = __NAMESPACE__; ///< Namespace del controlador y modelos asociados

    protected $columnsView = [
        'listar'=>['run', 'nombres', 'apellidos', 'cargo', 'activo']
    ]; ///< Columnas que se deben mostrar en las vistas

    /**
     * Método para permitir autorizar acciones
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]delaf.cl)
     * @version 2014-11-14
     */
    public function beforeFilter()
    {
        $this->Auth->allowWithLogin('cumpleanios');
        parent::beforeFilter();
    }

    /**
     * Acción para mostrar los cumpleaños de los empleados
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]delaf.cl)
     * @version 2014-11-14
     */
    public function cumpleanios($mostrar = 10, $desde = null)
    {
        if (!$desde) $desde = date('Y-m-d');
        $this->set([
            'desde' => $desde,
            'cumpleanios' => (new Model_Empleados())->cumpleanios($desde, $mostrar)
        ]);
    }

}
