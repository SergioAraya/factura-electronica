 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "editar"; 
 $pagina = "presupuestos"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $presupuestos_id = mysql_real_escape_string($_REQUEST['presupuestos_id']);      
 include "./presupuestos/reg/post.php";  
 include "./presupuestos/modelos/editar.php";  

 include "./presupuestos/modelos/ver.php";  
 include "./presupuestos/reg/reg.php"; 
 include "./presupuestos/vista/ver.php";  
 }else{ 
 $presupuestos_id = mysql_real_escape_string($_REQUEST['presupuestos_id']);      
 include "./presupuestos/modelos/ver.php"; 
 include "./presupuestos/reg/reg.php"; 
 include "./presupuestos/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 

            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$accion"=>"$accion",
                    "\$pagina"=>"$pagina",
                    "\$_usuarios_grupo"=>"$_usuarios_grupo",
                    "permisos_tiene_permiso(\$accion, \$pagina, \$_usuarios_grupo)"=>permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo),
                    "\$_REQUEST['a']"=>"$_REQUEST[a]",
                    "\$_REQUEST['a']"=>"$_REQUEST[a]",       
                    "$presupuestos_id"=>"$presupuestos_id"        
                );
                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }
                echo "</table>";
            }