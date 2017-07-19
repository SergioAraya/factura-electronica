<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "paises"=>[ "Code"=>"$paises_Code",  
 "name"=>"$paises_name",  
 "continent"=>"$paises_continent",  
 "Region"=>"$paises_Region",  
 "SurfaceArea"=>"$paises_SurfaceArea",  
 "IndepYear"=>"$paises_IndepYear",  
 "Population"=>"$paises_Population",  
 "LifeExpectancy"=>"$paises_LifeExpectancy",  
 "GNP"=>"$paises_GNP",  
 "GNPOld"=>"$paises_GNPOld",  
 "LocalName"=>"$paises_LocalName",  
 "GovernmentForm"=>"$paises_GovernmentForm",  
 "HeadOfState"=>"$paises_HeadOfState",  
 "Capital"=>"$paises_Capital",  
 "code2"=>"$paises_code2",  
 "prefijo_ruc"=>"$paises_prefijo_ruc",  
                ]
        ];  $html = str_replace('%paises_Code%',       $datos['paises']['Code'], $html); 
  $html = str_replace('%paises_name%',       $datos['paises']['name'], $html); 
  $html = str_replace('%paises_continent%',       $datos['paises']['continent'], $html); 
  $html = str_replace('%paises_Region%',       $datos['paises']['Region'], $html); 
  $html = str_replace('%paises_SurfaceArea%',       $datos['paises']['SurfaceArea'], $html); 
  $html = str_replace('%paises_IndepYear%',       $datos['paises']['IndepYear'], $html); 
  $html = str_replace('%paises_Population%',       $datos['paises']['Population'], $html); 
  $html = str_replace('%paises_LifeExpectancy%',       $datos['paises']['LifeExpectancy'], $html); 
  $html = str_replace('%paises_GNP%',       $datos['paises']['GNP'], $html); 
  $html = str_replace('%paises_GNPOld%',       $datos['paises']['GNPOld'], $html); 
  $html = str_replace('%paises_LocalName%',       $datos['paises']['LocalName'], $html); 
  $html = str_replace('%paises_GovernmentForm%',       $datos['paises']['GovernmentForm'], $html); 
  $html = str_replace('%paises_HeadOfState%',       $datos['paises']['HeadOfState'], $html); 
  $html = str_replace('%paises_Capital%',       $datos['paises']['Capital'], $html); 
  $html = str_replace('%paises_code2%',       $datos['paises']['code2'], $html); 
  $html = str_replace('%paises_prefijo_ruc%',       $datos['paises']['prefijo_ruc'], $html); 
