 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO notac_items ( 
 ref_notac 
 ,  cantidad 
 ,  descripcion 
 ,  valor 
 ,  porcentaje_iva 
 ) VALUES ( 
 :ref_notac 
 ,  :cantidad 
 ,  :descripcion 
 ,  :valor 
 ,  :porcentaje_iva 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":ref_notac"=>"$notac_items_ref_notac" 
 ,  ":cantidad"=>"$notac_items_cantidad" 
 ,  ":descripcion"=>"$notac_items_descripcion" 
 ,  ":valor"=>"$notac_items_valor" 
 ,  ":porcentaje_iva"=>"$notac_items_porcentaje_iva" 
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