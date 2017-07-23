<?php

/**
  magia_version: 0.0.8
 * */
$accion = "editar";
$pagina = "_opciones";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    
    
    
    if (isset($_REQUEST['a']) == 'editar') {
        $_opciones_valor = mysql_real_escape_string($_REQUEST['_opciones_valor']);
        
        
        include "./_opciones/modelos/cambiar_tema.php";
         echo '<META http-equiv="refresh" content="0; URL=index.php?p=home&c=temas">';
        
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
        "$_opciones_id" => "$_opciones_id"
    );
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($_REQUEST as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}