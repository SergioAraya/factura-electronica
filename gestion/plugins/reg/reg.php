<?php 
 /**  
 magia_version: 0.0.11 
 **/ 

  $plugins_id = $plugins['id']; 
  $plugins_nombre = $plugins['nombre']; 
  $plugins_descripcion = $plugins['descripcion']; 
  $plugins_version = $plugins['version']; 
  $plugins_autor = $plugins['autor']; 
  $plugins_autor_email = $plugins['autor_email']; 
  $plugins_plugin_web = $plugins['plugin_web']; 
  $plugins_plugin_zip = $plugins['plugin_zip']; 
  $plugins_orden = $plugins['orden']; 
  $plugins_estatus = $plugins['estatus']; 
 $plugins_estatus_0 = "";   $plugins_estatus_1 = "";      if($plugins_estatus==0){
      $plugins_estatus_0 = " checked "; 
      $plugins_estatus_1 = ""; 
  }else {
      $plugins_estatus_0 = ""; 
      $plugins_estatus_1 = "checked";       
  }  
