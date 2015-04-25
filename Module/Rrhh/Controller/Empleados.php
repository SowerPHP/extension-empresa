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
 * @version 2015-04-24
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
        $this->Auth->allowWithLogin('d', 'cumpleanios');
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

    /**
     * Método para descargar un archivo desde la base de datos
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]delaf.cl)
     * @version 2014-11-14
     */
    public function d ($campo, $run)
    {
        // si se pide un campo diferente a la foto se usa la acción de la clase
        // madre
        if ($campo!='foto') {
            parent::d($campo, $run);
            return;
        }
        // si el campo que se solicita no existe error
        if (!isset(Model_Empleado::$columnsInfo[$campo.'_data'])) {
            \sowerphp\core\Model_Datasource_Session::message(
                'Campo '.$campo.' no exite', 'error'
            );
            $this->redirect(
                $this->module_url.$this->request->params['controller'].'/listar'
            );
        }
        // si el registro que se quiere descargar el campo no existe error
        $Obj = new Model_Empleado($run);
        if(!$Obj->exists()) {
            \sowerphp\core\Model_Datasource_Session::message(
                'Registro ('.$run.') no existe. No se puede obtener '.$campo,
                'error'
            );
            $this->redirect(
                $this->module_url.$this->request->params['controller'].'/listar'
            );
        }
        // entregar archivo
        if ($Obj->{$campo.'_size'}==0) {
            $f = \sowerphp\core\App::location('Module/Rrhh/webroot/img/icons/100x100/empleado.png');
            $this->response->sendFile($f);
        } else {
            $this->response->sendFile([
                'name' => $Obj->{$campo.'_name'},
                'type' => $Obj->{$campo.'_type'},
                'size' => $Obj->{$campo.'_size'},
                'data' => $Obj->{$campo.'_data'},
            ]);
        }
    }

    /**
     * Acción que permite crear un nuevo empleado
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]delaf.cl)
     * @version 2015-04-24
     */
    public function crear()
    {
        if (isset($_POST['submit']) and isset($_FILES['foto']) and !$_FILES['foto']['error']) {
            \sowerphp\general\Utility_Image::resizeOnFile($_FILES['foto']['tmp_name'], 100, 100);
        }
        parent::crear();
    }

    /**
     * Acción que permite editar un empleado
     * @param run RUN del empleado que se desea editar
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]delaf.cl)
     * @version 2015-04-24
     */
    public function editar($run)
    {
        if (isset($_POST['submit']) and isset($_FILES['foto']) and !$_FILES['foto']['error']) {
            \sowerphp\general\Utility_Image::resizeOnFile($_FILES['foto']['tmp_name'], 100, 100);
        }
        parent::editar($run);
    }

    /**
     * Acción que permite generar la credencial de un empleado
     * @param run RUN del empleado que se desea generar su credencial
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]delaf.cl)
     * @version 2015-04-24
     */
    public function credencial($run)
    {
        $Empleado = new Model_Empleado($run);
        if (!$Empleado->exists()) {
            \sowerphp\core\Model_Datasource_Session::message('Empleado solicitado no existe', 'error');
            $this->redirect('/rrhh/empleados/listar');
        }
        $this->set('Empleado', $Empleado);
    }

    /**
     * Acción que permite generar la ficha de un empleado
     * @param run RUN del empleado que se desea generar su ficha
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]delaf.cl)
     * @version 2015-04-24
     */
    public function ficha($run)
    {
        $this->credencial($run);
    }

}
