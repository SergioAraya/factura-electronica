<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "bancos"=>[ "id"=>"$bancos_id",  
 "banco"=>"$bancos_banco",  
 "cuenta"=>"$bancos_cuenta",  
 "iban"=>"$bancos_iban",  
 "orden"=>"$bancos_orden",  
 "estatus"=>"$bancos_estatus",  
                ]
        ];  $html = str_replace('%bancos_id%',       $datos['bancos']['id'], $html); 
  $html = str_replace('%bancos_banco%',       $datos['bancos']['banco'], $html); 
  $html = str_replace('%bancos_cuenta%',       $datos['bancos']['cuenta'], $html); 
  $html = str_replace('%bancos_iban%',       $datos['bancos']['iban'], $html); 
  $html = str_replace('%bancos_orden%',       $datos['bancos']['orden'], $html); 
  $html = str_replace('%bancos_estatus%',       $datos['bancos']['estatus'], $html); 
