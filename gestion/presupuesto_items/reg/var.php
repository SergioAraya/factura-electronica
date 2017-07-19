<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "presupuesto_items"=>[ "id"=>"$presupuesto_items_id",  
 "ref_presupuesto"=>"$presupuesto_items_ref_presupuesto",  
 "cantidad"=>"$presupuesto_items_cantidad",  
 "descripcion"=>"$presupuesto_items_descripcion",  
 "valor"=>"$presupuesto_items_valor",  
 "porcentaje_iva"=>"$presupuesto_items_porcentaje_iva",  
                ]
        ];  $html = str_replace('%presupuesto_items_id%',       $datos['presupuesto_items']['id'], $html); 
  $html = str_replace('%presupuesto_items_ref_presupuesto%',       $datos['presupuesto_items']['ref_presupuesto'], $html); 
  $html = str_replace('%presupuesto_items_cantidad%',       $datos['presupuesto_items']['cantidad'], $html); 
  $html = str_replace('%presupuesto_items_descripcion%',       $datos['presupuesto_items']['descripcion'], $html); 
  $html = str_replace('%presupuesto_items_valor%',       $datos['presupuesto_items']['valor'], $html); 
  $html = str_replace('%presupuesto_items_porcentaje_iva%',       $datos['presupuesto_items']['porcentaje_iva'], $html); 
