<?php 
 
                        // Instanciation of inherited class
                        $pdf = new PDF();
                        $pdf->AliasNbPages();
                        $pdf->AddPage();
                        $pdf->SetFont("Times", "", 12);


                        $pdf->Cell($w*12, $h, "$p", 0, $ln, $align, $fill, $link);
                        $pdf->Ln(10);
                        //********************
                        $pdf->Cell($w * 1, $h, "#", $border, $ln, $align, $fill, $link);

                         $pdf->Cell($w * 1, $h, _tr("ref"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("id_factura"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("id_contacto"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("fecha_registro"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("sub_total"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("iva"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("anticipo"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("saldo"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("comentarios"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("r1"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("r2"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("r3"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("fecha_cobro"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("expira"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("ce"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("estatus"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./presupuestos/modelos/pdf.php";
                while ($presupuestos = mysql_fetch_array($sql)) {
                    include "./presupuestos/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, $presupuestos_ref, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $presupuestos_id_factura, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $presupuestos_id_contacto, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $presupuestos_fecha_registro, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $presupuestos_sub_total, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $presupuestos_iva, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $presupuestos_anticipo, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $presupuestos_saldo, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $presupuestos_comentarios, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $presupuestos_r1, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $presupuestos_r2, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $presupuestos_r3, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $presupuestos_fecha_cobro, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $presupuestos_expira, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $presupuestos_ce, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $presupuestos_estatus, $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
