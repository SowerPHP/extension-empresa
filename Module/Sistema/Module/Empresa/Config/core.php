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
    '/clientes/listar' => array(
        'name' => 'Clientes',
        'desc' => 'Mantenedor de clientes',
        'imag' => '/sistema/empresa/img/icons/48x48/cliente.png',
    ),
    '/proveedores/listar' => array(
        'name' => 'Proveedores',
        'desc' => 'Mantenedor de proveedores',
        'imag' => '/sistema/empresa/img/icons/48x48/proveedor.png',
    ),
    '/cargos/listar' => array(
        'name' => 'Cargos',
        'imag' => '/sistema/empresa/img/icons/48x48/cargo.png',
    ),
    '/areas/listar' => array(
        'name' => 'Áreas',
        'imag' => '/sistema/empresa/img/icons/48x48/area.png',
    ),
    '/sucursales/listar/1/orden/A' => array(
        'name' => 'Sucursales',
        'imag' => '/sistema/empresa/img/icons/48x48/sucursal.png',
    ),
    '/cuenta_corrientes/listar?search=activa:1' => array(
        'name' => 'Cuentas corrientes',
        'imag' => '/sistema/empresa/img/icons/48x48/cuenta_corriente.png',
    ),
));
