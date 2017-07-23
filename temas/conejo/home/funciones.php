<?php

function pato_sidebar($p=FALSE) {
    global $conexion;
    $sql = mysql_query(
            "SELECT distinct(padre), label, url, icono, orden  "
            . "FROM _menu "
            . "WHERE ubicacion = 'sidebar' "
            . "ORDER BY orden ", $conexion) or die("Error:" . mysql_error());

    while ($reg = mysql_fetch_array($sql)) {

        $icono = (!$reg['icono']) ? "folder-close" : "$reg[icono]";


        echo '<li';
        if ($p == $reg['label']) {
            echo " class=\"active\" ";
        }
        echo '>
                    <a href="' . $reg['url'] . '">
                        <span class="glyphicon glyphicon-' . $icono . '"></span> 
                ' . _tr(ucfirst($reg['label'])) . '
                    </a>
                </li>';
    }
}
