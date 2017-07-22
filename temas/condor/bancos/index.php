<div class="row">
    <div class="col-sm-3"><?php include "pato_menu.php"; ?></div>
    <div class="col-sm-9">




<p>Presentacion reformada via +temas+</p>

<table class="table table-hover">
    <thead>
        <tr>
            <th><?php _t("Banco"); ?></th>
            <th><?php _t("Cuenta"); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1; // cuenta lineas
        while ($bancos = mysql_fetch_array($sql)) {
            include "./bancos/reg/reg.php";
            echo "<tr>";
            echo "<td><a href=\"index.php?p=bancos&c=ver&bancos_id=$bancos_id\">$bancos_banco</a></td>";
            echo "<td>$bancos_cuenta</td>";
            echo "</tr>";
            $i++;
        }
        ?></tbody>    
</table> 

<?php
echo paginacion_master($p, $c, $total_items, $pag);
?>

</div>
</div>
