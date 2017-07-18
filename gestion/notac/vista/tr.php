<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, notac_campos_a_mostrar())) {
                                echo "<td>$notac[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=notac&c=ver&notac_id='.$notac_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=notac&c=editar&notac_id='.$notac_id.'>'._tr("Editar").'</a>  
                      
                </td>';  