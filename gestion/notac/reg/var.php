<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "notac"=>[ "id"=>"$notac_id",  
 "ref"=>"$notac_ref",  
 "id_factura"=>"$notac_id_factura",  
 "id_contacto"=>"$notac_id_contacto",  
 "fecha_registro"=>"$notac_fecha_registro",  
 "fecha_pago"=>"$notac_fecha_pago",  
 "sub_total"=>"$notac_sub_total",  
 "iva"=>"$notac_iva",  
 "comentarios"=>"$notac_comentarios",  
 "estatus"=>"$notac_estatus",  
                ]
        ];  $html = str_replace('%notac_id%',       $datos['notac']['id'], $html); 
  $html = str_replace('%notac_ref%',       $datos['notac']['ref'], $html); 
  $html = str_replace('%notac_id_factura%',       $datos['notac']['id_factura'], $html); 
  $html = str_replace('%notac_id_contacto%',       $datos['notac']['id_contacto'], $html); 
  $html = str_replace('%notac_fecha_registro%',       $datos['notac']['fecha_registro'], $html); 
  $html = str_replace('%notac_fecha_pago%',       $datos['notac']['fecha_pago'], $html); 
  $html = str_replace('%notac_sub_total%',       $datos['notac']['sub_total'], $html); 
  $html = str_replace('%notac_iva%',       $datos['notac']['iva'], $html); 
  $html = str_replace('%notac_comentarios%',       $datos['notac']['comentarios'], $html); 
  $html = str_replace('%notac_estatus%',       $datos['notac']['estatus'], $html); 
