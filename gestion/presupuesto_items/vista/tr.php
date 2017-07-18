<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, presupuesto_items_campos_a_mostrar())) {
                                echo "<td>$presupuesto_items[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=presupuesto_items&c=ver&presupuesto_items_id='.$presupuesto_items_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=presupuesto_items&c=editar&presupuesto_items_id='.$presupuesto_items_id.'>'._tr("Editar").'</a>  
                      
                </td>';  