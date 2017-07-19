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

                         $pdf->Cell($w * 1, $h, _tr("id_contacto"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("id_factura"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("tipo"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("ref"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("descripcion"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("ce"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("sub_total"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("iva"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("fecha"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("fecha_registro"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("factura"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("banco"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("anulada"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("cod_anu"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./balanza/modelos/pdf.php";
                while ($balanza = mysql_fetch_array($sql)) {
                    include "./balanza/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, $balanza_id_contacto, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $balanza_id_factura, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $balanza_tipo, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $balanza_ref, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $balanza_descripcion, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $balanza_ce, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $balanza_sub_total, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $balanza_iva, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $balanza_fecha, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $balanza_fecha_registro, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $balanza_factura, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $balanza_banco, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $balanza_anulada, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $balanza_cod_anu, $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
