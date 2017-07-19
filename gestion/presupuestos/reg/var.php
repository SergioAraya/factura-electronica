<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "presupuestos"=>[ "id"=>"$presupuestos_id",  
 "ref"=>"$presupuestos_ref",  
 "id_factura"=>"$presupuestos_id_factura",  
 "id_contacto"=>"$presupuestos_id_contacto",  
 "fecha_registro"=>"$presupuestos_fecha_registro",  
 "sub_total"=>"$presupuestos_sub_total",  
 "iva"=>"$presupuestos_iva",  
 "anticipo"=>"$presupuestos_anticipo",  
 "saldo"=>"$presupuestos_saldo",  
 "comentarios"=>"$presupuestos_comentarios",  
 "r1"=>"$presupuestos_r1",  
 "r2"=>"$presupuestos_r2",  
 "r3"=>"$presupuestos_r3",  
 "fecha_cobro"=>"$presupuestos_fecha_cobro",  
 "expira"=>"$presupuestos_expira",  
 "ce"=>"$presupuestos_ce",  
 "estatus"=>"$presupuestos_estatus",  
                ]
        ];  $html = str_replace('%presupuestos_id%',       $datos['presupuestos']['id'], $html); 
  $html = str_replace('%presupuestos_ref%',       $datos['presupuestos']['ref'], $html); 
  $html = str_replace('%presupuestos_id_factura%',       $datos['presupuestos']['id_factura'], $html); 
  $html = str_replace('%presupuestos_id_contacto%',       $datos['presupuestos']['id_contacto'], $html); 
  $html = str_replace('%presupuestos_fecha_registro%',       $datos['presupuestos']['fecha_registro'], $html); 
  $html = str_replace('%presupuestos_sub_total%',       $datos['presupuestos']['sub_total'], $html); 
  $html = str_replace('%presupuestos_iva%',       $datos['presupuestos']['iva'], $html); 
  $html = str_replace('%presupuestos_anticipo%',       $datos['presupuestos']['anticipo'], $html); 
  $html = str_replace('%presupuestos_saldo%',       $datos['presupuestos']['saldo'], $html); 
  $html = str_replace('%presupuestos_comentarios%',       $datos['presupuestos']['comentarios'], $html); 
  $html = str_replace('%presupuestos_r1%',       $datos['presupuestos']['r1'], $html); 
  $html = str_replace('%presupuestos_r2%',       $datos['presupuestos']['r2'], $html); 
  $html = str_replace('%presupuestos_r3%',       $datos['presupuestos']['r3'], $html); 
  $html = str_replace('%presupuestos_fecha_cobro%',       $datos['presupuestos']['fecha_cobro'], $html); 
  $html = str_replace('%presupuestos_expira%',       $datos['presupuestos']['expira'], $html); 
  $html = str_replace('%presupuestos_ce%',       $datos['presupuestos']['ce'], $html); 
  $html = str_replace('%presupuestos_estatus%',       $datos['presupuestos']['estatus'], $html); 
