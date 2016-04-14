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

namespace sowerphp\empresa\Rrhh;

/**
 * Clase para generar credenciales en PDF
 * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]delaf.cl)
 * @version 2015-04-24
 */
class View_Helper_Credencial extends \sowerphp\general\View_Helper_PDF
{

    /**
     * Constructor de la clase
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]delaf.cl)
     * @version 2015-04-25
     */
    public function __construct()
    {
        parent::__construct('L', 'mm', [48, 158]);
        $this->setMargins(0,0,0);
        $this->setPageOrientation('L', false, 0);
    }

    /**
     * Método que sobreescribe la cabecera del PDF
     */
    public function Header()
    {
    }

    /**
     * Método que sobreescribe el pie de página del PDF
     */
    public function Footer()
    {
    }

}
