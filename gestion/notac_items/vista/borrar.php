<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2><?php _t("Atencion"); ?></h2>
                <p><?php _t("Ud esta a por borrar definiticamente este registro, desea hacerlo?"); ?></p>
                <a class="btn btn-danger" href="index.php?p=notac_items&c=borrar&notac_items_id=<?php echo $notac_items_id; ?>"><?php _t("Si,borrar"); ?></a>