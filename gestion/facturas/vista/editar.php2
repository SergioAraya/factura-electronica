<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar"); ?></h2> 

</h2> 

     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="facturas"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="facturas_id" value="<?php echo $facturas_id; ?>"> 

 <?php 
                        $campos = array(array(
"type" => "text",
"name" => "facturas_ref",
"value" => "$facturas_ref",                                                                        
    
"for" => "facturas_ref",
"label" => "ref",
"class" => "form-control",
"id" => "facturas_ref",
"placeholder" => "ref",
                    ),array(
"type" => "text",
"name" => "facturas_id_presupuesto",
"value" => "$facturas_id_presupuesto",                                                                        
    
"for" => "facturas_id_presupuesto",
"label" => "id_presupuesto",
"class" => "form-control",
"id" => "facturas_id_presupuesto",
"placeholder" => "id_presupuesto",
                    ),array(
"type" => "text",
"name" => "facturas_id_notac",
"value" => "$facturas_id_notac",                                                                        
    
"for" => "facturas_id_notac",
"label" => "id_notac",
"class" => "form-control",
"id" => "facturas_id_notac",
"placeholder" => "id_notac",
                    ),array(
"type" => "text",
"name" => "facturas_id_contacto",
"value" => "$facturas_id_contacto",                                                                        
    
"for" => "facturas_id_contacto",
"label" => "id_contacto",
"class" => "form-control",
"id" => "facturas_id_contacto",
"placeholder" => "id_contacto",
                    ),array(
"type" => "text",
"name" => "facturas_fecha_registro",
"value" => "$facturas_fecha_registro",                                                                        
    
"for" => "facturas_fecha_registro",
"label" => "fecha_registro",
"class" => "form-control",
"id" => "facturas_fecha_registro",
"placeholder" => "fecha_registro",
                    ),array(
"type" => "text",
"name" => "facturas_sub_total",
"value" => "$facturas_sub_total",                                                                        
    
"for" => "facturas_sub_total",
"label" => "sub_total",
"class" => "form-control",
"id" => "facturas_sub_total",
"placeholder" => "sub_total",
                    ),array(
"type" => "text",
"name" => "facturas_iva",
"value" => "$facturas_iva",                                                                        
    
"for" => "facturas_iva",
"label" => "iva",
"class" => "form-control",
"id" => "facturas_iva",
"placeholder" => "iva",
                    ),array(
"type" => "text",
"name" => "facturas_anticipo",
"value" => "$facturas_anticipo",                                                                        
    
"for" => "facturas_anticipo",
"label" => "anticipo",
"class" => "form-control",
"id" => "facturas_anticipo",
"placeholder" => "anticipo",
                    ),array(
"type" => "text",
"name" => "facturas_saldo",
"value" => "$facturas_saldo",                                                                        
    
"for" => "facturas_saldo",
"label" => "saldo",
"class" => "form-control",
"id" => "facturas_saldo",
"placeholder" => "saldo",
                    ),array(
"type" => "text",
"name" => "facturas_comentarios",
"value" => "$facturas_comentarios",                                                                        
    
"for" => "facturas_comentarios",
"label" => "comentarios",
"class" => "form-control",
"id" => "facturas_comentarios",
"placeholder" => "comentarios",
                    ),array(
"type" => "text",
"name" => "facturas_r1",
"value" => "$facturas_r1",                                                                        
    
"for" => "facturas_r1",
"label" => "r1",
"class" => "form-control",
"id" => "facturas_r1",
"placeholder" => "r1",
                    ),array(
"type" => "text",
"name" => "facturas_r2",
"value" => "$facturas_r2",                                                                        
    
"for" => "facturas_r2",
"label" => "r2",
"class" => "form-control",
"id" => "facturas_r2",
"placeholder" => "r2",
                    ),array(
"type" => "text",
"name" => "facturas_r3",
"value" => "$facturas_r3",                                                                        
    
"for" => "facturas_r3",
"label" => "r3",
"class" => "form-control",
"id" => "facturas_r3",
"placeholder" => "r3",
                    ),array(
"type" => "text",
"name" => "facturas_fecha_cobro",
"value" => "$facturas_fecha_cobro",                                                                        
    
"for" => "facturas_fecha_cobro",
"label" => "fecha_cobro",
"class" => "form-control",
"id" => "facturas_fecha_cobro",
"placeholder" => "fecha_cobro",
                    ),array(
"type" => "text",
"name" => "facturas_expira",
"value" => "$facturas_expira",                                                                        
    
"for" => "facturas_expira",
"label" => "expira",
"class" => "form-control",
"id" => "facturas_expira",
"placeholder" => "expira",
                    ),array(
"type" => "text",
"name" => "facturas_ce",
"value" => "$facturas_ce",                                                                        
    
"for" => "facturas_ce",
"label" => "ce",
"class" => "form-control",
"id" => "facturas_ce",
"placeholder" => "ce",
                    ),array(
"type" => "text",
"name" => "facturas_estatus",
"value" => "$facturas_estatus",                                                                        
    
"for" => "facturas_estatus",
"label" => "estatus",
"class" => "form-control",
"id" => "facturas_estatus",
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
