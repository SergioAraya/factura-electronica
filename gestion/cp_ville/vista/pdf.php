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

                         $pdf->Cell($w * 1, $h, _tr("vil_cp"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("vil_nom"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./cp_ville/modelos/pdf.php";
                while ($cp_ville = mysql_fetch_array($sql)) {
                    include "./cp_ville/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, $cp_ville_vil_cp, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $cp_ville_vil_nom, $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
