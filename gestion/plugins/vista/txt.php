<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
plugins_id : %plugins_id%
plugins_nombre : %plugins_nombre%
plugins_descripcion : %plugins_descripcion%
plugins_version : %plugins_version%
plugins_autor : %plugins_autor%
plugins_autor_email : %plugins_autor_email%
plugins_plugin_web : %plugins_plugin_web%
plugins_plugin_zip : %plugins_plugin_zip%
plugins_orden : %plugins_orden%
plugins_estatus : %plugins_estatus%
";

                include "./plugins/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>