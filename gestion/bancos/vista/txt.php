<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
bancos_id : %bancos_id%
bancos_banco : %bancos_banco%
bancos_cuenta : %bancos_cuenta%
bancos_iban : %bancos_iban%
bancos_orden : %bancos_orden%
bancos_estatus : %bancos_estatus%
";

                include "./bancos/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>