<?php

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("Times", "", 12);


$pdf->Cell($w * 12, $h, "$p", 0, $ln, $align, $fill, $link);
$pdf->Ln();
$pdf->Cell($w * 6, $h, "1", $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 6, $h, _tr("Clientse"), $border, $ln, $align, $fill, $link);
$pdf->Ln();

$pdf->Cell($w * 6, $h, "#", $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 6, $h, _tr("Cliente"), $border, $ln, $align, $fill, $link);
$pdf->Ln();

$pdf->Cell($w * 6, $h, "#", $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 6, $h, _tr("Cliente"), $border, $ln, $align, $fill, $link);
$pdf->Ln();

$pdf->Cell($w * 6, $h, "#", $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 6, $h, _tr("Cliente"), $border, $ln, $align, $fill, $link);
$pdf->Ln();

$pdf->Cell($w * 6, $h, "#", $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 6, $h, _tr("Cliente"), $border, $ln, $align, $fill, $link);
$pdf->Ln(10);



$pdf->Cell($w * 1, $h, _tr("Cantidad"), $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 6, $h, _tr("Descripcion"), $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 2, $h, _tr("Precio U."), $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 1, $h, _tr("iva"), $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 2, $h, _tr("Subtotal"), $border, $ln, $align, $fill, $link);




$pdf->Ln();
//********************
$i = 1;
$facturas_ref = 44;
include "./factura_items/modelos/pdf.php";
while ($factura_items = mysql_fetch_array($sql)) {
    include "./factura_items/reg/reg.php";

    $pdf->Cell($w * 1, $h, $factura_items_cantidad,         $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 6, $h, $factura_items_descripcion,      $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 2, $h, moneda($factura_items_valor),            $border, $ln, 'R', $fill, $link);
    $pdf->Cell($w * 1, $h, "$factura_items_porcentaje_iva%", $border, $ln, 'C', $fill, $link);
    $pdf->Cell($w * 2, $h, moneda($factura_items_valor),            $border, $ln, 'R', $fill, $link);
    $pdf->Ln();
    $i++;
}



$pdf->Cell($w * 10, $h, _tr("Subtotal"), '', $ln, 'R', $fill, $link);
$pdf->Cell($w * 02, $h, '120,20', $border, $ln, 'R', $fill, $link);
$pdf->Ln();

$pdf->Cell($w * 10, $h, _tr("Iva"), '', $ln, 'R', $fill, $link);
$pdf->Cell($w * 02, $h, '120,20', $border, $ln, 'R', $fill, $link);
$pdf->Ln();



$pdf->Cell($w * 10, $h, _tr("Pagado"), '', $ln, 'R', $fill, $link);
$pdf->Cell($w * 02, $h, '120,20', $border, $ln, 'R', $fill, $link);
$pdf->Ln();




$pdf->Cell($w * 10, $h, _tr("A pagar"), '', $ln, 'R', $fill, $link);
$pdf->Cell($w * 02, $h, '120,20', $border, $ln, 'R', $fill, $link);
$pdf->Ln();
$pdf->Ln();



$pdf->Cell($w * 12, $h, '$facturas_ce', $border, $ln, 'C', $fill, $link);
$pdf->Ln(10);

$pdf->Cell($w * 1, $h, _tr("Notas"), $border, $ln, 'C', $fill, $link);
$pdf->Ln();
$pdf->Cell($w * 12, $h, '$facturas_comentarios', $border, $ln, $align, $fill, $link);
$pdf->Ln(10);




//********************
$pdf->Output();


