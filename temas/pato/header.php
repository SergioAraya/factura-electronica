<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title><?php echo "$config_nombre_web"; ?></title>

        <link rel="stylesheet" href="../includes/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="../includes/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../includes/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="home/vista/gestion.css" >
        <link rel="stylesheet" href="estilo.css"/>

        <?php
        $scripts = "./$p/scripts/$c.php";
        (file_exists($scripts)) ? include "$scripts" : "";
        ?>

    </head>

    <body id="<?php echo "$p" . "_" . "$c"; ?>">


        <?php
        if ($_usuarios_grupo == 'centros') {
            include "home/vista/nav_sup_contactos.php";
        } else {
            include "home/vista/nav_sup.php";
        }
        ?>
        <div class="container-fluid"> <!-- 1 -->
            <div class="row">	<!-- 2 -->
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> <!-- 3 -->                                        


                    <ol class="breadcrumb">
                        <li>
                            <span class="glyphicon glyphicon-home"></span> 
                            <a href="index.php"><?php _t("Inicio"); ?>
                            </a>
                        </li>
                        <li class="active">
                            <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 
                            <a href="<?php echo "index.php?p=$p"; ?>">
                                <?php _t("$p"); ?>
                            </a>
                        </li>
                        <li><a href="#"><?php _t("$c"); ?></a></li>
                    </ol>    

                    <?php
                    if (file_exists("$p/vista/menu_$c.php")) {
                        include "$p/vista/menu_$c.php";
                    } else {
                        include "home/vista/sidebar.php";
                    }
                    ?>                    