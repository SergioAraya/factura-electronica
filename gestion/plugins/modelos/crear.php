 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO plugins ( 
 nombre 
 ,  descripcion 
 ,  version 
 ,  autor 
 ,  autor_email 
 ,  plugin_web 
 ,  plugin_zip 
 ,  orden 
 ,  estatus 
 ) VALUES ( 
 :nombre 
 ,  :descripcion 
 ,  :version 
 ,  :autor 
 ,  :autor_email 
 ,  :plugin_web 
 ,  :plugin_zip 
 ,  :orden 
 ,  :estatus 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":nombre"=>"$plugins_nombre" 
 ,  ":descripcion"=>"$plugins_descripcion" 
 ,  ":version"=>"$plugins_version" 
 ,  ":autor"=>"$plugins_autor" 
 ,  ":autor_email"=>"$plugins_autor_email" 
 ,  ":plugin_web"=>"$plugins_plugin_web" 
 ,  ":plugin_zip"=>"$plugins_plugin_zip" 
 ,  ":orden"=>"$plugins_orden" 
 ,  ":estatus"=>"$plugins_estatus" 
             ) 
 ); 


if($config_debug){
    echo "<h3>Debug mode (".__FILE__." )</h3>";
    
    $variables = array(
        "\$sql"=>"$sql"
    );
        
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }    
    echo "</table>";

}