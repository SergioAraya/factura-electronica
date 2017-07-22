
<ul class="nav nav-pills" role="tablist">  
    <li role="presentation" class="active"><a href="index.php?p=facturas&c=crear"><span class="glyphicon glyphicon-ok"></span> <?php _t("Nueva"); ?></a></li>
    <li 
        role="presentation">
        <a href="index.php?p=facturas&c=editar&facturas_id=<?php echo $facturas_id; ?>">
            <span class="glyphicon glyphicon-pencil"></span> 
                <?php _t("Editar"); ?>
        </a>
    </li>
    <li role="presentation"><a href="pdf.php?p=pdf&c=factura&facturas_id=<?php echo $facturas_id; ?>&metodo=pdf"><span class="glyphicon glyphicon-print"></span> <?php _t("Imprimir"); ?></a></li>
    <li role="presentation"><a href="pdf.php?p=pdf&c=factura&facturas_id=<?php echo $facturas_id; ?>&metodo=pdf"><span class="glyphicon glyphicon-download"></span> <?php _t("Pdf"); ?></a></li>
    <li role="presentation"><a href="index.php?p=facturas&c=anular&facturas_id=<?php echo $facturas_id; ?>"><span class="glyphicon glyphicon-envelope"></span> <?php _t("Email"); ?></a></li>
    <li role="presentation"><a href="index.php?p=facturas&c=anular&facturas_id=<?php echo $facturas_id; ?>&a=anular"><span class="glyphicon glyphicon-trash"></span> <?php _t("Anular"); ?></a></li>
    <?php 
    facturas_menu('facturas_menu_top');
    ?>
    
</ul>