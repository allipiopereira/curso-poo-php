<!-- Body Template -->
<!-- <header.php/html>-->
    <!-- <header.php/body>-->
        <!-- <header.php/container-fluid>-->
            <!-- <header.php/row>-->  
                <!-- <header.php/col>-->
                <div class="row">
                        <!-- Boxs para codigo à serem desenvolvidos com Gua no CursoEmVideo -->

                        <h1 class="lead w-50 mx-auto text-center  p-3 my-3 mb-3 ra-50 shadow-sm">Modificadores de Visibilidade</h1>

                        <div class="col-md-11 expand-sm mx-auto bg-light mb-4 p-4 ra-15 rs-none" style="height: 350px;">

                        <pre>

                            <?php
                                require_once ('../Controller/Caneta/Caneta.php');
                                $c1 = new Caneta;
                                $c1->modelo = 'BIC Cristal';
                                $c1->cor = 'Azul';
                                //$c1->ponta = 0.5;
                                //$c1->carga = 90;
                                //$c1->tampada = true;  

                                

                                $c1->destampar();

                                $c1->rabiscar();

                                print_r($c1);
                            ?>

                        <pre>
                        </div>
                        
                    </div>
                <!--</footer.php/col> -->
            <!--</footer.php/row> -->
        <!--</footer.php/container-fluid> -->
    <!--</footer.php/body> -->
<!--</footer.php/html> -->
    