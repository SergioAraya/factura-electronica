<?php

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("Times", "", 12);


$pdf->Cell($w * 12, $h, "$p", 0, $ln, $align, $fill, $link);
$pdf->Ln(10);
//********************
$pdf->Cell($w * 1, $h, "#", $border, $ln, $align, $fill, $link);

$pdf->Cell($w * 3, $h, _tr("banco"), $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 3, $h, _tr("cuenta"), $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 3, $h, _tr("iban"), $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 1, $h, _tr("orden"), $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 1, $h, _tr("estatus"), $border, $ln, $align, $fill, $link);
$pdf->Ln();
//********************
$i = 1;
include "./bancos/modelos/pdf.php";
while ($bancos = mysql_fetch_array($sql)) {
    include "./bancos/reg/reg.php";
    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 3, $h, $bancos_banco, $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 3, $h, $bancos_cuenta, $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 3, $h, $bancos_iban, $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 1, $h, $bancos_orden, $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 1, $h, $bancos_estatus, $border, $ln, $align, $fill, $link);


    $pdf->Ln();
    $i++;
}
//********************
$pdf->Output();


