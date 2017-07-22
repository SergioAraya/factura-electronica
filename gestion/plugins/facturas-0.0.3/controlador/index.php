<?php

/**
  magia_version: 0.0.11
 * */
$accion = "ver";
$pagina = "facturas";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
    
    if(permisos_tiene_permiso('ver', 'facturas_otros', $_usuarios_grupo)){
        include "./facturas/modelos/index_otros.php";
    }else{
        include "./facturas/modelos/index_solo_mios.php";
    }
    
       
    include "./facturas/vista/index.php";
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
        "\$cfg_limite_items_en_tablas" => "$cfg_limite_items_en_tablas",
        "\$inicia" => "$inicia",
        "\$_REQUEST['pag']" => "$_REQUEST[pag]",
        "\$_REQUEST['a']" => "$_REQUEST[a]"
    );
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}