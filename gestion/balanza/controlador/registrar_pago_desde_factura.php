<?php

/**
  magia_version: 0.0.11
 * */
$accion = "crear";
$pagina = "balanza";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'registrar') {
        include "./balanza/reg/post.php";
        
        $balanza_id_contacto= facturas_campo('id_contacto', $balanza_id_factura);
        $balanza_tipo       = '1'; // ingreso
        $balanza_ce         = facturas_campo('ce', $balanza_id_factura);
                
        
        include "./balanza/modelos/registrar_pago_desde_factura.php";
        
        
        if (!$config_debug) {
           // echo '<meta http-equiv="refresh" content="0; url=index.php?p=' . $p . '&c=index">';
        }
    } else {
        include "./balanza/vista/crear.php";
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
        "\$_REQUEST['a']" => "$_REQUEST[a]"
    );
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}