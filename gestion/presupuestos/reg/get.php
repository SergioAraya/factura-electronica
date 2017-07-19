<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
  //$presupuestos_id = mysql_real_escape_string($_GET['presupuestos_id']); 
    $presupuestos_ref = (isset($_GET['presupuestos_ref']))?mysql_real_escape_string($_GET['presupuestos_ref']):null;   
    $presupuestos_id_factura = (isset($_GET['presupuestos_id_factura']))?mysql_real_escape_string($_GET['presupuestos_id_factura']):null;   
    $presupuestos_id_contacto = (isset($_GET['presupuestos_id_contacto']))?mysql_real_escape_string($_GET['presupuestos_id_contacto']):null;   
  #  $presupuestos_fecha_registro = (isset($_GET['presupuestos_fecha_registro']))?mysql_real_escape_string($_GET['presupuestos_fecha_registro']):CURRENT_TIMESTAMP;   
    $presupuestos_sub_total = (isset($_GET['presupuestos_sub_total']))?mysql_real_escape_string($_GET['presupuestos_sub_total']):0.00000;   
    $presupuestos_iva = (isset($_GET['presupuestos_iva']))?mysql_real_escape_string($_GET['presupuestos_iva']):0.00000;   
    $presupuestos_anticipo = (isset($_GET['presupuestos_anticipo']))?mysql_real_escape_string($_GET['presupuestos_anticipo']):0.00000;   
    $presupuestos_saldo = (isset($_GET['presupuestos_saldo']))?mysql_real_escape_string($_GET['presupuestos_saldo']):0.00000;   
    $presupuestos_comentarios = (isset($_GET['presupuestos_comentarios']))?mysql_real_escape_string($_GET['presupuestos_comentarios']):null;   
    $presupuestos_r1 = (isset($_GET['presupuestos_r1']))?mysql_real_escape_string($_GET['presupuestos_r1']):null;   
    $presupuestos_r2 = (isset($_GET['presupuestos_r2']))?mysql_real_escape_string($_GET['presupuestos_r2']):null;   
    $presupuestos_r3 = (isset($_GET['presupuestos_r3']))?mysql_real_escape_string($_GET['presupuestos_r3']):null;   
    $presupuestos_fecha_cobro = (isset($_GET['presupuestos_fecha_cobro']))?mysql_real_escape_string($_GET['presupuestos_fecha_cobro']):null;   
    $presupuestos_expira = (isset($_GET['presupuestos_expira']))?mysql_real_escape_string($_GET['presupuestos_expira']):null;   
    $presupuestos_ce = (isset($_GET['presupuestos_ce']))?mysql_real_escape_string($_GET['presupuestos_ce']):null;   
    $presupuestos_estatus = (isset($_GET['presupuestos_estatus']))?mysql_real_escape_string($_GET['presupuestos_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_GET as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }