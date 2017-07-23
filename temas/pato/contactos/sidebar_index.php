
<div class="list-group">
    <a href="#" class="list-group-item active">
        <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span>  
        <?php echo _t("Grupos"); ?>
    </a>
    
    <?php 
    $i = 0;
    foreach (_grupos() as $key => $value) {
        echo '<a href="#" class="list-group-item">'. ucfirst($value).'</a>'; 
    }
         
    ?>
</div>





