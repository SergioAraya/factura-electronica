<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>

            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="plugins">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr> <td><input class="form-control" type="text" name="plugins_nombre" value="" placeholder="<?php _t("Nombre"); ?>"></td> 
 <td><input class="form-control" type="text" name="plugins_descripcion" value="" placeholder="<?php _t("Descripcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="plugins_version" value="" placeholder="<?php _t("Version"); ?>"></td> 
 <td><input class="form-control" type="text" name="plugins_autor" value="" placeholder="<?php _t("Autor"); ?>"></td> 
 <td><input class="form-control" type="text" name="plugins_autor_email" value="" placeholder="<?php _t("Autor_email"); ?>"></td> 
 <td><input class="form-control" type="text" name="plugins_plugin_web" value="" placeholder="<?php _t("Plugin_web"); ?>"></td> 
 <td><input class="form-control" type="text" name="plugins_plugin_zip" value="" placeholder="<?php _t("Plugin_zip"); ?>"></td> 
 <td><input class="form-control" type="text" name="plugins_orden" value="" placeholder="<?php _t("Orden"); ?>"></td> 
 <td><input class="form-control" type="text" name="plugins_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 