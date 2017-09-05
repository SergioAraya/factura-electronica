<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, factura_items_campos_a_mostrar())) {
                                echo "<td>$factura_items[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=factura_items&c=ver&factura_items_id='.$factura_items_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=factura_items&c=editar&factura_items_id='.$factura_items_id.'>'._tr("Editar").'</a>  
                      
                </td>';  