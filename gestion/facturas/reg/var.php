<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "facturas"=>[ "id"=>"$facturas_id",  
 "ref"=>"$facturas_ref",  
 "id_presupuesto"=>"$facturas_id_presupuesto",  
 "id_notac"=>"$facturas_id_notac",  
 "id_contacto"=>"$facturas_id_contacto",  
 "fecha_registro"=>"$facturas_fecha_registro",  
 "sub_total"=>"$facturas_sub_total",  
 "iva"=>"$facturas_iva",  
 "anticipo"=>"$facturas_anticipo",  
 "saldo"=>"$facturas_saldo",  
 "comentarios"=>"$facturas_comentarios",  
 "r1"=>"$facturas_r1",  
 "r2"=>"$facturas_r2",  
 "r3"=>"$facturas_r3",  
 "fecha_cobro"=>"$facturas_fecha_cobro",  
 "expira"=>"$facturas_expira",  
 "ce"=>"$facturas_ce",  
 "estatus"=>"$facturas_estatus",  
                ]
        ];  $html = str_replace('%facturas_id%',       $datos['facturas']['id'], $html); 
  $html = str_replace('%facturas_ref%',       $datos['facturas']['ref'], $html); 
  $html = str_replace('%facturas_id_presupuesto%',       $datos['facturas']['id_presupuesto'], $html); 
  $html = str_replace('%facturas_id_notac%',       $datos['facturas']['id_notac'], $html); 
  $html = str_replace('%facturas_id_contacto%',       $datos['facturas']['id_contacto'], $html); 
  $html = str_replace('%facturas_fecha_registro%',       $datos['facturas']['fecha_registro'], $html); 
  $html = str_replace('%facturas_sub_total%',       $datos['facturas']['sub_total'], $html); 
  $html = str_replace('%facturas_iva%',       $datos['facturas']['iva'], $html); 
  $html = str_replace('%facturas_anticipo%',       $datos['facturas']['anticipo'], $html); 
  $html = str_replace('%facturas_saldo%',       $datos['facturas']['saldo'], $html); 
  $html = str_replace('%facturas_comentarios%',       $datos['facturas']['comentarios'], $html); 
  $html = str_replace('%facturas_r1%',       $datos['facturas']['r1'], $html); 
  $html = str_replace('%facturas_r2%',       $datos['facturas']['r2'], $html); 
  $html = str_replace('%facturas_r3%',       $datos['facturas']['r3'], $html); 
  $html = str_replace('%facturas_fecha_cobro%',       $datos['facturas']['fecha_cobro'], $html); 
  $html = str_replace('%facturas_expira%',       $datos['facturas']['expira'], $html); 
  $html = str_replace('%facturas_ce%',       $datos['facturas']['ce'], $html); 
  $html = str_replace('%facturas_estatus%',       $datos['facturas']['estatus'], $html); 
