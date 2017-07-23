<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "plugins", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=plugins&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="plugins">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="plugins_id" value="<?php echo $plugins_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="plugins_nombre" value="<?php echo $plugins_nombre; ?>" placeholder="<?php _t("Nombre"); ?>"></td> 
 <td><input class="form-control" type="text" name="plugins_descripcion" value="<?php echo $plugins_descripcion; ?>" placeholder="<?php _t("Descripcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="plugins_version" value="<?php echo $plugins_version; ?>" placeholder="<?php _t("Version"); ?>"></td> 
 <td><input class="form-control" type="text" name="plugins_autor" value="<?php echo $plugins_autor; ?>" placeholder="<?php _t("Autor"); ?>"></td> 
 <td><input class="form-control" type="text" name="plugins_autor_email" value="<?php echo $plugins_autor_email; ?>" placeholder="<?php _t("Autor_email"); ?>"></td> 
 <td><input class="form-control" type="text" name="plugins_plugin_web" value="<?php echo $plugins_plugin_web; ?>" placeholder="<?php _t("Plugin_web"); ?>"></td> 
 <td><input class="form-control" type="text" name="plugins_plugin_zip" value="<?php echo $plugins_plugin_zip; ?>" placeholder="<?php _t("Plugin_zip"); ?>"></td> 
 <td><input class="form-control" type="text" name="plugins_orden" value="<?php echo $plugins_orden; ?>" placeholder="<?php _t("Orden"); ?>"></td> 
 <td><input class="form-control" type="text" name="plugins_estatus" value="<?php echo $plugins_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 