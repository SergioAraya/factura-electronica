 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO presupuesto_items ( 
 ref_presupuesto 
 ,  cantidad 
 ,  descripcion 
 ,  valor 
 ,  porcentaje_iva 
 ) VALUES ( 
 :ref_presupuesto 
 ,  :cantidad 
 ,  :descripcion 
 ,  :valor 
 ,  :porcentaje_iva 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":ref_presupuesto"=>"$presupuesto_items_ref_presupuesto" 
 ,  ":cantidad"=>"$presupuesto_items_cantidad" 
 ,  ":descripcion"=>"$presupuesto_items_descripcion" 
 ,  ":valor"=>"$presupuesto_items_valor" 
 ,  ":porcentaje_iva"=>"$presupuesto_items_porcentaje_iva" 
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