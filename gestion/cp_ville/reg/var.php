<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "cp_ville"=>[ "vil_id"=>"$cp_ville_vil_id",  
 "vil_cp"=>"$cp_ville_vil_cp",  
 "vil_nom"=>"$cp_ville_vil_nom",  
                ]
        ];  $html = str_replace('%cp_ville_vil_id%',       $datos['cp_ville']['vil_id'], $html); 
  $html = str_replace('%cp_ville_vil_cp%',       $datos['cp_ville']['vil_cp'], $html); 
  $html = str_replace('%cp_ville_vil_nom%',       $datos['cp_ville']['vil_nom'], $html); 
