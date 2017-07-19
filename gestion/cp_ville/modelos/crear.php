 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO cp_ville ( 
 vil_cp 
 ,  vil_nom 
 ) VALUES ( 
 :vil_cp 
 ,  :vil_nom 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":vil_cp"=>"$cp_ville_vil_cp" 
 ,  ":vil_nom"=>"$cp_ville_vil_nom" 
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