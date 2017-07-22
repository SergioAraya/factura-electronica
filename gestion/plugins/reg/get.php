<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
  //$plugins_id = mysql_real_escape_string($_GET['plugins_id']); 
    $plugins_nombre = (isset($_GET['plugins_nombre']))?mysql_real_escape_string($_GET['plugins_nombre']):null;   
    $plugins_descripcion = (isset($_GET['plugins_descripcion']))?mysql_real_escape_string($_GET['plugins_descripcion']):null;   
    $plugins_version = (isset($_GET['plugins_version']))?mysql_real_escape_string($_GET['plugins_version']):null;   
    $plugins_autor = (isset($_GET['plugins_autor']))?mysql_real_escape_string($_GET['plugins_autor']):null;   
    $plugins_autor_email = (isset($_GET['plugins_autor_email']))?mysql_real_escape_string($_GET['plugins_autor_email']):null;   
    $plugins_plugin_web = (isset($_GET['plugins_plugin_web']))?mysql_real_escape_string($_GET['plugins_plugin_web']):null;   
    $plugins_plugin_zip = (isset($_GET['plugins_plugin_zip']))?mysql_real_escape_string($_GET['plugins_plugin_zip']):null;   
    $plugins_orden = (isset($_GET['plugins_orden']))?mysql_real_escape_string($_GET['plugins_orden']):null;   
    $plugins_estatus = (isset($_GET['plugins_estatus']))?mysql_real_escape_string($_GET['plugins_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_GET as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }