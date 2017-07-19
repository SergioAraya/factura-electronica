<?php

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("Times", "", 12);


$pdf->Cell($w * 12, $h, "$p", 0, $ln, $align, $fill, $link);
$pdf->Ln(10);
//********************
$pdf->Cell($w * 3, $h, _tr("Fecha"), $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 1, $h, _tr("#"), $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 6, $h, _tr("Descripcion"), $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 2, $h, _tr("Valor"), $border, $ln, $align, $fill, $link);
$pdf->Ln();
//********************
$i = 1;
include "./balanza/modelos/pdf.php";
while ($balanza = mysql_fetch_array($sql)) {
    include "./balanza/reg/reg.php";

    $pdf->Cell($w * 3, $h, $balanza_fecha_registro, '', $ln, $align, $fill, $link);
    $pdf->Cell($w * 1, $h, $balanza_id, '', $ln, $align, $fill, $link);
    $pdf->Cell($w * 6, $h, "Virement au compte: ".$balanza_descripcion, '', $ln, $align, $fill, $link);
    $pdf->Cell($w * 2, $h, $balanza_sub_total, '', $ln, $align, $fill, $link);
    $pdf->Ln();
    $pdf->Cell($w * 3, $h, "Fecha " .$balanza_fecha, '', $ln, $align, $fill, $link);
    $pdf->Cell($w * 1, $h, '', '', $ln, $align, $fill, $link);
    $pdf->Cell($w * 6, $h, "Comunicacion $balanza_ce", '', $ln, $align, $fill, $link);
    $pdf->Cell($w * 2, $h, $balanza_sub_total, '', $ln, $align, $fill, $link);


    $pdf->Ln(10);
    $i++;
}
//********************
$pdf->Output();


