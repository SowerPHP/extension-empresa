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

/**
 * @file basics.php
 * Funciones de la extensión empresa
 * @version 2014-02-26
 */

/**
 * Transforma un rut a un formato con solo los numeros
 * @param rut Rut que se quiere transformar (puede venir con puntos, comas, si tiene digito verificador DEBE tener guion)
 * @param quitarDV Si es true el digito verificador se quita, sino se mantiene
 * @return Rut formateado
 * @author DeLaF, esteban[at]delaf.cl
 * @version 2014-05-08
 */
function rut ($rut, $quitarDV = true)
{
    $rut = str_replace(['.', ','], '', $rut);
    if (strpos($rut, '-')) {
        if($quitarDV) {
            $aux = explode('-', $rut);
            return (int)array_shift($aux);
        }
        return (int)str_replace('-', '', $rut);
    } else {
        $j=0;
        $flag = false;
        $largoRut = strlen($rut)-1;
        $rutNew = '';
        for($i=0; $i<$largoRut; ++$i) {
            if($flag || $rut[$i]) {
                $flag = true;
                $rutNew .= $rut[$i];
                ++$j;
            }
        }
        $rutNew = number_format((int)$rutNew, 0, '', '.');
        return $rutNew.'-'.$rut[$largoRut];
    }
}

/**
 * Calcula el dígito verificador de un rut
 * @param r Rut al que se calculará el dígito verificador
 * @return Dígito verificar
 * @author Desconocido
 * @version 2010-05-23
 */
function rutDV ($r)
{
    $r = str_replace('.', '', $r);
    $r = str_replace(',', '', $r);
    $s=1;
    for ($m=0;$r!=0;$r/=10)
        $s=($s+$r%10*(9-$m++%6))%11;
    return strtoupper(chr($s?$s+47:75));
}
