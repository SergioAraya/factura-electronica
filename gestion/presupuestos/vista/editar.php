<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar"); ?></h2> 

</h2> 

     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="presupuestos"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="presupuestos_id" value="<?php echo $presupuestos_id; ?>"> 

 <?php 
                        $campos = array(array(
"type" => "text",
"name" => "presupuestos_ref",
"value" => "$presupuestos_ref",                                                                        
    
"for" => "presupuestos_ref",
"label" => "ref",
"class" => "form-control",
"id" => "presupuestos_ref",
"placeholder" => "ref",
                    ),array(
"type" => "text",
"name" => "presupuestos_id_factura",
"value" => "$presupuestos_id_factura",                                                                        
    
"for" => "presupuestos_id_factura",
"label" => "id_factura",
"class" => "form-control",
"id" => "presupuestos_id_factura",
"placeholder" => "id_factura",
                    ),array(
"type" => "text",
"name" => "presupuestos_id_contacto",
"value" => "$presupuestos_id_contacto",                                                                        
    
"for" => "presupuestos_id_contacto",
"label" => "id_contacto",
"class" => "form-control",
"id" => "presupuestos_id_contacto",
"placeholder" => "id_contacto",
                    ),array(
"type" => "text",
"name" => "presupuestos_fecha_registro",
"value" => "$presupuestos_fecha_registro",                                                                        
    
"for" => "presupuestos_fecha_registro",
"label" => "fecha_registro",
"class" => "form-control",
"id" => "presupuestos_fecha_registro",
"placeholder" => "fecha_registro",
                    ),array(
"type" => "text",
"name" => "presupuestos_sub_total",
"value" => "$presupuestos_sub_total",                                                                        
    
"for" => "presupuestos_sub_total",
"label" => "sub_total",
"class" => "form-control",
"id" => "presupuestos_sub_total",
"placeholder" => "sub_total",
                    ),array(
"type" => "text",
"name" => "presupuestos_iva",
"value" => "$presupuestos_iva",                                                                        
    
"for" => "presupuestos_iva",
"label" => "iva",
"class" => "form-control",
"id" => "presupuestos_iva",
"placeholder" => "iva",
                    ),array(
"type" => "text",
"name" => "presupuestos_anticipo",
"value" => "$presupuestos_anticipo",                                                                        
    
"for" => "presupuestos_anticipo",
"label" => "anticipo",
"class" => "form-control",
"id" => "presupuestos_anticipo",
"placeholder" => "anticipo",
                    ),array(
"type" => "text",
"name" => "presupuestos_saldo",
"value" => "$presupuestos_saldo",                                                                        
    
"for" => "presupuestos_saldo",
"label" => "saldo",
"class" => "form-control",
"id" => "presupuestos_saldo",
"placeholder" => "saldo",
                    ),array(
"type" => "text",
"name" => "presupuestos_comentarios",
"value" => "$presupuestos_comentarios",                                                                        
    
"for" => "presupuestos_comentarios",
"label" => "comentarios",
"class" => "form-control",
"id" => "presupuestos_comentarios",
"placeholder" => "comentarios",
                    ),array(
"type" => "text",
"name" => "presupuestos_r1",
"value" => "$presupuestos_r1",                                                                        
    
"for" => "presupuestos_r1",
"label" => "r1",
"class" => "form-control",
"id" => "presupuestos_r1",
"placeholder" => "r1",
                    ),array(
"type" => "text",
"name" => "presupuestos_r2",
"value" => "$presupuestos_r2",                                                                        
    
"for" => "presupuestos_r2",
"label" => "r2",
"class" => "form-control",
"id" => "presupuestos_r2",
"placeholder" => "r2",
                    ),array(
"type" => "text",
"name" => "presupuestos_r3",
"value" => "$presupuestos_r3",                                                                        
    
"for" => "presupuestos_r3",
"label" => "r3",
"class" => "form-control",
"id" => "presupuestos_r3",
"placeholder" => "r3",
                    ),array(
"type" => "text",
"name" => "presupuestos_fecha_cobro",
"value" => "$presupuestos_fecha_cobro",                                                                        
    
"for" => "presupuestos_fecha_cobro",
"label" => "fecha_cobro",
"class" => "form-control",
"id" => "presupuestos_fecha_cobro",
"placeholder" => "fecha_cobro",
                    ),array(
"type" => "text",
"name" => "presupuestos_expira",
"value" => "$presupuestos_expira",                                                                        
    
"for" => "presupuestos_expira",
"label" => "expira",
"class" => "form-control",
"id" => "presupuestos_expira",
"placeholder" => "expira",
                    ),array(
"type" => "text",
"name" => "presupuestos_ce",
"value" => "$presupuestos_ce",                                                                        
    
"for" => "presupuestos_ce",
"label" => "ce",
"class" => "form-control",
"id" => "presupuestos_ce",
"placeholder" => "ce",
                    ),array(
"type" => "text",
"name" => "presupuestos_estatus",
"value" => "$presupuestos_estatus",                                                                        
    
"for" => "presupuestos_estatus",
"label" => "estatus",
"class" => "form-control",
"id" => "presupuestos_estatus",
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
