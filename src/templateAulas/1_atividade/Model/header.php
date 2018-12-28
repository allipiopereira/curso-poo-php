<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="theme-color" content="#d1d1d1">
        <meta name="apple-mobile-web-app-status-bar-style" content="#d1d1d1">
        <meta name="msapplication-navbutton-color" content="#d1d1d1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="msapplication-tap-highlight" content="no">

        <link rel="shortcut icon" type="image/x-icon" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/curso-poo-php/src/img/php-svg.png">

        <title>Atividade 0_</title>

        <!--
            ==========
            Styles Sheets
            ==========
        -->
        <!-- bootstrap.min.css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
            crossorigin="anonymous">
        <!-- materialdesignicons.css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.0.39/css/materialdesignicons.css" />
        <!-- jquery.mCustomScrollbar.min.css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <!-- myCss.css -->
        <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/curso-poo-php/src/css/myCss.css" />
        <!-- propeller.css -->
        <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/curso-poo-php/src/pmd-1.3.1-dist/css/propeller.css" />
        <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/curso-poo-php/src/pmd-1.3.1-dist/css/pmd-scrollbar.css" />
        <!-- sidebar.css -->
        <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/curso-poo-php/src/sidebar/sidebar.css" />
        <!-- loader.css -->
        <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/curso-poo-php/src/loader/loader.css"/>
        <!-- font roboto -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!-- incluindo -> loader.html  <-> script de loader -->
        <?php
            require_once ($_SERVER['DOCUMENT_ROOT']."/curso-poo-php/src/loader/loader.html");
        ?>
    </head>

    <body onload="cursoPre()" style="margin:0;">
        <div id="cursoLoader"></div>

        <div class="wrapper" id="cursoWeb" style="display:none;">

            <!-- incluindo -> sidebar.css -->
            <?php 
                include_once($_SERVER['DOCUMENT_ROOT'].'/curso-poo-php/src/sidebar/sidebar.php');
            ?>

            <div id="content">

                <div class="container-fluid">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" id="sidebarCollapse" class="curso-navbar-custom my-4 btn nav-item navbar-btn border-w-3px" style="border: 2px solid #fff;">
                                    <span class="mdi mdi-menu mdi-24px text-white"></span>
                                </button>
                            </div>
                        </div>
                    </nav>

                    <div class="row">
                        <div class="col-md-8 expand-sm mx-auto bg-white rb-15 rs-none shadow-sm">

                            <div class="row">
                                <div class="col-md-11 expand-sm mx-auto rb-15 rs-none color-default mb-5">
                                    <div class="w-75 mx-auto text-center text-white  color-b p-2 my-1 font-weight-bold shadow-sm rounded-bottom">
                                        curso-poo-php -> Atividade
                                        <i class="mdi mdi-play p-2"></i>
                                        Aula0_
                                    </div>


                                    <i class="mdi mdi-code-tags-check  mdi-36px m-2 my-3 p-1 bg-white btn btn-info btn-block shadow-sm rounded-circle pmd-btn-fab pmd-ripple-effect text-muted mx-auto"></i>

                                    <div class="text-center">
                                        <h2 class="bg-white pl-sm-2 pr-sm-2 py-2 w-50 mx-auto rt-15 rb-e-15" style="position: relative; top: 9px;">Aula0_</h2>
                                    </div>
                                </div>
                            </div>
                        <!--</footer.php/col> -->
                    <!--</footer.php/row> -->
                <!--</footer.php/container-fluid> -->
            <!--</footer.php/content>-->
        <!--</footer.php/wrapper> -->
    <!--</footer.php/body> -->
<!--</footer.php/html> -->