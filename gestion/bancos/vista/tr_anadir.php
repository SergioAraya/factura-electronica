<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>

            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="bancos">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr> <td><input class="form-control" type="text" name="bancos_banco" value="" placeholder="<?php _t("Banco"); ?>"></td> 
 <td><input class="form-control" type="text" name="bancos_cuenta" value="" placeholder="<?php _t("Cuenta"); ?>"></td> 
 <td><input class="form-control" type="text" name="bancos_iban" value="" placeholder="<?php _t("Iban"); ?>"></td> 
 <td><input class="form-control" type="text" name="bancos_orden" value="" placeholder="<?php _t("Orden"); ?>"></td> 
 <td><input class="form-control" type="text" name="bancos_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 