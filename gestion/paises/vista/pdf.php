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

                         $pdf->Cell($w * 1, $h, _tr("name"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("continent"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("Region"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("SurfaceArea"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("IndepYear"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("Population"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("LifeExpectancy"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("GNP"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("GNPOld"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("LocalName"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("GovernmentForm"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("HeadOfState"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("Capital"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("code2"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("prefijo_ruc"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./paises/modelos/pdf.php";
                while ($paises = mysql_fetch_array($sql)) {
                    include "./paises/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, $paises_name, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $paises_continent, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $paises_Region, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $paises_SurfaceArea, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $paises_IndepYear, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $paises_Population, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $paises_LifeExpectancy, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $paises_GNP, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $paises_GNPOld, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $paises_LocalName, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $paises_GovernmentForm, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $paises_HeadOfState, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $paises_Capital, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $paises_code2, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $paises_prefijo_ruc, $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
