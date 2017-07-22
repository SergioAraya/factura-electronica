
<h2> 
    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php echo _t("facturas"); ?> 
    <a type="button" class="btn btn-primary navbar-btn" href="?p=facturas&c=crear"> 
        <?php _t("Nuevo"); ?> 
    </a>
</h2>


<form class="navbar-form navbar-left">
    
    <select class="form-control" name="">
        <?php facturas_estatus_add(); ?>
    </select>
    <input class="btn btn-default" type="submit" value="<?php _t("Filtrar"); ?>">
</form>




<form class="navbar-form navbar-right" method="get" action="index.php">
    <input type="hidden" name="p" value="facturas">
    <input type="hidden" name="c" value="ver">
    <input type="hidden" name="a" value="ver">

    <div class="form-group">
        <input 
            type="number" 
            class="form-control" 
            name="facturas_id" 
            placeholder="<?php _t("Factura id"); ?>" >
    </div>
    <button type="submit" class="btn btn-default"><?php _t("Buscar una factura"); ?></button>
</form>


 