<?php /**
  magia_version: 0.0.11
 * */ ?>
<?php include "tabs.php"; ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("plugins"); ?> 
    <a type="button" class="btn btn-primary navbar-btn" href="?p=plugins&c=crear"> 
        <?php _t("Nuevo"); ?> 
    </a>
</h2>

<table class="table table-striped">
    <?php //plugins_thead(); ?>
    <thead>
        <tr>
            <td><?php _t("Plugin"); ?></td>
            <td><?php _t("Descripción"); ?></td>
            <td><?php _t("Versión instalada"); ?></td>
            <td><?php _t("Última versión"); ?></td>
        </tr>
    </thead>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "plugins", $_usuarios_grupo)) {
            //   include "./plugins/vista/tr_buscar.php";
        }
        ?><?php
        $i = 1; // cuenta lineas
        while ($plugins = mysql_fetch_array($sql)) {

            include "./plugins/reg/reg.php";

            $campo_disponibles = plugins_campos_disponibles();

            echo "<tr>";
            include "./plugins/vista/tr.php";
            echo "</tr>";

            $i++;
        }
        ?></tbody>
        <?php
        if (permisos_tiene_permiso("crear", "plugins", $_usuarios_grupo)) {
            //   include "./plugins/vista/tr_anadir.php";
        }
        ?>
    <?php //plugins_tfoot(); ?>

</table> 

<?php
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion_master($p, $c, $total_items, $pag);
?>