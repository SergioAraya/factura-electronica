<?php /**
  magia_version: 0.0.11
 * */ ?>
<h2>

    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Nuevo"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
    <input type="hidden" name="p" value="facturas"> 
    <input type="hidden" name="c" value="crear"> 
    <input type="hidden" name="a" value="crear"> 

    <div class="form-group"> 
        <label for="facturas_ref" class="col-sm-2 control-label"><?php _t("Ref"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="facturas_ref" id="facturas_ref" placeholder="<?php _t("Ref"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="facturas_id_presupuesto" class="col-sm-2 control-label"><?php _t("Presupuesto"); ?></label> 
        <div class="col-sm-10"> 
            <select class="form-control" name="facturas_id_presupuesto" >
                <option value="null"><?php _t("Escoja uno");?></option>
                <?php presupuestos_add($facturas_id_presupuesto); ?>
            </select>
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="facturas_id_notac" class="col-sm-2 control-label"><?php _t("Notac"); ?></label> 
        <div class="col-sm-10"> 
            <select class="form-control" name="facturas_id_notac" >
                <option value="null"><?php _t("Escoja uno");?></option>
                    <?php notac_add($facturas_id_notac); ?>
            </select>
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="facturas_id_contacto" class="col-sm-2 control-label"><?php _t("Contacto"); ?></label> 
        <div class="col-sm-10"> 
            <select class="form-control" name="facturas_id_contacto" >
                <?php contactos_add($facturas_id_contacto); ?>
            </select>
        </div> 
    </div> 


    <script>
        $(function () {
            $("#facturas_fecha_registro").datepicker();
        });
    </script>
    <div class="form-group"> 
        <label for="facturas_fecha_registro" class="col-sm-2 control-label"><?php _t("Fecha registro"); ?></label> 
        <div class="col-sm-3"> 
            <div class="input-group"> 
                <input type="text" class="form-control" name="facturas_fecha_registro" id="facturas_fecha_registro" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
                <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
            </div> 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="facturas_sub_total" class="col-sm-2 control-label"><?php _t("Sub total"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="facturas_sub_total" id="facturas_sub_total" placeholder="<?php _t("Sub total"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="facturas_iva" class="col-sm-2 control-label"><?php _t("Iva"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="facturas_iva" id="facturas_iva" placeholder="<?php _t("Iva"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="facturas_anticipo" class="col-sm-2 control-label"><?php _t("Anticipo"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="facturas_anticipo" id="facturas_anticipo" placeholder="<?php _t("Anticipo"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="facturas_saldo" class="col-sm-2 control-label"><?php _t("Saldo"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="facturas_saldo" id="facturas_saldo" placeholder="<?php _t("Saldo"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="facturas_comentarios" class="col-sm-2 control-label"><?php _t("Comentarios"); ?></label> 
        <div class="col-sm-10"> 
            <textarea  class="form-control" name="facturas_comentarios" id="facturas_comentarios" placeholder="<?php _t("Comentarios"); ?>"></textarea> 
        </div> 
    </div> 


    <script>
        $(function () {
            $("#facturas_r1").datepicker();
        });
    </script>
    <div class="form-group"> 
        <label for="facturas_r1" class="col-sm-2 control-label"><?php _t("R1"); ?></label> 
        <div class="col-sm-3"> 
            <div class="input-group"> 
                <input type="text" class="form-control" name="facturas_r1" id="facturas_r1" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
                <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
            </div> 
        </div> 
    </div> 


    <script>
        $(function () {
            $("#facturas_r2").datepicker();
        });
    </script>
    <div class="form-group"> 
        <label for="facturas_r2" class="col-sm-2 control-label"><?php _t("R2"); ?></label> 
        <div class="col-sm-3"> 
            <div class="input-group"> 
                <input type="text" class="form-control" name="facturas_r2" id="facturas_r2" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
                <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
            </div> 
        </div> 
    </div> 


    <script>
        $(function () {
            $("#facturas_r3").datepicker();
        });
    </script>
    <div class="form-group"> 
        <label for="facturas_r3" class="col-sm-2 control-label"><?php _t("R3"); ?></label> 
        <div class="col-sm-3"> 
            <div class="input-group"> 
                <input type="text" class="form-control" name="facturas_r3" id="facturas_r3" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
                <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
            </div> 
        </div> 
    </div> 


    <script>
        $(function () {
            $("#facturas_fecha_cobro").datepicker();
        });
    </script>
    <div class="form-group"> 
        <label for="facturas_fecha_cobro" class="col-sm-2 control-label"><?php _t("Fecha cobro"); ?></label> 
        <div class="col-sm-3"> 
            <div class="input-group"> 
                <input type="text" class="form-control" name="facturas_fecha_cobro" id="facturas_fecha_cobro" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
                <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
            </div> 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="facturas_expira" class="col-sm-2 control-label"><?php _t("Expira"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="facturas_expira" id="facturas_expira" placeholder="<?php _t("Expira"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="facturas_ce" class="col-sm-2 control-label"><?php _t("Ce"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="facturas_ce" id="facturas_ce" placeholder="<?php _t("Ce"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="facturas_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="facturas_estatus" id="facturas_estatus" placeholder="<?php _t("Estatus"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10"> 
            <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
        </div> 
    </div> 
</form> 
