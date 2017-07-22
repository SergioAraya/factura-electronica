<div class="list-group">
    <a href="#" class="list-group-item active">
        <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span>  
        <?php echo ucfirst(_t("Contactos")); ?>
    </a>
    <a href="index.php?p=contactos&c=crear" class="list-group-item">
        <span class="glyphicon glyphicon-plus-sign"></span>  
        <?php _t("Nuevo"); ?></a>
    <a href="#" class="list-group-item">Morbi leo risus</a>
    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
    <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>


<form method="get" action="index.php">
    <input type="hidden" name="p" value="contactos">
    <input type="hidden" name="c" value="buscar">
    <input type="hidden" name="a" value="buscar">
    <div class="form-group">
        <label for="b"><?php _t("Buscar"); ?></label>
        <input type="text" class="form-control" id="b" name="b" placeholder="">
    </div>
    <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>




