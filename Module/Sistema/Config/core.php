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
    '/empresa' => array(
        'name' => 'Empresa',
        'desc' => 'Configuración y parámetros de la empresa',
        'icon' => 'fa fa-building',
    ),
    '/usuarios' => array(
        'name' => 'Usuarios',
        'desc' => 'Mantenedor de usuarios y grupos del sistema',
        'icon' => 'fa fa-users',
    ),
    '/enlaces' => array(
        'name' => 'Enlaces',
        'desc' => 'Mantenedor de enlaces del sistema',
        'icon' => 'fa fa-link',
    ),
    '/general' => array(
        'name' => 'Configuración general',
        'desc' => 'Módulo de configuraciones generales',
        'icon' => 'fa fa-cogs',
    ),
    '/logs' => array(
        'name' => 'Logs',
        'desc' => 'Eventos registrados por el sistema',
        'icon' => 'fa fa-history',
    ),
));
