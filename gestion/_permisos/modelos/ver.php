 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
$sql=mysql_query( 
 "SELECT * FROM _permisos WHERE id = '$_permisos_id' ORDER BY id DESC   ",$conexion) 	  
 or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .' / '.mysql_error());	
 $_permisos = mysql_fetch_array($sql);	  
