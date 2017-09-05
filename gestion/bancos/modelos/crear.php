 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO bancos ( 
 banco 
 ,  cuenta 
 ,  iban 
 ,  orden 
 ,  estatus 
 ) VALUES ( 
 :banco 
 ,  :cuenta 
 ,  :iban 
 ,  :orden 
 ,  :estatus 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":banco"=>"$bancos_banco" 
 ,  ":cuenta"=>"$bancos_cuenta" 
 ,  ":iban"=>"$bancos_iban" 
 ,  ":orden"=>"$bancos_orden" 
 ,  ":estatus"=>"$bancos_estatus" 
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