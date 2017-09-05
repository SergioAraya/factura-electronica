<?php
<<<<<<< HEAD
$conexion = mysql_connect("$bd_servidor", "$bd_usuario", "$bd_clave") or die("Error conec");
=======
$conexion = mysql_connect("$bd_servidor", "$bd_usuario", "$bd_clave") or die("Problemas en la conexion");
>>>>>>> 0b6d1fff6d58e8affc940fdb6878495d8d3dbc42
mysql_select_db("$bd_bdatos", $conexion) or die("Problemas conexion en local");
mysql_set_charset('utf8', $conexion);