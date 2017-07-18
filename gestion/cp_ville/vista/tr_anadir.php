<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>

            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="cp_ville">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr> <td><input class="form-control" type="text" name="cp_ville_vil_cp" value="" placeholder="<?php _t("Vil_cp"); ?>"></td> 
 <td><input class="form-control" type="text" name="cp_ville_vil_nom" value="" placeholder="<?php _t("Vil_nom"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 