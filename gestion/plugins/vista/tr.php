<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo ' ';  /*
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, plugins_campos_a_mostrar())) {
                                echo "<td>$plugins[$campo]</td> ";
                            }
                        }  */
 
 echo "<td>$plugins_nombre</td>"; 
 echo "<td>$plugins_descripcion<br>$plugins_autor <a href=\"mailto:$plugins_autor_email\">email</a> <a href=\"$plugins_plugin_web\">web</a></td>"; 
 echo "<td>". plugins_version($plugins_nombre)."</td>"; 
 echo "<td>0.0.2<br><a href=\"index.php?p=plugins&c=instalar&plugins_nombre=$plugins_nombre&plugins_plugin_zip=$plugins_plugin_zip\">Instalar</a></td>"; 
 
 
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=plugins&c=ver&plugins_id='.$plugins_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=plugins&c=editar&plugins_id='.$plugins_id.'>'._tr("Editar").'</a>  
                      
                </td>';  