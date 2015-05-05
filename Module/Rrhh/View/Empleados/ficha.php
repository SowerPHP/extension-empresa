<?php

// tratar de usar clase personalizada de la aplicación
if (class_exists('\website\View_Helper_PDF')) {
    $pdf = new \website\View_Helper_PDF();
    if (isset($pdf->titulo))
        $pdf->titulo = $Empleado->nombres.' '.$Empleado->apellidos;
    else
        unset($pdf);
}

// si no existe el objeto del PDF se crea con la clase estándar
if (!isset($pdf)) {
    $pdf = new \sowerphp\general\View_Helper_PDF();
    $pdf->setStandardHeaderFooter(
        DIR_WEBSITE.'/webroot/img/logo.png',
        'Ficha de empleado',
        $Empleado->nombres.' '.$Empleado->apellidos
    );
}

// agregar página
$pdf->AddPage();
$pdf->setXY($pdf->getX(), $pdf->getY()+5);

// agregar imagen
if ($Empleado->foto_size) {
    $pdf->Image('@'.$Empleado->foto_data, 160, $pdf->getX()+25, 0, 0, '', '', 'R');
}

// agregar datos personales
$pdf->Texto('Nombre', 0);
$pdf->Texto(':', 52);
$pdf->Texto($Empleado->nombres.' '.$Empleado->apellidos, 55);
$pdf->Ln();
$pdf->Texto('RUN', 0);
$pdf->Texto(':', 52);
$pdf->Texto(num($Empleado->run).'-'.$Empleado->dv, 55);
$pdf->Ln();
$pdf->Texto('Sexo', 0);
$pdf->Texto(':', 52);
$pdf->Texto($Empleado->sexo=='m' ? 'Masculino' : 'Femenino', 55);
$pdf->Ln();
$pdf->Texto('Teléfono', 0);
$pdf->Texto(':', 52);
$pdf->Texto($Empleado->telefono, 55);
$pdf->Ln();
$pdf->Texto('Edad', 0);
$pdf->Texto(':', 52);
$pdf->Texto(\sowerphp\general\Utility_Date::age($Empleado->fecha_nacimiento).' años ('.$Empleado->fecha_nacimiento.')', 55);
$pdf->Ln();
$pdf->Ln();

// agregar datos empresariales
$pdf->Texto('Sueldo', 0);
$pdf->Texto(':', 52);
$pdf->Texto(num($Empleado->sueldo), 55);
$pdf->Ln();
$pdf->Texto('Tipo de contrato', 0);
$pdf->Texto(':', 52);
$pdf->Texto($Empleado->getContratoTipo()->tipo, 55);
$pdf->Ln();
$pdf->Texto('Vigencia', 0);
$pdf->Texto(':', 52);
$pdf->Texto($Empleado->fecha_ingreso.($Empleado->fecha_egreso?(' a '.$Empleado->fecha_egreso):'').(!$Empleado->activo?(' (no activo)'):''), 55);
$pdf->Ln();
$pdf->Texto('Sucursal', 0);
$pdf->Texto(':', 52);
$pdf->Texto($Empleado->getSucursal()->sucursal, 55);
$pdf->Ln();
$pdf->Texto('Cargo', 0);
$pdf->Texto(':', 52);
$pdf->Texto($Empleado->getCargo()->cargo, 55);
$pdf->Ln();
$pdf->Ln();

// agregar datos previsionales
$pdf->Texto('AFP', 0);
$pdf->Texto(':', 52);
$pdf->Texto($Empleado->getAfp()->afp.' (descuento: '.$Empleado->getAfp()->descuento.'%)', 55);
$pdf->Ln();
$pdf->Texto('Salud', 0);
$pdf->Texto(':', 52);
$pdf->Texto($Empleado->getSalud()->salud, 55);
$pdf->Ln();
$pdf->Ln();

// agregar datos del usuario asociado
if ($Empleado->usuario) {
    $pdf->Texto('Usuario', 0);
    $pdf->Texto(':', 52);
    $pdf->Texto($Empleado->getUsuario()->usuario.' - '.$Empleado->getUsuario()->nombre, 55);
    $pdf->Ln();
    $pdf->Texto('Email', 0);
    $pdf->Texto(':', 52);
    $pdf->Texto($Empleado->getUsuario()->getEmail(), 55);
    $pdf->Ln();
    $pdf->Texto('Grupos', 0);
    $pdf->Texto(':', 52);
    $pdf->MultiTexto(implode(', ', $Empleado->getUsuario()->groups()), 55);
    $pdf->Texto('Último ingreso', 0);
    $pdf->Texto(':', 52);
    $pdf->Texto($Empleado->getUsuario()->ultimo_ingreso_fecha_hora.' desde '.$Empleado->getUsuario()->ultimo_ingreso_desde, 55);
    $pdf->Ln();
    $pdf->Ln();
}

// enviar PDF al cliente
$pdf->Output('ficha_empleado_'.$Empleado->run.'.pdf', 'I');
exit(0);
