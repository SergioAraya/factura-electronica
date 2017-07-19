<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "balanza", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=balanza&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="balanza">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="balanza_id" value="<?php echo $balanza_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="balanza_id_contacto" value="<?php echo $balanza_id_contacto; ?>" placeholder="<?php _t("Id_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_id_factura" value="<?php echo $balanza_id_factura; ?>" placeholder="<?php _t("Id_factura"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_tipo" value="<?php echo $balanza_tipo; ?>" placeholder="<?php _t("Tipo"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_ref" value="<?php echo $balanza_ref; ?>" placeholder="<?php _t("Ref"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_descripcion" value="<?php echo $balanza_descripcion; ?>" placeholder="<?php _t("Descripcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_ce" value="<?php echo $balanza_ce; ?>" placeholder="<?php _t("Ce"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_sub_total" value="<?php echo $balanza_sub_total; ?>" placeholder="<?php _t("Sub_total"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_iva" value="<?php echo $balanza_iva; ?>" placeholder="<?php _t("Iva"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_fecha" value="<?php echo $balanza_fecha; ?>" placeholder="<?php _t("Fecha"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_fecha_registro" value="<?php echo $balanza_fecha_registro; ?>" placeholder="<?php _t("Fecha_registro"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_factura" value="<?php echo $balanza_factura; ?>" placeholder="<?php _t("Factura"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_banco" value="<?php echo $balanza_banco; ?>" placeholder="<?php _t("Banco"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_anulada" value="<?php echo $balanza_anulada; ?>" placeholder="<?php _t("Anulada"); ?>"></td> 
 <td><input class="form-control" type="text" name="balanza_cod_anu" value="<?php echo $balanza_cod_anu; ?>" placeholder="<?php _t("Cod_anu"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 