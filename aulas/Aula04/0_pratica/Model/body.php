<!-- Body Template -->
<!-- <header.php/html>-->
    <!-- <header.php/body>-->
        <!-- <header.php/container-fluid>-->
            <!-- <header.php/row>-->  
                <!-- <header.php/col>-->
                <h1 class="lead w-50 mx-auto text-center  p-3 my-3 mb-3 ra-50 shadow-sm">Métodos Especiais</h1>

                <div class="row">
                        <!-- Boxs para codigo à serem desenvolvidos com Gua no CursoEmVideo -->
                        
                        <div class="col-md-11 expand-sm mx-auto bg-light mb-4 p-4 ra-15 rs-none">
                            <pre>
                                <?php
                                                                    
                                    $c1 = new Caneta('Bic', 'Azul', 0.5);

                                    $c2 = new Caneta('Biz', 'Verde', 0.7);

                                    /*/$c1->setModelo('Bic');
                                    $c1->modelo = 'Bic';
                                    /$c1->ponta = 0.5;
                                    $c1->setPonta(0.5);

                                    print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";*/


                                    print_r($c1);
                                    print_r($c2);

                                ?>
                            </pre>
                        </div>
                        
                    </div>
                <!--</footer.php/col> -->
            <!--</footer.php/row> -->
        <!--</footer.php/container-fluid> -->
    <!--</footer.php/body> -->
<!--</footer.php/html> -->
    