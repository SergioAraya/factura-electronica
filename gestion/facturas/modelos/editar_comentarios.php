<?php

/**
  magia_version: 0.0.11
 * */
$sql = mysql_query(" UPDATE facturas SET  
   comentarios = '$facturas_comentarios'  
   
 WHERE id = '$facturas_id' AND ref = '$facturas_ref'
     
 ", $conexion) or error(__DIR__, __FILE__, __LINE__);


if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";

    $variables = array(
        "\$sql" => "$sql",
        "\$facturas_id" => "$facturas_id"
    );

    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}