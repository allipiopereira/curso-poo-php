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

        <link rel="shortcut icon" type="image/x-icon" href="http://alipio/POO-PHP/src/img/php-svg.png">

        <title>Minhas Aulas - Curso POO PHP | Curso em Video</title>

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
        <!-- font-awesome.min.css -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <!-- myCss.css -->
        <link rel="stylesheet" href="http://alipio/POO-PHP/src/css/myCss.css" />
        <!-- propeller.css -->
        <link rel="stylesheet" href="http://alipio/POO-PHP/src/pmd-1.3.1-dist/css/propeller.css" />
        <link rel="stylesheet" href="http://alipio/POO-PHP/src/pmd-1.3.1-dist/css/pmd-scrollbar.css" />
        <!-- sidebar.css -->
        <link rel="stylesheet" href="http://alipio/POO-PHP/src/sidebar/sidebar.css" />
        <!-- loader.css -->
        <link rel="stylesheet" href="http://alipio/POO-PHP/src/loader/loader.css"/>
        <!-- font roboto -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
        <!-- incluindo -> loader.html <-> script de loader -->
        <?php
        require_once($_SERVER['DOCUMENT_ROOT'] . "/POO-PHP/src/loader/loader.html");
        ?>
    </head>

    <body onload="myFunction()" style="margin:0;">
        <div id="amaLoader"></div>

        <div class="wrapper" id="amaWeb" style="display:none;">

            <!-- incluindo -> sidebar.css -->
            <?php 
            require_once($_SERVER['DOCUMENT_ROOT'] . '/POO-PHP/src/sidebar/sidebar.php');
            ?>

            <div id="content">

                <div class="container-fluid">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" id="sidebarCollapse" class="ama-navbar-custom my-4 btn nav-item navbar-btn border-w-3px" style="border: 2px solid #fff;">
                                    <span class="mdi mdi-menu mdi-24px text-white"></span>
                                </button>
                            </div>
                        </div>
                    </nav>

                    <div class="row">
                        <div class="col-md-8 expand-sm mx-auto bg-white rb-15 rs-none shadow-sm">

                            <div class="row">
                                <div class="col-md-11 expand-sm mx-auto rb-15 rs-none color-default mb-5">
                                    
                                    <i class="mdi mdi-check-all mdi-36px m-2 my-3 p-1 bg-white btn btn-info btn-block shadow-sm rounded-circle pmd-btn-fab pmd-ripple-effect text-muted mx-auto"></i>

                                    <div class="text-center">
                                        <h2 class="bg-white pl-sm-2 pr-sm-2 py-2 w-50 mx-auto rt-15 rb-e-15" style="position: relative; top: 9px;">Aulas Concluidas</h2>
                                    </div>
                                </div>
                            </div>

                            <h1 class="lead w-50 mx-auto text-center  p-3 my-3 mb-3 ra-50 shadow-sm">Curso POO PHP | Curso em Video</h1>

                            <div class="row">
                                <!-- Boxs para codigo à serem desenvolvidos com Gua no CursoEmVideo -->

                                <!--  Lista de Aulas -->

                                <div class="col-md-11 expand-sm mx-auto bg-light mb-4 p-4 ra-15 rs-none">
                                    <div class="card-group">
                                        <!--  Gerando Aulas Dinamicamente -->
                                        <?php
                                            $z = 0;
                                            for($i=1; $i <= 4; $i++) {
                                                if($i > 9){$z="";}
                                                echo "
                                                    <a href='http://alipio/POO-PHP/aulas/Aula$z$i/index.php' class='pmd-card fcs-black p-2 m-3 mx-auto' style='border-radius: 100px;'>
                                                        <div class='pmd-card-body'>
                                                            <div class='mdi mdi-clipboard-check-outline mdi-48px text-center'></div>
                                                        </div>
                                                        <div class='pmd-card-footer'>
                                                            <div class='lead w-100 mx-auto text-center bg-white  p-3 my-4 mb-5 ra-50 shadow-sm'>
                                                                Aula $z$i
                                                            </div>
                                                        </div>
                                                    </a>
                                                ";
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11 expand-sm mx-auto ra-15 rs-none color-default mb-4">
                                    <div class="text-center">
                                        <h4 class="p-1">Desenvolvido por:</h4>
                                        <h4 class="text-white">Allipio Pereira</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- dock index -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 expand-sm mx-auto">
                        <div class="btn-group bg-white p-2  w-100 mx-auto dock">
                            <div class="mx-auto text-center">
                                <!-- aula atual -->
                                <a href="http://alipio/POO-PHP/index.php"  class="btn-group mb-1 my-3 mr-3 ml-3">
                                    <button type="button" class="btn icon-btn-title mx-auto mr-4 ml-4 shadow-sm" role="button" style="border-bottom-left-radius: 50px; border-top-left-radius: 50px;">

                                        <span class="mdi mdi-clipboard-text-outline mdi-36px text-dark" aria-hidden="true"></span>
                                        <span class="sr-only">home</span>

                                    </button>

                                    <button type="button" class="btn icon-btn-title lead mx-auto shadow-sm" role="button" style="border-bottom-right-radius: 50px; border-top-right-radius: 50px;">
                                        <h2 class="p-2 mb-0  color-body">
                                            Home
                                        </h2>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end dock -->
            </div>
        </div>

        <!-- Scripts Bootstrap -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Script Propeller -->
        <script src="https://cdn.jsdelivr.net/npm/propellerkit@1.3.1/dist/js/propeller.min.js"></script>
        <!-- jquery.mCustomScrollbar -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal-dark"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>

        <script>
            $('a').click(function () {
                $(this).find('i').toggleClass('fa-minus-circle fa-plus-circle');
                $('.content').toggleClass('active');
            });
        </script>
    <body>  
</html>
