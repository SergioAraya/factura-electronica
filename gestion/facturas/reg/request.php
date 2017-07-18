<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
    $facturas_id = (isset($_REQUEST['facturas_id']))?mysql_real_escape_string($_REQUEST['facturas_id']):null;   
    $facturas_ref = (isset($_REQUEST['facturas_ref']))?mysql_real_escape_string($_REQUEST['facturas_ref']):null;   
    $facturas_id_presupuesto = (isset($_REQUEST['facturas_id_presupuesto']))?mysql_real_escape_string($_REQUEST['facturas_id_presupuesto']):null;   
    $facturas_id_notac = (isset($_REQUEST['facturas_id_notac']))?mysql_real_escape_string($_REQUEST['facturas_id_notac']):null;   
    $facturas_id_contacto = (isset($_REQUEST['facturas_id_contacto']))?mysql_real_escape_string($_REQUEST['facturas_id_contacto']):null;   
   # $facturas_fecha_registro = (isset($_REQUEST['facturas_fecha_registro']))?mysql_real_escape_string($_REQUEST['facturas_fecha_registro']):CURRENT_TIMESTAMP;   
    $facturas_sub_total = (isset($_REQUEST['facturas_sub_total']))?mysql_real_escape_string($_REQUEST['facturas_sub_total']):0.00000;   
    $facturas_iva = (isset($_REQUEST['facturas_iva']))?mysql_real_escape_string($_REQUEST['facturas_iva']):0.00000;   
    $facturas_anticipo = (isset($_REQUEST['facturas_anticipo']))?mysql_real_escape_string($_REQUEST['facturas_anticipo']):0.00000;   
    $facturas_saldo = (isset($_REQUEST['facturas_saldo']))?mysql_real_escape_string($_REQUEST['facturas_saldo']):0.00000;   
    $facturas_comentarios = (isset($_REQUEST['facturas_comentarios']))?mysql_real_escape_string($_REQUEST['facturas_comentarios']):null;   
    $facturas_r1 = (isset($_REQUEST['facturas_r1']))?mysql_real_escape_string($_REQUEST['facturas_r1']):null;   
    $facturas_r2 = (isset($_REQUEST['facturas_r2']))?mysql_real_escape_string($_REQUEST['facturas_r2']):null;   
    $facturas_r3 = (isset($_REQUEST['facturas_r3']))?mysql_real_escape_string($_REQUEST['facturas_r3']):null;   
    $facturas_fecha_cobro = (isset($_REQUEST['facturas_fecha_cobro']))?mysql_real_escape_string($_REQUEST['facturas_fecha_cobro']):null;   
    $facturas_expira = (isset($_REQUEST['facturas_expira']))?mysql_real_escape_string($_REQUEST['facturas_expira']):null;   
    $facturas_ce = (isset($_REQUEST['facturas_ce']))?mysql_real_escape_string($_REQUEST['facturas_ce']):null;   
    $facturas_estatus = (isset($_REQUEST['facturas_estatus']))?mysql_real_escape_string($_REQUEST['facturas_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_REQUEST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }