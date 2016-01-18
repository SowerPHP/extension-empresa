<?php

// crear objeto PDF
$pdf = new \sowerphp\empresa\Rrhh\View_Helper_Credencial();

// agregar página
$pdf->AddPage();

// linea para doblar
$pdf->Line(79, 0, 79, 48);

// agregar imagen
if ($Empleado->foto_size) {
    $pdf->Image('@'.$Empleado->foto_data, 2, 5, 25, 25);
}

// agregar datos del empleado a la tarjeta
$pdf->SetFont('helvetica', 'B', 12);
$pdf->MultiTexto(\sowerphp\core\Configure::read('page.header.title'), 30, 5, 'L', 48);
$pdf->Ln(3);
$pdf->SetFont('helvetica', '', 11);
$pdf->MultiTexto($Empleado->nombres.' '.$Empleado->apellidos, 30, 0, 'L', 48);
$pdf->SetFont('helvetica', '', 9);
$pdf->MultiTexto($Empleado->getCargo()->cargo, 30, 0, 'L', 78);

// agregar datos del usuario, email, sucursal
$pdf->Texto($Empleado->getUsuario()->email, 2, 31);
$pdf->Ln();
if ($Empleado->telefono) {
    $pdf->Texto($Empleado->telefono, 2);
    $pdf->Ln();
}
if ($Empleado->sucursal) {
    $pdf->Texto($Empleado->getSucursal()->sucursal, 2);
    $pdf->Ln();
}
if ($Empleado->usuario) {
    $pdf->Texto($Empleado->getUsuario()->usuario, 2);
}
$pdf->SetFont('helvetica', 'B', 8);
$pdf->Texto($_url, 2, 0, 'R', 76);

// colocar código de barras
$barcodeobj = new TCPDFBarcode($Empleado->run, 'C128');
$pdf->Image('@'.$barcodeobj->getBarcodePNGData(), 89, 10, 59, 20);

// enviar PDF al cliente
$pdf->Output('credencial_empleado_'.$Empleado->run.'.pdf', 'I');
exit(0);
