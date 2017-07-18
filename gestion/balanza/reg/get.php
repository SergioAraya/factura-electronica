<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
  //$balanza_id = mysql_real_escape_string($_GET['balanza_id']); 
    $balanza_id_contacto = (isset($_GET['balanza_id_contacto']))?mysql_real_escape_string($_GET['balanza_id_contacto']):null;   
    $balanza_id_factura = (isset($_GET['balanza_id_factura']))?mysql_real_escape_string($_GET['balanza_id_factura']):null;   
    $balanza_tipo = (isset($_GET['balanza_tipo']))?mysql_real_escape_string($_GET['balanza_tipo']):null;   
    $balanza_ref = (isset($_GET['balanza_ref']))?mysql_real_escape_string($_GET['balanza_ref']):null;   
    $balanza_descripcion = (isset($_GET['balanza_descripcion']))?mysql_real_escape_string($_GET['balanza_descripcion']):null;   
    $balanza_ce = (isset($_GET['balanza_ce']))?mysql_real_escape_string($_GET['balanza_ce']):null;   
    $balanza_sub_total = (isset($_GET['balanza_sub_total']))?mysql_real_escape_string($_GET['balanza_sub_total']):null;   
    $balanza_iva = (isset($_GET['balanza_iva']))?mysql_real_escape_string($_GET['balanza_iva']):null;   
    $balanza_fecha = (isset($_GET['balanza_fecha']))?mysql_real_escape_string($_GET['balanza_fecha']):null;   
  #  $balanza_fecha_registro = (isset($_GET['balanza_fecha_registro']))?mysql_real_escape_string($_GET['balanza_fecha_registro']):CURRENT_TIMESTAMP;   
    $balanza_factura = (isset($_GET['balanza_factura']))?mysql_real_escape_string($_GET['balanza_factura']):null;   
    $balanza_banco = (isset($_GET['balanza_banco']))?mysql_real_escape_string($_GET['balanza_banco']):null;   
    $balanza_anulada = (isset($_GET['balanza_anulada']))?mysql_real_escape_string($_GET['balanza_anulada']):null;   
    $balanza_cod_anu = (isset($_GET['balanza_cod_anu']))?mysql_real_escape_string($_GET['balanza_cod_anu']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_GET as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }