<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
  //$notac_id = mysql_real_escape_string($_POST['notac_id']); 
    $notac_ref = (isset($_POST['notac_ref']))?mysql_real_escape_string($_POST['notac_ref']):null;   
    $notac_id_factura = (isset($_POST['notac_id_factura']))?mysql_real_escape_string($_POST['notac_id_factura']):null;   
    $notac_id_contacto = (isset($_POST['notac_id_contacto']))?mysql_real_escape_string($_POST['notac_id_contacto']):null;   
 #    $notac_fecha_registro = (isset($_POST['notac_fecha_registro']))?mysql_real_escape_string($_POST['notac_fecha_registro']):CURRENT_TIMESTAMP;   
    $notac_fecha_pago = (isset($_POST['notac_fecha_pago']))?mysql_real_escape_string($_POST['notac_fecha_pago']):null;   
    $notac_sub_total = (isset($_POST['notac_sub_total']))?mysql_real_escape_string($_POST['notac_sub_total']):0.00000;   
    $notac_iva = (isset($_POST['notac_iva']))?mysql_real_escape_string($_POST['notac_iva']):0.00000;   
    $notac_comentarios = (isset($_POST['notac_comentarios']))?mysql_real_escape_string($_POST['notac_comentarios']):null;   
    $notac_estatus = (isset($_POST['notac_estatus']))?mysql_real_escape_string($_POST['notac_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_POST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }