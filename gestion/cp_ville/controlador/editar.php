 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "editar"; 
 $pagina = "cp_ville"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $cp_ville_id = mysql_real_escape_string($_REQUEST['cp_ville_id']);      
 include "./cp_ville/reg/post.php";  
 include "./cp_ville/modelos/editar.php";  

 include "./cp_ville/modelos/ver.php";  
 include "./cp_ville/reg/reg.php"; 
 include "./cp_ville/vista/ver.php";  
 }else{ 
 $cp_ville_id = mysql_real_escape_string($_REQUEST['cp_ville_id']);      
 include "./cp_ville/modelos/ver.php"; 
 include "./cp_ville/reg/reg.php"; 
 include "./cp_ville/vista/editar.php"; 
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
                    "$cp_ville_id"=>"$cp_ville_id"        
                );
                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }
                echo "</table>";
            }