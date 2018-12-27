<!-- Body Template -->
<!-- <header.php/html>-->
    <!-- <header.php/body>-->
        <!-- <header.php/container-fluid>-->
            <!-- <header.php/row>-->  
                <!-- <header.php/col>-->
                    <div class="row">
                        <!-- Boxs para codigo à serem desenvolvidos com Gua no CursoEmVideo -->

                        <h1 class="lead w-50 mx-auto text-center  p-3 my-3 mb-3 ra-50 shadow-sm">Configurando a Visibilidade de Atributos e Métodos</h1>
                        
                        <!-- Primeira Atividade - Algo Abstrado -->
                        <div class="col-md-11 expand-sm mx-auto bg-light mb-4 p-4 ra-15 rs-none">
                            <h2 class="lead w-50 mx-auto text-center bg-white  p-3 my-4 mb-5 ra-50 shadow-sm">Classe Leitura</h2>
                            <!-- Três perguntas lindas(rsrs) -->
                            <div class="card-group">
                                <!-- Coisas que eu tenho -->
                                <div class="card border-0">
                                    <div class="card-header color-default border-right">
                                        <h2 class="text-white text-center">Atributos</h2>
                                    </div>
                                    <div class="card-body">

                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <span class="fa fa-plus"></span>
                                                Livro
                                            </li>
                                            <li class="list-group-item">
                                                <span class="fa fa-minus"></span>
                                                Duração
                                            </li>
                                            <li class="list-group-item">
                                                <span class="fa fa-minus"></span>
                                                Atenção
                                            </li>
                                            <li class="list-group-item">
                                                <span class="fa fa-hashtag"></span>
                                                Prazo
                                            </li>
                                            <li class="list-group-item">
                                                <span class="fa fa-hashtag"></span>
                                                Concluído
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="card-footer color-default border-right">
                                        <h2 class="text-white text-center">Coisas que eu tenho</h2>
                                    </div>
                                </div>
                                
                                <!-- Coisas que eu faço -->
                                <div class="card border-0">
                                    <div class="card-header color-default border-right">
                                        <h2 class="text-white text-center">Métodos</h2>
                                    </div>
                                    <div class="card-body">

                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <span class="fa fa-plus"></span>
                                                Iniciar Leitura
                                            </li>
                                            <li class="list-group-item">
                                                <span class="fa fa-minus"></span>
                                                Parar Leitura
                                            </li>
                                            <li class="list-group-item">
                                                <span class="fa fa-minus"></span>
                                                Retomar Leitura
                                            </li>
                                            <li class="list-group-item">
                                                <span class="fa fa-hashtag"></span>
                                                Terminar Leitura
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="card-footer color-default border-right">
                                        <h2 class="text-white text-center">Coisas que eu faço</h2>
                                    </div>
                                </div>

                                <!-- Como estou agora? -->
                                <div class="card border-0">
                                    <div class="card-header color-default border-right">
                                        <h2 class="text-white text-center">Estado</h2>
                                    </div>
                                    <div class="card-body">

                                        <ul class="list-group">
                                            <li class="list-group-item">Escolhi o livro</li>
                                            <li class="list-group-item">Tenho 2 horas de leitura</li>
                                            <li class="list-group-item">Estou focado</li>
                                            <li class="list-group-item">Prazo de leitura até terça</li>
                                        </ul>

                                    </div>
                                    <div class="card-footer color-default border-right">
                                        <h2 class="text-white text-center">Como estou agora?</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="my-4">
                            <h2 class="lead w-50 mx-auto text-center bg-white  p-3 my-5 mb-5 ra-50 shadow-sm">Resolução</h2>

                                <div class="col-md-11 expand-sm mx-auto bg-white mb-4 p-4 rounded" style="height: 250px;">

                                    <?php
                                        require_once('../Controller/Leitura/Leitura.php');

                                        $ler = new Leitura;

                                        $ler->livro = "Não nascemos prontos";
                                        
                                        $ler->iniciarLeitura();
                                    
                                        echo '<br/>';
                                        print_r($ler);
                                    ?>

                                </div>
                            </div>


                            <!-- 'Resumo' 

                            <h4 class="text-center my-5">Todo <span class="text-warning">OBJETO</span> tem:</h4>
                            <div class="card-group">
                                <-- Atributos 
                                <div class="card border-0">
                                    <div class="card-header color-default border-right">
                                        <h4 class="text-white text-center">Atributos</h4>
                                    </div>
                                    <div class="card-body">

                                        <ul class="list-group">
                                            <li class="list-group-item">Características</li>
                                            <li class="list-group-item">Propriedades</li>
                                            <li class="list-group-item">Dados</li>
                                        </ul>

                                    </div>
                                    <div class="card-footer color-default border-right">
                                        <h4 class="text-white text-center">Coisas que eu tenho</h4>
                                    </div>
                                </div>
                                
                                <-- Métodos 
                                <div class="card border-0">
                                    <div class="card-header color-default border-right">
                                        <h4 class="text-white text-center">Métodos</h4>
                                    </div>
                                    <div class="card-body">

                                        <ul class="list-group">
                                            <li class="list-group-item">Comportamentos</li>
                                            <li class="list-group-item">Procedimentos</li>
                                            <li class="list-group-item">Rotinas Internas</li>
                                        </ul>

                                    </div>
                                    <div class="card-footer color-default border-right">
                                        <h4 class="text-white text-center">Coisas que eu faço</h4>
                                    </div>
                                </div>

                                <-- Estado 
                                <div class="card border-0">
                                    <div class="card-header color-default border-right">
                                        <h4 class="text-white text-center">Estado</h4>
                                    </div>
                                    <div class="card-body">

                                        <ul class="list-group">
                                            <li class="list-group-item">Características e Comportamentos atuais</li>
                                        </ul>

                                    </div>
                                    <div class="card-footer color-default border-right">
                                        <h4 class="text-white text-center">Como estou agora?</h4>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <!-- Segunda Atividade - Algo Concreto -->

                        <div class="col-md-11 expand-sm mx-auto bg-light mb-4 p-4 ra-15 rs-none">
                        <h2 class="lead w-50 mx-auto text-center bg-white  p-3 my-4 mb-5 ra-50 shadow-sm">Classe Bicicleta</h2>
                            <!-- Três perguntas lindas(rsrs) -->
                            <div class="card-group">
                                <!-- Coisas que eu tenho -->
                                <div class="card border-0">
                                    <div class="card-header color-default border-right">
                                        <h2 class="text-white text-center">Atributos</h2>
                                    </div>
                                    <div class="card-body">

                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <span class="fa fa-minus"></span>
                                                Rodas
                                            </li>
                                            <li class="list-group-item">
                                                <span class="fa fa-minus"></span>
                                                Pneu
                                            </li>
                                            <li class="list-group-item">
                                                <span class="fa fa-minus"></span>
                                                Cela
                                            </li>
                                            <li class="list-group-item">
                                                <span class="fa fa-minus"></span>
                                                Quidon
                                            </li>
                                            <li class="list-group-item">
                                                <span class="fa fa-minus"></span>
                                                Catraca
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="card-footer color-default border-right">
                                        <h2 class="text-white text-center">Coisas que eu tenho</h2>
                                    </div>
                                </div>
                                
                                <!-- Coisas que eu faço -->
                                <div class="card border-0">
                                    <div class="card-header color-default border-right">
                                        <h2 class="text-white text-center">Métodos</h2>
                                    </div>
                                    <div class="card-body">

                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <span class="fa fa-plus"></span>
                                                Transportar
                                            </li>
                                            <li class="list-group-item">
                                                <span class="fa fa-hashtag"></span>
                                                Manutenção
                                            </li>
                                            <li class="list-group-item">
                                                <span class="fa fa-minus"></span>
                                                Emprestar
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="card-footer color-default border-right">
                                        <h2 class="text-white text-center">Coisas que eu faço</h2>
                                    </div>
                                </div>

                                <!-- Como estou agora? -->
                                <div class="card border-0">
                                    <div class="card-header color-default border-right">
                                        <h2 class="text-white text-center">Estado</h2>
                                    </div>
                                    <div class="card-body">

                                        <ul class="list-group">
                                            <li class="list-group-item">Iniciar Pedalada</li>
                                            <li class="list-group-item">Terminar Pedalada</li>
                                            <li class="list-group-item"> Bicicleta em Emprestada</li>
                                            <li class="list-group-item"> Bicicleta em Manutenção</li>
                                        </ul>

                                    </div>
                                    <div class="card-footer color-default border-right">
                                        <h2 class="text-white text-center">Como estou agora?</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="my-4">
                            <h2 class="lead w-50 mx-auto text-center bg-white  p-3 my-5 mb-5 ra-50 shadow-sm">Resolução</h2>

                                <div class="col-md-11 expand-sm mx-auto bg-white mb-4 p-4 rounded" style="height: 250px;">

                                    <?php
                                        require_once('../Controller/Bicicleta/Bicicleta.php');

                                        $b = new Bicicleta;
                                        
                                        $b->transportar();

                                        echo "<br/>";
                                        print_r($b);
                                    ?>

                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                <!--</footer.php/col> -->
            <!--</footer.php/row> -->
        <!--</footer.php/container-fluid> -->
    <!--</footer.php/body> -->
<!--</footer.php/html> -->
    