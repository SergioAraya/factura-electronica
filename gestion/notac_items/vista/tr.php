<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, notac_items_campos_a_mostrar())) {
                                echo "<td>$notac_items[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=notac_items&c=ver&notac_items_id='.$notac_items_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=notac_items&c=editar&notac_items_id='.$notac_items_id.'>'._tr("Editar").'</a>  
                      
                </td>';  