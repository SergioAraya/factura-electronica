<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "cp_ville", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=cp_ville&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="cp_ville">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="cp_ville_id" value="<?php echo $cp_ville_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="cp_ville_vil_cp" value="<?php echo $cp_ville_vil_cp; ?>" placeholder="<?php _t("Vil_cp"); ?>"></td> 
 <td><input class="form-control" type="text" name="cp_ville_vil_nom" value="<?php echo $cp_ville_vil_nom; ?>" placeholder="<?php _t("Vil_nom"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 