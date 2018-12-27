<!-- Footer Template -->
<!-- <header.php/html>-->
    <!-- <header.php/body>-->
        <!-- <header.php/wrapper>-->
            <!-- <header.php/content>-->
                <!-- <header.php/container-fluid>-->      
                    <!-- <header.php/row>-->  
                        <!-- <header.php/col>-->          
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
                <!-- dock de acesso a aulas -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 expand-sm mx-auto">
                        <div class="btn-group bg-white p-2  w-100 mx-auto dock">
                            <div class="mx-auto text-center">
                                <!-- aula anterior -->
                                <a href="http://alipio/POO-PHP/aulas/Aula03/index.php" class="btn-group mb-1 my-3">
                                    <button type="button" class="btn icon-btn-title mx-auto mr-4 ml-4 shadow-sm" role="button" style="border-bottom-left-radius: 50px; border-top-left-radius: 50px;">

                                        <span class="mdi mdi-arrow-left-bold-circle-outline mdi-36px text-dark" aria-hidden="true"></span>
                                        <span class="sr-only">aula3</span>

                                    </button>

                                    <button type="button" class="btn icon-btn-title lead mx-auto shadow-sm" role="button" style="border-bottom-right-radius: 50px; border-top-right-radius: 50px;">
                                        <h3 class="p-2 mb-0  color-body">
                                            Aula 3
                                        </h3>
                                    </button>
                                </a>   

                                <!-- aula atual -->
                                <a href="http://alipio/POO-PHP/aulas/Aula04/index.php"  class="btn-group mb-1 my-3 mr-3 ml-3">
                                    <button type="button" class="btn icon-btn-title mx-auto mr-4 ml-4 shadow-sm" role="button" style="border-bottom-left-radius: 50px; border-top-left-radius: 50px;">

                                        <span class="mdi mdi-clipboard-check-outline mdi-36px text-dark" aria-hidden="true"></span>
                                        <span class="sr-only">aula4</span>

                                    </button>

                                    <button type="button" class="btn icon-btn-title lead mx-auto shadow-sm" role="button" style="border-bottom-right-radius: 50px; border-top-right-radius: 50px;">
                                        <h2 class="p-2 mb-0  color-body">
                                            Aula 4
                                        </h2>
                                    </button>
                                </a>
                                
                                <!-- aula posterior -->
                                <a href="http://alipio/POO-PHP/aulas/Aula05/index.php"  class="btn-group mb-1 my-3">
                                    <button type="button" class="btn icon-btn-title lead mx-auto shadow-sm" role="button" style="border-bottom-left-radius: 50px; border-top-left-radius: 50px;">
                                        <h3 class="p-2 mb-0  color-body">
                                            Aula 5
                                        </h3>
                                    </button>

                                    <button type="button" class="btn icon-btn-title mx-auto mr-4 ml-4 shadow-sm" role="button" style="border-bottom-right-radius: 50px; border-top-right-radius: 50px;">

                                        <span class="mdi mdi-arrow-right-bold-circle-outline mdi-36px text-dark" aria-hidden="true"></span>
                                        <span class="sr-only">aula5</span>

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