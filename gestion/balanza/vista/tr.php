<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, balanza_campos_a_mostrar())) {
                                echo "<td>$balanza[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=balanza&c=ver&balanza_id='.$balanza_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=balanza&c=editar&balanza_id='.$balanza_id.'>'._tr("Editar").'</a>  
                      
                </td>';  