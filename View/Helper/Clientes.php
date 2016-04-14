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

namespace sowerphp\empresa;

/**
 * Clase que permite renderizar una vista para un listado de clientes y sus
 * datos.
 * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]delaf.cl)
 * @version 2015-03-25
 */
class View_Helper_Clientes
{

    /**
     * Método que genera los recuadros con los clientes y sus datos
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]delaf.cl)
     * @version 2015-03-25
     */
    public static function generate($clientes, $columnas = 4)
    {
        $grid_cols = 12 / $columnas;
        $i = 0;
        echo '<div class="row">';
        foreach ($clientes as $cliente => &$info) {
            if ($i++%$columnas==0) {
                echo '</div><div class="row">';
            }
            echo '<div class="col-md-',$grid_cols,'">';
            echo '<div class="thumbnail">';
            echo '<img src="',_BASE,'/img/pages/clientes/',$info['imag'],'" alt="Logo ',$cliente,'">';
            echo '<div class="caption">';
            echo '<p>',$info['desc'],'</p>';
            echo '<p><a href="#" tabindex="0" class="btn btn-primary" role="button" data-toggle="popover" data-trigger="focus" title="',$cliente,'" data-placement="top" data-content="',implode('. ', $info['info']),'" onclick="return false" onmouseover="$(this).popover(\'show\')" onmouseout="$(this).popover(\'hide\')">servicios prestados &raquo;</a></p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>',"\n";
        echo '<script type="text/javascript">$(document).ready(function(){$(\'[data-toggle="popover"]\').popover();});</script>';
    }

}
