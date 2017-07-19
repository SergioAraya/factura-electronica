 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO notac ( 
 ref 
 ,  id_factura 
 ,  id_contacto 
 ,  fecha_pago 
 ,  sub_total 
 ,  iva 
 ,  comentarios 
 ,  estatus 
 ) VALUES ( 
 :ref 
 ,  :id_factura 
 ,  :id_contacto 
 ,  :fecha_pago 
 ,  :sub_total 
 ,  :iva 
 ,  :comentarios 
 ,  :estatus 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":ref"=>"$notac_ref" 
 ,  ":id_factura"=>"$notac_id_factura" 
 ,  ":id_contacto"=>"$notac_id_contacto" 
 ,  ":fecha_pago"=>"$notac_fecha_pago" 
 ,  ":sub_total"=>"$notac_sub_total" 
 ,  ":iva"=>"$notac_iva" 
 ,  ":comentarios"=>"$notac_comentarios" 
 ,  ":estatus"=>"$notac_estatus" 
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