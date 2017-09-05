<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, paises_campos_a_mostrar())) {
                                echo "<td>$paises[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=paises&c=ver&paises_id='.$paises_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=paises&c=editar&paises_id='.$paises_id.'>'._tr("Editar").'</a>  
                      
                </td>';  