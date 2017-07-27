<?php
$conexion = mysql_connect("$bd_servidor", "$bd_usuario", "$bd_clave") or die("Error conec");
mysql_select_db("$bd_bdatos", $conexion) or die("Problemas conexion en local");
mysql_set_charset('utf8', $conexion);