<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, bancos_campos_a_mostrar())) {
                                echo "<td>$bancos[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=bancos&c=ver&bancos_id='.$bancos_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=bancos&c=editar&bancos_id='.$bancos_id.'>'._tr("Editar").'</a>  
                      
                </td>';  