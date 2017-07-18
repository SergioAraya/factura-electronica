<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, presupuestos_campos_a_mostrar())) {
                                echo "<td>$presupuestos[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=presupuestos&c=ver&presupuestos_id='.$presupuestos_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=presupuestos&c=editar&presupuestos_id='.$presupuestos_id.'>'._tr("Editar").'</a>  
                      
                </td>';  