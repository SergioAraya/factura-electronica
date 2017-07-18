<?php /**
  magia_version: 0.0.11
 * */ ?>
<?php include "tabs.php"; ?>
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("facturas"); ?> 
    <a type="button" class="btn btn-primary navbar-btn" href="?p=facturas&c=crear"> 
        <?php _t("Nuevo"); ?> 
    </a>
</h2>
<?php /*
{"id":"id",
"id_presupuesto":"id_presupuesto",
"id_notac":"id_notac",
"id_contacto":"id_contacto",
"fecha_registro":"fecha_registro",
"saldo":"saldo",
"r1":"r1","r2":"r2","r3":"r3",
"expira":"expira",
"estatus":"estatus"
}
 *  */ ?>

<table class="table table-striped"><?php facturas_thead(); ?><tbody>

        <?php
        if (permisos_tiene_permiso("ver", "facturas", $_usuarios_grupo)) {
            //   include "./facturas/vista/tr_buscar.php";
        }
        ?><?php
        $i = 1; // cuenta lineas
        while ($facturas = mysql_fetch_array($sql)) {

            include "./facturas/reg/reg.php";

            $campo_disponibles = facturas_campos_disponibles();

            echo "<tr>";
            include "./facturas/vista/tr.php";
            echo "</tr>";

            $i++;
        }
        ?></tbody>
        <?php
        if (permisos_tiene_permiso("crear", "facturas", $_usuarios_grupo)) {
            //   include "./facturas/vista/tr_anadir.php";
        }
        ?>
    <?php facturas_tfoot(); ?>

</table> 

<?php
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion_master($p, $c, $total_items, $pag);
?>