<?php /**
  magia_version: 0.0.11
 * */ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="facturas">
    <input  type="hidden" name="c" value="buscar">
    <div class="form-group">
        <label for="Ref"><?php _t("Ref"); ?></label>
        <input type="text" class="form-control" name="facturas_ref" id="facturas_ref" placeholder="<?php _t("Ref"); ?>">
    </div>

    <div class="form-group">
        <label for="Id_presupuesto"><?php _t("Presupuesto"); ?></label>
        <input type="text" class="form-control" name="facturas_id_presupuesto" id="facturas_id_presupuesto" placeholder="<?php _t("Id_presupuesto"); ?>">
    </div>

    <div class="form-group">
        <label for="Id_notac"><?php _t("Notac"); ?></label>
        <input type="text" class="form-control" name="facturas_id_notac" id="facturas_id_notac" placeholder="<?php _t("Id_notac"); ?>">
    </div>

    <div class="form-group">
        <label for="Id_contacto"><?php _t("Contacto"); ?></label>
        <input type="text" class="form-control" name="facturas_id_contacto" id="facturas_id_contacto" placeholder="<?php _t("Id_contacto"); ?>">
    </div>

    <div class="form-group">
        <label for="Fecha_registro"><?php _t("Fecha_registro"); ?></label>
        <input type="text" class="form-control" name="facturas_fecha_registro" id="facturas_fecha_registro" placeholder="<?php _t("Fecha_registro"); ?>">
    </div>

    <div class="form-group">
        <label for="Sub_total"><?php _t("Sub_total"); ?></label>
        <input type="text" class="form-control" name="facturas_sub_total" id="facturas_sub_total" placeholder="<?php _t("Sub_total"); ?>">
    </div>

    <div class="form-group">
        <label for="Iva"><?php _t("Iva"); ?></label>
        <input type="text" class="form-control" name="facturas_iva" id="facturas_iva" placeholder="<?php _t("Iva"); ?>">
    </div>

    <div class="form-group">
        <label for="Anticipo"><?php _t("Anticipo"); ?></label>
        <input type="text" class="form-control" name="facturas_anticipo" id="facturas_anticipo" placeholder="<?php _t("Anticipo"); ?>">
    </div>

    <div class="form-group">
        <label for="Saldo"><?php _t("Saldo"); ?></label>
        <input type="text" class="form-control" name="facturas_saldo" id="facturas_saldo" placeholder="<?php _t("Saldo"); ?>">
    </div>

    <div class="form-group">
        <label for="Comentarios"><?php _t("Comentarios"); ?></label>
        <input type="text" class="form-control" name="facturas_comentarios" id="facturas_comentarios" placeholder="<?php _t("Comentarios"); ?>">
    </div>

    <div class="form-group">
        <label for="R1"><?php _t("R1"); ?></label>
        <input type="text" class="form-control" name="facturas_r1" id="facturas_r1" placeholder="<?php _t("R1"); ?>">
    </div>

    <div class="form-group">
        <label for="R2"><?php _t("R2"); ?></label>
        <input type="text" class="form-control" name="facturas_r2" id="facturas_r2" placeholder="<?php _t("R2"); ?>">
    </div>

    <div class="form-group">
        <label for="R3"><?php _t("R3"); ?></label>
        <input type="text" class="form-control" name="facturas_r3" id="facturas_r3" placeholder="<?php _t("R3"); ?>">
    </div>

    <div class="form-group">
        <label for="Fecha_cobro"><?php _t("Fecha_cobro"); ?></label>
        <input type="text" class="form-control" name="facturas_fecha_cobro" id="facturas_fecha_cobro" placeholder="<?php _t("Fecha_cobro"); ?>">
    </div>

    <div class="form-group">
        <label for="Expira"><?php _t("Expira"); ?></label>
        <input type="text" class="form-control" name="facturas_expira" id="facturas_expira" placeholder="<?php _t("Expira"); ?>">
    </div>

    <div class="form-group">
        <label for="Ce"><?php _t("Ce"); ?></label>
        <input type="text" class="form-control" name="facturas_ce" id="facturas_ce" placeholder="<?php _t("Ce"); ?>">
    </div>

    <div class="form-group">
        <label for="Estatus"><?php _t("Estatus"); ?></label>
        <input type="text" class="form-control" name="facturas_estatus" id="facturas_estatus" placeholder="<?php _t("Estatus"); ?>">
    </div>

    <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>