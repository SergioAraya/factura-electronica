 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" 
 DELETE FROM  
 actualizaciones  
 WHERE id = '$actualizaciones_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__); 
  
 $mensaje = "Realizado"; 
