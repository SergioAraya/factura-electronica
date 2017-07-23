<?php

include "admin/funciones.php";
if(file_exists('./admin/configuracion.php')){
    header("Location: ./gestion/index.php");
    die("El archivo ./admin/configuracion.php ya ha sido creado,si quiere realizar una nueva instalacion debe borrarlo");
}else{
    header("Location: install.php");
}