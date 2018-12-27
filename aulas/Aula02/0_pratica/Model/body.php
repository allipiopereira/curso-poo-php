<!-- Body Template -->
<!-- <header.php/html>-->
    <!-- <header.php/body>-->
        <!-- <header.php/container-fluid>-->
            <!-- <header.php/row>-->  
                <!-- <header.php/col>-->
                <div class="row">
                        <!-- Boxs para codigo à serem desenvolvidos com Gua no CursoEmVideo -->

                        <h1 class="lead w-50 mx-auto text-center  p-3 my-3 mb-3 ra-50 shadow-sm">Criando Classe e Objeto</h1>

                        <div class="col-md-11 expand-sm mx-auto bg-light mb-4 p-4 ra-15 rs-none">
                            <h2 class="lead w-50 mx-auto text-center bg-white  p-3 my-4 mb-5 ra-50 shadow-sm">Classe Caneta</h2>

                            <pre>
                                <?php
                                    require_once ('../Controller/Caneta/Caneta.php');
                                    //Instanciando um objeto
                                    $c1 = new Caneta;

                                    //Adicionando características a Classe
                                    $c1->cor = 'Azul';
                                    $c1->ponta = 0.5;
                                    $c1->tampada = false;
                                    //Chamando um Método
                                    $c1->tampar();

                                    print_r($c1);
                                    
                                    echo "<br/>";

                                    //Instanciando um objeto
                                    $c2 = new Caneta;
                                    
                                    //Adicionando características a Classe
                                    $c2->cor = 'Verde';
                                    $c2->carga = '50';
                                    //Chamando um Método
                                    $c2->tampar();

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