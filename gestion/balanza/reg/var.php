<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "balanza"=>[ "id"=>"$balanza_id",  
 "id_contacto"=>"$balanza_id_contacto",  
 "id_factura"=>"$balanza_id_factura",  
 "tipo"=>"$balanza_tipo",  
 "ref"=>"$balanza_ref",  
 "descripcion"=>"$balanza_descripcion",  
 "ce"=>"$balanza_ce",  
 "sub_total"=>"$balanza_sub_total",  
 "iva"=>"$balanza_iva",  
 "fecha"=>"$balanza_fecha",  
 "fecha_registro"=>"$balanza_fecha_registro",  
 "factura"=>"$balanza_factura",  
 "banco"=>"$balanza_banco",  
 "anulada"=>"$balanza_anulada",  
 "cod_anu"=>"$balanza_cod_anu",  
                ]
        ];  $html = str_replace('%balanza_id%',       $datos['balanza']['id'], $html); 
  $html = str_replace('%balanza_id_contacto%',       $datos['balanza']['id_contacto'], $html); 
  $html = str_replace('%balanza_id_factura%',       $datos['balanza']['id_factura'], $html); 
  $html = str_replace('%balanza_tipo%',       $datos['balanza']['tipo'], $html); 
  $html = str_replace('%balanza_ref%',       $datos['balanza']['ref'], $html); 
  $html = str_replace('%balanza_descripcion%',       $datos['balanza']['descripcion'], $html); 
  $html = str_replace('%balanza_ce%',       $datos['balanza']['ce'], $html); 
  $html = str_replace('%balanza_sub_total%',       $datos['balanza']['sub_total'], $html); 
  $html = str_replace('%balanza_iva%',       $datos['balanza']['iva'], $html); 
  $html = str_replace('%balanza_fecha%',       $datos['balanza']['fecha'], $html); 
  $html = str_replace('%balanza_fecha_registro%',       $datos['balanza']['fecha_registro'], $html); 
  $html = str_replace('%balanza_factura%',       $datos['balanza']['factura'], $html); 
  $html = str_replace('%balanza_banco%',       $datos['balanza']['banco'], $html); 
  $html = str_replace('%balanza_anulada%',       $datos['balanza']['anulada'], $html); 
  $html = str_replace('%balanza_cod_anu%',       $datos['balanza']['cod_anu'], $html); 
