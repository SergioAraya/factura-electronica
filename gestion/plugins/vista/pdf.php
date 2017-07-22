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

                         $pdf->Cell($w * 1, $h, _tr("nombre"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("descripcion"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("version"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("autor"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("autor_email"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("plugin_web"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("plugin_zip"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("orden"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("estatus"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./plugins/modelos/pdf.php";
                while ($plugins = mysql_fetch_array($sql)) {
                    include "./plugins/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, $plugins_nombre, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $plugins_descripcion, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $plugins_version, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $plugins_autor, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $plugins_autor_email, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $plugins_plugin_web, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $plugins_plugin_zip, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $plugins_orden, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $plugins_estatus, $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
