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

// Menú para el módulo
Configure::write('nav.module', array(
    '/empleados/listar?search=activo:1' => array(
        'name' => 'Empleados',
        'imag' => '/rrhh/img/icons/48x48/empleados.png',
    ),
    '/empleados/edad' => array(
        'name' => 'Grupo etáreo',
        'imag' => '/rrhh/img/icons/48x48/edad.png',
    ),
    '/empleados/cumpleanios' => array(
        'name' => 'Cumpleaños',
        'imag' => '/rrhh/img/icons/48x48/cumpleanios.png',
    ),
));
