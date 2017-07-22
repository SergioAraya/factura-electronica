<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "plugins"=>[ "id"=>"$plugins_id",  
 "nombre"=>"$plugins_nombre",  
 "descripcion"=>"$plugins_descripcion",  
 "version"=>"$plugins_version",  
 "autor"=>"$plugins_autor",  
 "autor_email"=>"$plugins_autor_email",  
 "plugin_web"=>"$plugins_plugin_web",  
 "plugin_zip"=>"$plugins_plugin_zip",  
 "orden"=>"$plugins_orden",  
 "estatus"=>"$plugins_estatus",  
                ]
        ];  $html = str_replace('%plugins_id%',       $datos['plugins']['id'], $html); 
  $html = str_replace('%plugins_nombre%',       $datos['plugins']['nombre'], $html); 
  $html = str_replace('%plugins_descripcion%',       $datos['plugins']['descripcion'], $html); 
  $html = str_replace('%plugins_version%',       $datos['plugins']['version'], $html); 
  $html = str_replace('%plugins_autor%',       $datos['plugins']['autor'], $html); 
  $html = str_replace('%plugins_autor_email%',       $datos['plugins']['autor_email'], $html); 
  $html = str_replace('%plugins_plugin_web%',       $datos['plugins']['plugin_web'], $html); 
  $html = str_replace('%plugins_plugin_zip%',       $datos['plugins']['plugin_zip'], $html); 
  $html = str_replace('%plugins_orden%',       $datos['plugins']['orden'], $html); 
  $html = str_replace('%plugins_estatus%',       $datos['plugins']['estatus'], $html); 
