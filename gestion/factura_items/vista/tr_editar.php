<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "factura_items", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=factura_items&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="factura_items">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="factura_items_id" value="<?php echo $factura_items_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="factura_items_ref_factura" value="<?php echo $factura_items_ref_factura; ?>" placeholder="<?php _t("Ref_factura"); ?>"></td> 
 <td><input class="form-control" type="text" name="factura_items_cantidad" value="<?php echo $factura_items_cantidad; ?>" placeholder="<?php _t("Cantidad"); ?>"></td> 
 <td><input class="form-control" type="text" name="factura_items_descripcion" value="<?php echo $factura_items_descripcion; ?>" placeholder="<?php _t("Descripcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="factura_items_valor" value="<?php echo $factura_items_valor; ?>" placeholder="<?php _t("Valor"); ?>"></td> 
 <td><input class="form-control" type="text" name="factura_items_porcentaje_iva" value="<?php echo $factura_items_porcentaje_iva; ?>" placeholder="<?php _t("Porcentaje_iva"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 