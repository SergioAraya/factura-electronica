<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
    $notac_items_id = (isset($_REQUEST['notac_items_id']))?mysql_real_escape_string($_REQUEST['notac_items_id']):null;   
    $notac_items_ref_notac = (isset($_REQUEST['notac_items_ref_notac']))?mysql_real_escape_string($_REQUEST['notac_items_ref_notac']):null;   
    $notac_items_cantidad = (isset($_REQUEST['notac_items_cantidad']))?mysql_real_escape_string($_REQUEST['notac_items_cantidad']):null;   
    $notac_items_descripcion = (isset($_REQUEST['notac_items_descripcion']))?mysql_real_escape_string($_REQUEST['notac_items_descripcion']):null;   
    $notac_items_valor = (isset($_REQUEST['notac_items_valor']))?mysql_real_escape_string($_REQUEST['notac_items_valor']):null;   
    $notac_items_porcentaje_iva = (isset($_REQUEST['notac_items_porcentaje_iva']))?mysql_real_escape_string($_REQUEST['notac_items_porcentaje_iva']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_REQUEST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }