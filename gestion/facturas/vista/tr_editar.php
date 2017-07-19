<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "facturas", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=facturas&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="facturas">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="facturas_id" value="<?php echo $facturas_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="facturas_ref" value="<?php echo $facturas_ref; ?>" placeholder="<?php _t("Ref"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_id_presupuesto" value="<?php echo $facturas_id_presupuesto; ?>" placeholder="<?php _t("Id_presupuesto"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_id_notac" value="<?php echo $facturas_id_notac; ?>" placeholder="<?php _t("Id_notac"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_id_contacto" value="<?php echo $facturas_id_contacto; ?>" placeholder="<?php _t("Id_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_fecha_registro" value="<?php echo $facturas_fecha_registro; ?>" placeholder="<?php _t("Fecha_registro"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_sub_total" value="<?php echo $facturas_sub_total; ?>" placeholder="<?php _t("Sub_total"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_iva" value="<?php echo $facturas_iva; ?>" placeholder="<?php _t("Iva"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_anticipo" value="<?php echo $facturas_anticipo; ?>" placeholder="<?php _t("Anticipo"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_saldo" value="<?php echo $facturas_saldo; ?>" placeholder="<?php _t("Saldo"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_comentarios" value="<?php echo $facturas_comentarios; ?>" placeholder="<?php _t("Comentarios"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_r1" value="<?php echo $facturas_r1; ?>" placeholder="<?php _t("R1"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_r2" value="<?php echo $facturas_r2; ?>" placeholder="<?php _t("R2"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_r3" value="<?php echo $facturas_r3; ?>" placeholder="<?php _t("R3"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_fecha_cobro" value="<?php echo $facturas_fecha_cobro; ?>" placeholder="<?php _t("Fecha_cobro"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_expira" value="<?php echo $facturas_expira; ?>" placeholder="<?php _t("Expira"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_ce" value="<?php echo $facturas_ce; ?>" placeholder="<?php _t("Ce"); ?>"></td> 
 <td><input class="form-control" type="text" name="facturas_estatus" value="<?php echo $facturas_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 