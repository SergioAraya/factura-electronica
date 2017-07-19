<?php

$accion = "editar";
$pagina = "facturas";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'anular') {
        $facturas_id = mysql_real_escape_string($_REQUEST['facturas_id']);

        if (!$facturas_id || $facturas_id == '') {
            die("No hay id");
        }
        if (!$config_debug) {
            echo '<meta http-equiv="refresh" content="0; url=index.php?p=' . $p . '&c=ver&facturas_id='.$facturas_id.'">';
        }
        
        
       //include "./facturas/reg/post.php";
        include "./facturas/modelos/anular.php";

        include "./facturas/modelos/ver.php";
        include "./facturas/reg/reg.php";
        include "./facturas/vista/ver.php";
    } else {
        $facturas_id = mysql_real_escape_string($_REQUEST['facturas_id']);
        if (!$facturas_id || $facturas_id == '') {
            die("No hay id");
        }

        include "./facturas/modelos/ver.php";
        include "./facturas/reg/reg.php";
        include "./facturas/vista/editar.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
}

if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";

    $variables = array(
        "\$accion" => "$accion",
        "\$pagina" => "$pagina",
        "\$_usuarios_grupo" => "$_usuarios_grupo",
        "permisos_tiene_permiso(\$accion, \$pagina, \$_usuarios_grupo)" => permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo),
        "\$_REQUEST['a']" => "$_REQUEST[a]",
        "\$_REQUEST['a']" => "$_REQUEST[a]",
        "$facturas_id" => "$facturas_id"
    );
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}