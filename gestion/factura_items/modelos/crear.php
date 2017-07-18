 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO factura_items ( 
 ref_factura 
 ,  cantidad 
 ,  descripcion 
 ,  valor 
 ,  porcentaje_iva 
 ) VALUES ( 
 :ref_factura 
 ,  :cantidad 
 ,  :descripcion 
 ,  :valor 
 ,  :porcentaje_iva 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":ref_factura"=>"$factura_items_ref_factura" 
 ,  ":cantidad"=>"$factura_items_cantidad" 
 ,  ":descripcion"=>"$factura_items_descripcion" 
 ,  ":valor"=>"$factura_items_valor" 
 ,  ":porcentaje_iva"=>"$factura_items_porcentaje_iva" 
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