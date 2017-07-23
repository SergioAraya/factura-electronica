<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
  //$facturas_id = mysql_real_escape_string($_GET['facturas_id']); 
    $facturas_ref = (isset($_GET['facturas_ref']))?mysql_real_escape_string($_GET['facturas_ref']):null;   
    $facturas_id_presupuesto = (isset($_GET['facturas_id_presupuesto']))?mysql_real_escape_string($_GET['facturas_id_presupuesto']):null;   
    $facturas_id_notac = (isset($_GET['facturas_id_notac']))?mysql_real_escape_string($_GET['facturas_id_notac']):null;   
    $facturas_id_contacto = (isset($_GET['facturas_id_contacto']))?mysql_real_escape_string($_GET['facturas_id_contacto']):null;   
  #  $facturas_fecha_registro = (isset($_GET['facturas_fecha_registro']))?mysql_real_escape_string($_GET['facturas_fecha_registro']):CURRENT_TIMESTAMP;   
    $facturas_sub_total = (isset($_GET['facturas_sub_total']))?mysql_real_escape_string($_GET['facturas_sub_total']):0.00000;   
    $facturas_iva = (isset($_GET['facturas_iva']))?mysql_real_escape_string($_GET['facturas_iva']):0.00000;   
    $facturas_anticipo = (isset($_GET['facturas_anticipo']))?mysql_real_escape_string($_GET['facturas_anticipo']):0.00000;   
    $facturas_saldo = (isset($_GET['facturas_saldo']))?mysql_real_escape_string($_GET['facturas_saldo']):0.00000;   
    $facturas_comentarios = (isset($_GET['facturas_comentarios']))?mysql_real_escape_string($_GET['facturas_comentarios']):null;   
    $facturas_r1 = (isset($_GET['facturas_r1']))?mysql_real_escape_string($_GET['facturas_r1']):null;   
    $facturas_r2 = (isset($_GET['facturas_r2']))?mysql_real_escape_string($_GET['facturas_r2']):null;   
    $facturas_r3 = (isset($_GET['facturas_r3']))?mysql_real_escape_string($_GET['facturas_r3']):null;   
    $facturas_fecha_cobro = (isset($_GET['facturas_fecha_cobro']))?mysql_real_escape_string($_GET['facturas_fecha_cobro']):null;   
    $facturas_expira = (isset($_GET['facturas_expira']))?mysql_real_escape_string($_GET['facturas_expira']):null;   
    $facturas_ce = (isset($_GET['facturas_ce']))?mysql_real_escape_string($_GET['facturas_ce']):null;   
    $facturas_estatus = (isset($_GET['facturas_estatus']))?mysql_real_escape_string($_GET['facturas_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_GET as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }