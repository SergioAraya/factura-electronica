<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "factura_items"=>[ "id"=>"$factura_items_id",  
 "ref_factura"=>"$factura_items_ref_factura",  
 "cantidad"=>"$factura_items_cantidad",  
 "descripcion"=>"$factura_items_descripcion",  
 "valor"=>"$factura_items_valor",  
 "porcentaje_iva"=>"$factura_items_porcentaje_iva",  
                ]
        ];  $html = str_replace('%factura_items_id%',       $datos['factura_items']['id'], $html); 
  $html = str_replace('%factura_items_ref_factura%',       $datos['factura_items']['ref_factura'], $html); 
  $html = str_replace('%factura_items_cantidad%',       $datos['factura_items']['cantidad'], $html); 
  $html = str_replace('%factura_items_descripcion%',       $datos['factura_items']['descripcion'], $html); 
  $html = str_replace('%factura_items_valor%',       $datos['factura_items']['valor'], $html); 
  $html = str_replace('%factura_items_porcentaje_iva%',       $datos['factura_items']['porcentaje_iva'], $html); 
