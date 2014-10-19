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
    '/feriados/listar/1/fecha/D' => array(
        'name' => 'Feriados',
        'desc' => 'Feriados o días que no se trabaja por cualquier motivo',
        'imag' => '/sistema/general/img/icons/48x48/feriado.png',
    ),
    '/actividad_economicas/listar' => array(
        'name' => 'Actividad económica',
        'desc' => 'Listado de actividades económicas del SII',
        'imag' => '/sistema/general/img/icons/48x48/actividad_economica.png',
    ),
    '/bancos/listar' => array(
        'name' => 'Bancos',
        'desc' => 'Listado de bancos de Chile',
        'imag' => '/sistema/general/img/icons/48x48/banco.png',
    ),
    '/division_geopolitica' => array(
        'name' => 'División geopolítica',
        'desc' => 'Regiones, provincias y comunas del país',
        'imag' => '/sistema/general/division_geopolitica/img/icons/48x48/region.png',
    ),
));
