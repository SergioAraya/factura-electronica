<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
  //$presupuestos_id = mysql_real_escape_string($_POST['presupuestos_id']); 
    $presupuestos_ref = (isset($_POST['presupuestos_ref']))?mysql_real_escape_string($_POST['presupuestos_ref']):null;   
    $presupuestos_id_factura = (isset($_POST['presupuestos_id_factura']))?mysql_real_escape_string($_POST['presupuestos_id_factura']):null;   
    $presupuestos_id_contacto = (isset($_POST['presupuestos_id_contacto']))?mysql_real_escape_string($_POST['presupuestos_id_contacto']):null;   
 #    $presupuestos_fecha_registro = (isset($_POST['presupuestos_fecha_registro']))?mysql_real_escape_string($_POST['presupuestos_fecha_registro']):CURRENT_TIMESTAMP;   
    $presupuestos_sub_total = (isset($_POST['presupuestos_sub_total']))?mysql_real_escape_string($_POST['presupuestos_sub_total']):0.00000;   
    $presupuestos_iva = (isset($_POST['presupuestos_iva']))?mysql_real_escape_string($_POST['presupuestos_iva']):0.00000;   
    $presupuestos_anticipo = (isset($_POST['presupuestos_anticipo']))?mysql_real_escape_string($_POST['presupuestos_anticipo']):0.00000;   
    $presupuestos_saldo = (isset($_POST['presupuestos_saldo']))?mysql_real_escape_string($_POST['presupuestos_saldo']):0.00000;   
    $presupuestos_comentarios = (isset($_POST['presupuestos_comentarios']))?mysql_real_escape_string($_POST['presupuestos_comentarios']):null;   
    $presupuestos_r1 = (isset($_POST['presupuestos_r1']))?mysql_real_escape_string($_POST['presupuestos_r1']):null;   
    $presupuestos_r2 = (isset($_POST['presupuestos_r2']))?mysql_real_escape_string($_POST['presupuestos_r2']):null;   
    $presupuestos_r3 = (isset($_POST['presupuestos_r3']))?mysql_real_escape_string($_POST['presupuestos_r3']):null;   
    $presupuestos_fecha_cobro = (isset($_POST['presupuestos_fecha_cobro']))?mysql_real_escape_string($_POST['presupuestos_fecha_cobro']):null;   
    $presupuestos_expira = (isset($_POST['presupuestos_expira']))?mysql_real_escape_string($_POST['presupuestos_expira']):null;   
    $presupuestos_ce = (isset($_POST['presupuestos_ce']))?mysql_real_escape_string($_POST['presupuestos_ce']):null;   
    $presupuestos_estatus = (isset($_POST['presupuestos_estatus']))?mysql_real_escape_string($_POST['presupuestos_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_POST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }