 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" 
 DELETE FROM  
 _menu  
 WHERE id = '$_menu_id' 
 ",$conexion) or die ("Error ".mysql_error()); 
  
 $mensaje = "Realizado"; 
