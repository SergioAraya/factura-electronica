<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar"); ?></h2> 

</h2> 

     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="plugins"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="plugins_id" value="<?php echo $plugins_id; ?>"> 

 <?php 
                        $campos = array(array(
"type" => "text",
"name" => "plugins_nombre",
"value" => "$plugins_nombre",                                                                        
    
"for" => "plugins_nombre",
"label" => "nombre",
"class" => "form-control",
"id" => "plugins_nombre",
"placeholder" => "nombre",
                    ),array(
"type" => "text",
"name" => "plugins_descripcion",
"value" => "$plugins_descripcion",                                                                        
    
"for" => "plugins_descripcion",
"label" => "descripcion",
"class" => "form-control",
"id" => "plugins_descripcion",
"placeholder" => "descripcion",
                    ),array(
"type" => "text",
"name" => "plugins_version",
"value" => "$plugins_version",                                                                        
    
"for" => "plugins_version",
"label" => "version",
"class" => "form-control",
"id" => "plugins_version",
"placeholder" => "version",
                    ),array(
"type" => "text",
"name" => "plugins_autor",
"value" => "$plugins_autor",                                                                        
    
"for" => "plugins_autor",
"label" => "autor",
"class" => "form-control",
"id" => "plugins_autor",
"placeholder" => "autor",
                    ),array(
"type" => "text",
"name" => "plugins_autor_email",
"value" => "$plugins_autor_email",                                                                        
    
"for" => "plugins_autor_email",
"label" => "autor_email",
"class" => "form-control",
"id" => "plugins_autor_email",
"placeholder" => "autor_email",
                    ),array(
"type" => "text",
"name" => "plugins_plugin_web",
"value" => "$plugins_plugin_web",                                                                        
    
"for" => "plugins_plugin_web",
"label" => "plugin_web",
"class" => "form-control",
"id" => "plugins_plugin_web",
"placeholder" => "plugin_web",
                    ),array(
"type" => "text",
"name" => "plugins_plugin_zip",
"value" => "$plugins_plugin_zip",                                                                        
    
"for" => "plugins_plugin_zip",
"label" => "plugin_zip",
"class" => "form-control",
"id" => "plugins_plugin_zip",
"placeholder" => "plugin_zip",
                    ),array(
"type" => "text",
"name" => "plugins_orden",
"value" => "$plugins_orden",                                                                        
    
"for" => "plugins_orden",
"label" => "orden",
"class" => "form-control",
"id" => "plugins_orden",
"placeholder" => "orden",
                    ),array(
"type" => "text",
"name" => "plugins_estatus",
"value" => "$plugins_estatus",                                                                        
    
"for" => "plugins_estatus",
"label" => "estatus",
"class" => "form-control",
"id" => "plugins_estatus",
"placeholder" => "estatus",
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
