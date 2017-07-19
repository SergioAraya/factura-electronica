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

<table class="table table-striped">
    <?php //facturas_thead(); ?>
    <thead>
        <tr>
            <th><?php _t("#"); ?></th>
            <th><?php _t("id"); ?></th>
            <th><?php _t("Cliente"); ?></th>
            <th><?php _t("Recordatorios"); ?></th>
            <th class="text-right"><?php _t("Total"); ?></th>
            <th class="text-right"><?php _t("Anticipo"); ?></th>
            <th class="text-right"><?php _t("Saldo"); ?></th>
            <th><?php _t("Estatus"); ?></th>
        </tr>
    </thead>
    <tbody>

        <?php
        if (permisos_tiene_permiso("ver", "facturas", $_usuarios_grupo)) {
            //   include "./facturas/vista/tr_buscar.php";
        }
        ?><?php
        $i = 1; // cuenta lineas
        while ($facturas = mysql_fetch_array($sql)) {

            include "./facturas/reg/reg.php";

            $re1 = ($r1 !='0000-00-00')?"<span class=\"glyphicon glyphicon-envelope\"></span>":"";
            
            
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$facturas_id</td>";
            
            echo "<td>" . contactos_campo('contacto', $facturas_id_contacto) . "</td>";
            echo "<td>$re1</td>";
            echo "<td class=\"text-right\">" . moneda($facturas_sub_total + $facturas_iva) . "</td>";
            echo "<td class=\"text-right\">" . moneda($facturas_anticipo) . "</td>";
            echo "<td class=\"text-right\">" . moneda(($facturas_sub_total + $facturas_iva) - $facturas_anticipo) . "</td>";
            echo "<td>$facturas_estatus</td>";
            echo "</tr>";



            //$campo_disponibles = facturas_campos_disponibles();
            // echo "<tr>";
            //include "./facturas/vista/tr.php";
            // echo "</tr>";

            $i++;
        }
        ?>

    




    </tbody>
    <?php
    if (permisos_tiene_permiso("crear", "facturas", $_usuarios_grupo)) {
        //   include "./facturas/vista/tr_anadir.php";
    }
    ?>
    <?php // facturas_tfoot(); ?>




</table> 

<?php
//echo paginacion($p, $c, isset($_REQUEST['pag'])); 
echo paginacion_master($p, $c, $total_items, $pag);
?>
