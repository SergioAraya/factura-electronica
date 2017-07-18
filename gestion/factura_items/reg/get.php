<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
  //$factura_items_id = mysql_real_escape_string($_GET['factura_items_id']); 
    $factura_items_ref_factura = (isset($_GET['factura_items_ref_factura']))?mysql_real_escape_string($_GET['factura_items_ref_factura']):null;   
    $factura_items_cantidad = (isset($_GET['factura_items_cantidad']))?mysql_real_escape_string($_GET['factura_items_cantidad']):null;   
    $factura_items_descripcion = (isset($_GET['factura_items_descripcion']))?mysql_real_escape_string($_GET['factura_items_descripcion']):null;   
    $factura_items_valor = (isset($_GET['factura_items_valor']))?mysql_real_escape_string($_GET['factura_items_valor']):null;   
    $factura_items_porcentaje_iva = (isset($_GET['factura_items_porcentaje_iva']))?mysql_real_escape_string($_GET['factura_items_porcentaje_iva']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_GET as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }