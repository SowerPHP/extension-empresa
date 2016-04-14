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
namespace sowerphp\empresa\Rrhh;

/**
 * Clase para mapear la tabla empleado de la base de datos
 * Comentario de la tabla: Listado de empleados de la empresa
 * Esta clase permite trabajar sobre un conjunto de registros de la tabla empleado
 * @author SowerPHP Code Generator
 * @version 2014-10-19 21:38:18
 */
class Model_Empleados extends \Model_Plural_App
{

    // Datos para la conexión a la base de datos
    protected $_database = 'default'; ///< Base de datos del modelo
    protected $_table = 'empleado'; ///< Tabla del modelo

    /**
     * Método que entrega el listado de empleados activos
     * @return Tabla con los empleados activos
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2014-10-20
     */
    public function getList()
    {
        return $this->db->getTable('
            SELECT run, CONCAT(nombres, \' \',apellidos)
            FROM empleado
            WHERE activo = 1
        ');
    }

    /**
     * Método que entrega un empleado a partir de su nombre de usuario
     * @return Model_Empleado o null si no se encontró
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2014-11-14
     */
    public function getByUser($user)
    {
        if (is_string($user)) {
            $Usuario = new \sowerphp\app\Sistema\Usuarios\Model_Usuario($user);
            if (!$Usuario->exists())
                return null;
            $user = $Usuario->id;
        }
        $this->setWhereStatement(['usuario = :usuario'], [':usuario'=>$user]);
        $empleados = $this->getObjects();
        return !empty($empleados) ? $empleados[0] : null;
    }

    /**
     * Método que entrega el listado de cumpleaños futuros a partir de una fecha
     * Se entrega una tabla con el día mes y año del próximo cumpleaños de la
     * persona, si se solicitan más cumpleaños que los que faltan para que el
     * año termine entonces se mostrarán cumpleaños del año siguiente.
     * @param Desde que fecha mostrar los cumpleaños
     * @param mostrar Cantiad de cumpleaños que se deben mostrar
     * @return Tabla con el listado de cumpleaños
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2014-11-14
     */
    public function cumpleanios($desde, $mostrar)
    {
        $aux = $this->db->getTable('
            SELECT
                CONCAT(nombres, \' \', apellidos) AS nombre,
                fecha_nacimiento
            FROM empleado
            WHERE fecha_nacimiento is not null
        ');
        $cumpleanios = [];
        $desdeAnio = substr($desde, 0, 4);
        $desde = substr($desde, 5);
        foreach ($aux as &$c) {
            $fecha = substr($c['fecha_nacimiento'], 5);
            if ($fecha >= $desde) {
                $cumpleanio = $desdeAnio.'-'.$fecha;
            } else {
                $cumpleanio = ($desdeAnio+1).'-'.$fecha;
            }
            $cumpleanios[] = [
                'cumpleanio' => $cumpleanio,
                'nombre' => $c['nombre']
            ];
        }
        array_multisort($cumpleanios);
        return array_slice($cumpleanios, 0, $mostrar);
    }

}
