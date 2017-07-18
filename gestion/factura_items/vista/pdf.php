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

                         $pdf->Cell($w * 1, $h, _tr("ref_factura"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("cantidad"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("descripcion"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("valor"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("porcentaje_iva"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./factura_items/modelos/pdf.php";
                while ($factura_items = mysql_fetch_array($sql)) {
                    include "./factura_items/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, $factura_items_ref_factura, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $factura_items_cantidad, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $factura_items_descripcion, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $factura_items_valor, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $factura_items_porcentaje_iva, $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
