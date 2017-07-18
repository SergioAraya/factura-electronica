<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
  //$cp_ville_vil_id = mysql_real_escape_string($_GET['cp_ville_vil_id']); 
    $cp_ville_vil_cp = (isset($_GET['cp_ville_vil_cp']))?mysql_real_escape_string($_GET['cp_ville_vil_cp']):null;   
    $cp_ville_vil_nom = (isset($_GET['cp_ville_vil_nom']))?mysql_real_escape_string($_GET['cp_ville_vil_nom']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_GET as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }