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
 $pdf->Cell($w * 1, $h, _tr("fecha_pago"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("sub_total"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("iva"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("comentarios"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("estatus"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./notac/modelos/pdf.php";
                while ($notac = mysql_fetch_array($sql)) {
                    include "./notac/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, $notac_ref, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $notac_id_factura, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $notac_id_contacto, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $notac_fecha_registro, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $notac_fecha_pago, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $notac_sub_total, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $notac_iva, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $notac_comentarios, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $notac_estatus, $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
