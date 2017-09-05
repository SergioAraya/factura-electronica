<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar"); ?></h2> 

</h2> 

     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="paises"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="paises_id" value="<?php echo $paises_id; ?>"> 

 <?php 
                        $campos = array(array(
"type" => "text",
"name" => "paises_name",
"value" => "$paises_name",                                                                        
    
"for" => "paises_name",
"label" => "name",
"class" => "form-control",
"id" => "paises_name",
"placeholder" => "name",
                    ),array(
"type" => "text",
"name" => "paises_continent",
"value" => "$paises_continent",                                                                        
    
"for" => "paises_continent",
"label" => "continent",
"class" => "form-control",
"id" => "paises_continent",
"placeholder" => "continent",
                    ),array(
"type" => "text",
"name" => "paises_Region",
"value" => "$paises_Region",                                                                        
    
"for" => "paises_Region",
"label" => "Region",
"class" => "form-control",
"id" => "paises_Region",
"placeholder" => "Region",
                    ),array(
"type" => "text",
"name" => "paises_SurfaceArea",
"value" => "$paises_SurfaceArea",                                                                        
    
"for" => "paises_SurfaceArea",
"label" => "SurfaceArea",
"class" => "form-control",
"id" => "paises_SurfaceArea",
"placeholder" => "SurfaceArea",
                    ),array(
"type" => "text",
"name" => "paises_IndepYear",
"value" => "$paises_IndepYear",                                                                        
    
"for" => "paises_IndepYear",
"label" => "IndepYear",
"class" => "form-control",
"id" => "paises_IndepYear",
"placeholder" => "IndepYear",
                    ),array(
"type" => "text",
"name" => "paises_Population",
"value" => "$paises_Population",                                                                        
    
"for" => "paises_Population",
"label" => "Population",
"class" => "form-control",
"id" => "paises_Population",
"placeholder" => "Population",
                    ),array(
"type" => "text",
"name" => "paises_LifeExpectancy",
"value" => "$paises_LifeExpectancy",                                                                        
    
"for" => "paises_LifeExpectancy",
"label" => "LifeExpectancy",
"class" => "form-control",
"id" => "paises_LifeExpectancy",
"placeholder" => "LifeExpectancy",
                    ),array(
"type" => "text",
"name" => "paises_GNP",
"value" => "$paises_GNP",                                                                        
    
"for" => "paises_GNP",
"label" => "GNP",
"class" => "form-control",
"id" => "paises_GNP",
"placeholder" => "GNP",
                    ),array(
"type" => "text",
"name" => "paises_GNPOld",
"value" => "$paises_GNPOld",                                                                        
    
"for" => "paises_GNPOld",
"label" => "GNPOld",
"class" => "form-control",
"id" => "paises_GNPOld",
"placeholder" => "GNPOld",
                    ),array(
"type" => "text",
"name" => "paises_LocalName",
"value" => "$paises_LocalName",                                                                        
    
"for" => "paises_LocalName",
"label" => "LocalName",
"class" => "form-control",
"id" => "paises_LocalName",
"placeholder" => "LocalName",
                    ),array(
"type" => "text",
"name" => "paises_GovernmentForm",
"value" => "$paises_GovernmentForm",                                                                        
    
"for" => "paises_GovernmentForm",
"label" => "GovernmentForm",
"class" => "form-control",
"id" => "paises_GovernmentForm",
"placeholder" => "GovernmentForm",
                    ),array(
"type" => "text",
"name" => "paises_HeadOfState",
"value" => "$paises_HeadOfState",                                                                        
    
"for" => "paises_HeadOfState",
"label" => "HeadOfState",
"class" => "form-control",
"id" => "paises_HeadOfState",
"placeholder" => "HeadOfState",
                    ),array(
"type" => "text",
"name" => "paises_Capital",
"value" => "$paises_Capital",                                                                        
    
"for" => "paises_Capital",
"label" => "Capital",
"class" => "form-control",
"id" => "paises_Capital",
"placeholder" => "Capital",
                    ),array(
"type" => "text",
"name" => "paises_code2",
"value" => "$paises_code2",                                                                        
    
"for" => "paises_code2",
"label" => "code2",
"class" => "form-control",
"id" => "paises_code2",
"placeholder" => "code2",
                    ),array(
"type" => "text",
"name" => "paises_prefijo_ruc",
"value" => "$paises_prefijo_ruc",                                                                        
    
"for" => "paises_prefijo_ruc",
"label" => "prefijo_ruc",
"class" => "form-control",
"id" => "paises_prefijo_ruc",
"placeholder" => "prefijo_ruc",
                    ),);

        foreach ($campos as $key => $value) {

        // echo var_dump($value);


        switch ($value['type']) {
            /**
             * hidden
             */
            case 'hidden':
                echo ' <input type="hidden" name="' . $value['name'] . '" value="' . $value['value'] . '">  ';
                break;
            /**
             * P
             * 
             */
            case 'p':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                               <p class="form-control-static">'.$value['value'].'</p>
                            </div> 
                          </div> ';


                break;
            /**
             * Texto
             */
            case 'text':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                              <input 
                                  type="text" 
                                  class="form-control" 
                                  name="' . $value['name'] . '" 
                                  id="' . $value['id'] . '" 
                                  placeholder="' . _tr($value['placeholder']) . '" 
                                  value="' . $value['value'] . '"  
                                  > 
                            </div> 
                          </div> ';


                break;
            /**
             * Email
             */
            case 'email':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                              <input 
                                  type="email" 
                                  class="form-control" 
                                  name="' . $value['name'] . '" 
                                  id="' . $value['id'] . '" 
                                  placeholder="' . _tr($value['placeholder']) . '" 
                                  value="' . $value['value'] . '"  
                                  > 
                            </div> 
                          </div> ';


                break;
            case 'textarea':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                              <textarea class="form-control" >' . $value['value'] . '</textarea> 
                            </div> 
                          </div> ';


                break;
            /**
             * Campo tipo menu deruante 
             * <select></select>
             */
            case 'select':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                                <select class="' . $value['class'] . '" name="' . $value['name'] . '" id="' . $value['id'] . '">
                                    ';
                foreach ($value['options'] as $option_key => $option_value) {
                    $selected = ( $value['selected'] == $option_key ) ? " selected=\"\" " : "";
                    echo '<option value="' . $option_key . '" ' . $selected . ' >' . $option_value . '</option>';
                }
                echo '
                                </select>
                            </div> 
                          </div> ';
                break;
            /**
             * 
             */
            case 'checkbox':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> ';

                foreach ($value['options'] as $checkbox_key => $checkbox_value) {

                    $checked = ( in_array($checkbox_key, $value['selected']) ) ? " checked=\"\" " : "";

                    echo '<input type="checkbox" value="' . $checkbox_key . '" ' . $checked . '> ' . $checkbox_value . '<br>';
                }
                echo '
                                
                            </div> 
                          </div> ';

                break;
                /**
                 * 
                 */
            case 'radio':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> ';

                foreach ($value['options'] as $radio_key => $radio_value) {


                    $checked = ( in_array($radio_key, $value['selected']) ) ? " checked=\"\" " : "";

                    echo '    <input type="radio" name="'.$value['name'].'" value="'.$value['value'].'" '.$checked.'> ' .$radio_value . '<br>'; 
                }
                echo '
                                
                            </div> 
                          </div> ';

                break;



            /**
             * Submit
             */
            case 'submit':
                echo '<div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10"> 
                    <button type="submit" class="' . $value['class'] . '">' . _tr($value['label']) . '</button> 
                </div> 
            </div>  ';
                break;
            /**
             * reset
             */
            case 'reset':
                echo '<div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10"> 
                    <button type="reset" class="' . $value['class'] . '">' . _tr($value['label']) . '</button> 
                </div> 
            </div>  ';
                break;


            default:
                break;
        }
        
    }
    
?>

   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
