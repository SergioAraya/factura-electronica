<?php include "tabs.php"; ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("bancos"); ?> 
    <a type="button" class="btn btn-primary navbar-btn btn-sm" href="?p=bancos&c=crear"> 
        <?php _t("Nuevo"); ?> 
    </a>
</h2>

<p>Presentacion reformada via +temas+</p>

<table class="table table-striped">
    <thead>
        <tr>
            <th><?php _t("Banco"); ?></th>
            <th><?php _t("Cuenta"); ?></th>
        </tr>
    </thead>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "bancos", $_usuarios_grupo)) {
            //   include "./bancos/vista/tr_buscar.php";
        }
        ?><?php
        $i = 1; // cuenta lineas
        while ($bancos = mysql_fetch_array($sql)) {

            include "./bancos/reg/reg.php";

            $campo_disponibles = bancos_campos_disponibles();

            echo "<tr>";
            //include "./bancos/vista/tr.php";
            echo "<td>$bancos_banco</td>";
            echo "<td>$bancos_cuenta</td>";
            echo "</tr>";

            $i++;
        }
        ?></tbody>
    <?php
    if (permisos_tiene_permiso("crear", "bancos", $_usuarios_grupo)) {
        //   include "./bancos/vista/tr_anadir.php";
    }
    ?>
    <?php //bancos_tfoot(); ?>
    <tfoot>
        <tr>
            <th><?php _t("Banco"); ?></th>
            <th><?php _t("Cuenta"); ?></th>
        </tr>
    </tfoot>

</table> 

<?php
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion_master($p, $c, $total_items, $pag);
?>
