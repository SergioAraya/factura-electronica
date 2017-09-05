<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
    $bancos_id = (isset($_REQUEST['bancos_id']))?mysql_real_escape_string($_REQUEST['bancos_id']):null;   
    $bancos_banco = (isset($_REQUEST['bancos_banco']))?mysql_real_escape_string($_REQUEST['bancos_banco']):null;   
    $bancos_cuenta = (isset($_REQUEST['bancos_cuenta']))?mysql_real_escape_string($_REQUEST['bancos_cuenta']):null;   
    $bancos_iban = (isset($_REQUEST['bancos_iban']))?mysql_real_escape_string($_REQUEST['bancos_iban']):null;   
    $bancos_orden = (isset($_REQUEST['bancos_orden']))?mysql_real_escape_string($_REQUEST['bancos_orden']):null;   
    $bancos_estatus = (isset($_REQUEST['bancos_estatus']))?mysql_real_escape_string($_REQUEST['bancos_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_REQUEST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }