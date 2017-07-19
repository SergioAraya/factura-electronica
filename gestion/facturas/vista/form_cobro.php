<h2>
    <?php _t("Registro de cobros"); ?>
    

</h2> 

<form class="form" action="index.php" method="post"> 
    <input type="hidden" name="p" value="balanza"> 
    <input type="hidden" name="c" value="crear"> 
    <input type="hidden" name="a" value="crear"> 

   
    
    <div class="form-group"> 
        <label for="balanza_id_contacto" class="col-sm-12 control-label"><?php _t("Contacto"); ?></label> 
        <div class="col-sm-12"> 
            <select class="form-control" name="balanza_id_contacto" >
                <?php contactos_add($balanza_id_contacto); ?>
            </select>
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="balanza_id_factura" class="col-sm-12 control-label"><?php _t("Factura"); ?></label> 
        <div class="col-sm-12"> 
            <select class="form-control" name="balanza_id_factura" >
                <?php facturas_add($facturas_id); ?>
            </select>
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="balanza_tipo" class="col-sm-12 control-label"><?php _t("Tipo"); ?></label> 
        <div class="col-sm-12"> 
            <select class="form-control" name="balanza_tipo" >
                <option value="1">1 Ingresos</option>
                <option value="-1">-1 Gastos</option>
            </select>

            
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="balanza_ref" class="col-sm-12 control-label"><?php _t("Ref"); ?></label> 
        <div class="col-sm-12"> 
            <input type="text" class="form-control" name="balanza_ref" id="balanza_ref" placeholder="<?php _t("Ref"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="balanza_descripcion" class="col-sm-12 control-label"><?php _t("Descripcion"); ?></label> 
        <div class="col-sm-12"> 
            <input 
                type="text" 
                class="form-control" 
                name="balanza_descripcion" 
                id="balanza_descripcion" 
                placeholder="<?php _t("Descripcion"); ?>" 
                value="<?php _t("Factura"); echo " $facturas_id"; ?>"   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="balanza_ce" class="col-sm-12 control-label"><?php _t("Ce"); ?></label> 
        <div class="col-sm-12"> 
            <input 
                type="text" 
                class="form-control" 
                name="balanza_ce" 
                id="balanza_ce" 
                placeholder="<?php _t("Ce"); ?>" value="<?php echo $facturas_ce; ?>"   
                readonly=""
                > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="balanza_sub_total" class="col-sm-12 control-label"><?php _t("Sub total"); ?></label> 
        <div class="col-sm-12"> 
            <input type="text" class="form-control" name="balanza_sub_total" id="balanza_sub_total" placeholder="<?php _t("Sub total"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="balanza_iva" class="col-sm-12 control-label"><?php _t("Iva"); ?></label> 
        <div class="col-sm-12"> 
            <input type="text" class="form-control" name="balanza_iva" id="balanza_iva" placeholder="<?php _t("Iva"); ?>" value=""   > 
        </div> 
    </div> 


    <script>
        $(function () {
            $("#balanza_fecha").datepicker();
        });
    </script>
    <div class="form-group"> 
        <label for="balanza_fecha" class="col-sm-12 control-label"><?php _t("Fecha"); ?></label> 
        <div class="col-sm-10"> 
            <div class="input-group"> 
                <input type="text" class="form-control" name="balanza_fecha" id="balanza_fecha" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
                <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
            </div> 
        </div> 
    </div> 


    <script>
        $(function () {
            $("#balanza_fecha_registro").datepicker();
        });
    </script>
    <div class="form-group"> 
        <label for="balanza_fecha_registro" class="col-sm-12 control-label"><?php _t("Fecha registro"); ?></label> 
        <div class="col-sm-3"> 
            <div class="input-group"> 
                <input type="text" class="form-control" name="balanza_fecha_registro" id="balanza_fecha_registro" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
                <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
            </div> 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="balanza_factura" class="col-sm-12 control-label"><?php _t("Factura"); ?></label> 
        <div class="col-sm-12"> 
            <input type="text" class="form-control" name="balanza_factura" id="balanza_factura" placeholder="<?php _t("Factura"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="balanza_banco" class="col-sm-12 control-label"><?php _t("Banco"); ?></label> 
        <div class="col-sm-12"> 
            <input type="text" class="form-control" name="balanza_banco" id="balanza_banco" placeholder="<?php _t("Banco"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="balanza_anulada" class="col-sm-12 control-label"><?php _t("Anulada"); ?></label> 
        <div class="col-sm-12"> 
            <input type="text" class="form-control" name="balanza_anulada" id="balanza_anulada" placeholder="<?php _t("Anulada"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="balanza_cod_anu" class="col-sm-12 control-label"><?php _t("Cod anu"); ?></label> 
        <div class="col-sm-12"> 
            <input type="text" class="form-control" name="balanza_cod_anu" id="balanza_cod_anu" placeholder="<?php _t("Cod anu"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-12"> 
            <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
        </div> 
    </div> 
</form> 
