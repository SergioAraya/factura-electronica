<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2><?php _t("Atencion"); ?></h2>
                <p><?php _t("Ud esta a por borrar definiticamente este registro, desea hacerlo?"); ?></p>
                <a class="btn btn-danger" href="index.php?p=actualizaciones&c=borrar&actualizaciones_id=<?php echo $actualizaciones_id; ?>"><?php _t("Si,borrar"); ?></a>