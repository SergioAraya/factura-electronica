<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "notac", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=notac&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="notac">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="notac_id" value="<?php echo $notac_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="notac_ref" value="<?php echo $notac_ref; ?>" placeholder="<?php _t("Ref"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_id_factura" value="<?php echo $notac_id_factura; ?>" placeholder="<?php _t("Id_factura"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_id_contacto" value="<?php echo $notac_id_contacto; ?>" placeholder="<?php _t("Id_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_fecha_registro" value="<?php echo $notac_fecha_registro; ?>" placeholder="<?php _t("Fecha_registro"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_fecha_pago" value="<?php echo $notac_fecha_pago; ?>" placeholder="<?php _t("Fecha_pago"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_sub_total" value="<?php echo $notac_sub_total; ?>" placeholder="<?php _t("Sub_total"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_iva" value="<?php echo $notac_iva; ?>" placeholder="<?php _t("Iva"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_comentarios" value="<?php echo $notac_comentarios; ?>" placeholder="<?php _t("Comentarios"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_estatus" value="<?php echo $notac_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 