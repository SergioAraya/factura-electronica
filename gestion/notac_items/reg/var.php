<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "notac_items"=>[ "id"=>"$notac_items_id",  
 "ref_notac"=>"$notac_items_ref_notac",  
 "cantidad"=>"$notac_items_cantidad",  
 "descripcion"=>"$notac_items_descripcion",  
 "valor"=>"$notac_items_valor",  
 "porcentaje_iva"=>"$notac_items_porcentaje_iva",  
                ]
        ];  $html = str_replace('%notac_items_id%',       $datos['notac_items']['id'], $html); 
  $html = str_replace('%notac_items_ref_notac%',       $datos['notac_items']['ref_notac'], $html); 
  $html = str_replace('%notac_items_cantidad%',       $datos['notac_items']['cantidad'], $html); 
  $html = str_replace('%notac_items_descripcion%',       $datos['notac_items']['descripcion'], $html); 
  $html = str_replace('%notac_items_valor%',       $datos['notac_items']['valor'], $html); 
  $html = str_replace('%notac_items_porcentaje_iva%',       $datos['notac_items']['porcentaje_iva'], $html); 
