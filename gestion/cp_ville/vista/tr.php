<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, cp_ville_campos_a_mostrar())) {
                                echo "<td>$cp_ville[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=cp_ville&c=ver&cp_ville_id='.$cp_ville_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=cp_ville&c=editar&cp_ville_id='.$cp_ville_id.'>'._tr("Editar").'</a>  
                      
                </td>';  