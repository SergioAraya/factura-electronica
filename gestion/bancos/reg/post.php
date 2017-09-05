<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
  //$bancos_id = mysql_real_escape_string($_POST['bancos_id']); 
    $bancos_banco = (isset($_POST['bancos_banco']))?mysql_real_escape_string($_POST['bancos_banco']):null;   
    $bancos_cuenta = (isset($_POST['bancos_cuenta']))?mysql_real_escape_string($_POST['bancos_cuenta']):null;   
    $bancos_iban = (isset($_POST['bancos_iban']))?mysql_real_escape_string($_POST['bancos_iban']):null;   
    $bancos_orden = (isset($_POST['bancos_orden']))?mysql_real_escape_string($_POST['bancos_orden']):null;   
    $bancos_estatus = (isset($_POST['bancos_estatus']))?mysql_real_escape_string($_POST['bancos_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_POST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }