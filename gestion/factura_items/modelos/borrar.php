 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" 
 DELETE FROM  
 factura_items  
 WHERE id = '$factura_items_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__); 
  
 $mensaje = "Realizado"; 
