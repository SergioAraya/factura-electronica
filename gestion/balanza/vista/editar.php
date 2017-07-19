<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar"); ?></h2> 

</h2> 

     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="balanza"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="balanza_id" value="<?php echo $balanza_id; ?>"> 

 <?php 
                        $campos = array(array(
"type" => "text",
"name" => "balanza_id_contacto",
"value" => "$balanza_id_contacto",                                                                        
    
"for" => "balanza_id_contacto",
"label" => "id_contacto",
"class" => "form-control",
"id" => "balanza_id_contacto",
"placeholder" => "id_contacto",
                    ),array(
"type" => "text",
"name" => "balanza_id_factura",
"value" => "$balanza_id_factura",                                                                        
    
"for" => "balanza_id_factura",
"label" => "id_factura",
"class" => "form-control",
"id" => "balanza_id_factura",
"placeholder" => "id_factura",
                    ),array(
"type" => "text",
"name" => "balanza_tipo",
"value" => "$balanza_tipo",                                                                        
    
"for" => "balanza_tipo",
"label" => "tipo",
"class" => "form-control",
"id" => "balanza_tipo",
"placeholder" => "tipo",
                    ),array(
"type" => "text",
"name" => "balanza_ref",
"value" => "$balanza_ref",                                                                        
    
"for" => "balanza_ref",
"label" => "ref",
"class" => "form-control",
"id" => "balanza_ref",
"placeholder" => "ref",
                    ),array(
"type" => "text",
"name" => "balanza_descripcion",
"value" => "$balanza_descripcion",                                                                        
    
"for" => "balanza_descripcion",
"label" => "descripcion",
"class" => "form-control",
"id" => "balanza_descripcion",
"placeholder" => "descripcion",
                    ),array(
"type" => "text",
"name" => "balanza_ce",
"value" => "$balanza_ce",                                                                        
    
"for" => "balanza_ce",
"label" => "ce",
"class" => "form-control",
"id" => "balanza_ce",
"placeholder" => "ce",
                    ),array(
"type" => "text",
"name" => "balanza_sub_total",
"value" => "$balanza_sub_total",                                                                        
    
"for" => "balanza_sub_total",
"label" => "sub_total",
"class" => "form-control",
"id" => "balanza_sub_total",
"placeholder" => "sub_total",
                    ),array(
"type" => "text",
"name" => "balanza_iva",
"value" => "$balanza_iva",                                                                        
    
"for" => "balanza_iva",
"label" => "iva",
"class" => "form-control",
"id" => "balanza_iva",
"placeholder" => "iva",
                    ),array(
"type" => "text",
"name" => "balanza_fecha",
"value" => "$balanza_fecha",                                                                        
    
"for" => "balanza_fecha",
"label" => "fecha",
"class" => "form-control",
"id" => "balanza_fecha",
"placeholder" => "fecha",
                    ),array(
"type" => "text",
"name" => "balanza_fecha_registro",
"value" => "$balanza_fecha_registro",                                                                        
    
"for" => "balanza_fecha_registro",
"label" => "fecha_registro",
"class" => "form-control",
"id" => "balanza_fecha_registro",
"placeholder" => "fecha_registro",
                    ),array(
"type" => "text",
"name" => "balanza_factura",
"value" => "$balanza_factura",                                                                        
    
"for" => "balanza_factura",
"label" => "factura",
"class" => "form-control",
"id" => "balanza_factura",
"placeholder" => "factura",
                    ),array(
"type" => "text",
"name" => "balanza_banco",
"value" => "$balanza_banco",                                                                        
    
"for" => "balanza_banco",
"label" => "banco",
"class" => "form-control",
"id" => "balanza_banco",
"placeholder" => "banco",
                    ),array(
"type" => "text",
"name" => "balanza_anulada",
"value" => "$balanza_anulada",                                                                        
    
"for" => "balanza_anulada",
"label" => "anulada",
"class" => "form-control",
"id" => "balanza_anulada",
"placeholder" => "anulada",
                    ),array(
"type" => "text",
"name" => "balanza_cod_anu",
"value" => "$balanza_cod_anu",                                                                        
    
"for" => "balanza_cod_anu",
"label" => "cod_anu",
"class" => "form-control",
"id" => "balanza_cod_anu",
"placeholder" => "cod_anu",
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
