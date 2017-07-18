<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
  //$presupuesto_items_id = mysql_real_escape_string($_GET['presupuesto_items_id']); 
    $presupuesto_items_ref_presupuesto = (isset($_GET['presupuesto_items_ref_presupuesto']))?mysql_real_escape_string($_GET['presupuesto_items_ref_presupuesto']):null;   
    $presupuesto_items_cantidad = (isset($_GET['presupuesto_items_cantidad']))?mysql_real_escape_string($_GET['presupuesto_items_cantidad']):null;   
    $presupuesto_items_descripcion = (isset($_GET['presupuesto_items_descripcion']))?mysql_real_escape_string($_GET['presupuesto_items_descripcion']):null;   
    $presupuesto_items_valor = (isset($_GET['presupuesto_items_valor']))?mysql_real_escape_string($_GET['presupuesto_items_valor']):null;   
    $presupuesto_items_porcentaje_iva = (isset($_GET['presupuesto_items_porcentaje_iva']))?mysql_real_escape_string($_GET['presupuesto_items_porcentaje_iva']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_GET as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }