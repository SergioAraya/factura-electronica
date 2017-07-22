<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2><?php _t("Atencion"); ?></h2>
                <p><?php _t("Ud esta a por borrar definiticamente este registro, desea hacerlo?"); ?></p>
                <a class="btn btn-danger" href="index.php?p=cp_ville&c=borrar&cp_ville_id=<?php echo $cp_ville_id; ?>"><?php _t("Si,borrar"); ?></a>