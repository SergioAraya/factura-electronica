<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
    $plugins_id = (isset($_REQUEST['plugins_id']))?mysql_real_escape_string($_REQUEST['plugins_id']):null;   
    $plugins_nombre = (isset($_REQUEST['plugins_nombre']))?mysql_real_escape_string($_REQUEST['plugins_nombre']):null;   
    $plugins_descripcion = (isset($_REQUEST['plugins_descripcion']))?mysql_real_escape_string($_REQUEST['plugins_descripcion']):null;   
    $plugins_version = (isset($_REQUEST['plugins_version']))?mysql_real_escape_string($_REQUEST['plugins_version']):null;   
    $plugins_autor = (isset($_REQUEST['plugins_autor']))?mysql_real_escape_string($_REQUEST['plugins_autor']):null;   
    $plugins_autor_email = (isset($_REQUEST['plugins_autor_email']))?mysql_real_escape_string($_REQUEST['plugins_autor_email']):null;   
    $plugins_plugin_web = (isset($_REQUEST['plugins_plugin_web']))?mysql_real_escape_string($_REQUEST['plugins_plugin_web']):null;   
    $plugins_plugin_zip = (isset($_REQUEST['plugins_plugin_zip']))?mysql_real_escape_string($_REQUEST['plugins_plugin_zip']):null;   
    $plugins_orden = (isset($_REQUEST['plugins_orden']))?mysql_real_escape_string($_REQUEST['plugins_orden']):null;   
    $plugins_estatus = (isset($_REQUEST['plugins_estatus']))?mysql_real_escape_string($_REQUEST['plugins_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_REQUEST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }