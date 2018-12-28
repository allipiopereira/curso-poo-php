<!-- Body Template -->
<!-- <header.php/html>-->
    <!-- <header.php/body>-->
        <!--</footer.php/wrapper> -->
            <!--</footer.php/content>-->
                <!-- <header.php/container-fluid>-->
                    <!-- <header.php/row>-->  
                        <!-- <header.php/col>-->
                            <h1 class="lead w-50 mx-auto text-center  p-3 my-3 mb-3 ra-50 shadow-sm">Métodos Getter, Setter e Construtor</h1>

                            <div class="row">
                                <!-- Boxs para codigo à serem desenvolvidos com Gua no CursoEmVideo -->

                                <!--  Atividade - Algo Concreto - Ventilador -->

                                <div class="col-md-11 expand-sm mx-auto bg-light mb-4 p-4 ra-15 rs-none">
                                    <h2 class="lead w-50 mx-auto text-center bg-white  p-3 my-4 mb-5 ra-50 shadow-sm">Classe Ventilador</h2>
                                    <!-- Três perguntas lindas(rsrs) -->
                                    <div class="card-group">
                                        <!-- Coisas que eu tenho -->
                                        <div class="card border-0 ">
                                            <div class="card-header color-default border-right">
                                                <h2 class="text-white text-center">Atributos</h2>
                                            </div>
                                            <div class="pmd-card-body">

                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <span class="mdi mdi-plus"></span>
                                                        Modelo
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mdi mdi-plus"></span>
                                                        Tipo
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mdi mdi-plus"></span>
                                                        Cor
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span style="vertical-align:text-bottom;" class="material-icons">#</span>
                                                        Hélice
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mdi mdi-minus"></span>
                                                        Tomada
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mdi mdi-minus"></span>
                                                        Nível de velocidade
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
                                                        <span style="vertical-align:text-bottom;" class="material-icons">#</span>
                                                        Ligar
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="mdi mdi-minus"></span>
                                                        Desligar
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span style="vertical-align:text-bottom;" class="material-icons">#</span>
                                                        Manutenção
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
                                                    <li class="list-group-item">Ligado</li>
                                                    <li class="list-group-item">Desligado</li>
                                                    <li class="list-group-item">Conectado Tomada</li>
                                                    <li class="list-group-item">Retirado Tomada</li>
                                                    <li class="list-group-item">Nível de Velocidade</li>
                                                </ul>

                                            </div>
                                            <div class="card-footer color-default border-right">
                                                <h2 class="text-white text-center">Como estou agora?</h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="my-8">
                                        <h2 class="lead w-50 mx-auto text-center bg-white  p-3 my-5 mb-5 ra-50 shadow-sm">Resolução</h2>

                                        <div class="col-md-12  expand-sm mb-4 p-4 rounded">

                                            <!-- Pegando os dados -->
                                            <div class="row">
                                                <div class="col-md-6 expanded-sm">
                                                    <div class="p-4 color-default shadow-sm  ra-15 border-w-3px magic-controll">
                                                        <h3 class="lead w-75 mx-auto text-center bg-white  p-2 my-1 mb-2 ra-50 shadow-sm">Ventilador</h3>
                                                        <form action="" method="post">
                                                            <!-- Modelo-->
                                                            <div class="my-4">
                                                                <label for="m" class="bg-white ra-50 p-2 shadow-sm pmd-ripple-effect">Modelo</label>
                                                                <input type="text" name="model" id="m" class="form-control text-center m-1" placeholder="<?php
                                                                    echo $_SESSION['modelo'];
                                                                ?>"/>
                                                            </div>

                                                            <!-- Tipo -->
                                                            <div class="my-4">
                                                                <label for="t" class="bg-white ra-50 p-2 shadow-sm pmd-ripple-effect">Tipo</label>
                                                                <input type="text" name="tipo" id="t" class="form-control text-center m-1" placeholder="<?php
                                                                    echo $_SESSION['tipo'];
                                                                ?>"/>
                                                            </div>

                                                            <!-- Cores -->
                                                            <div class="my-4">
                                                                <label for="corP" class="bg-white ra-50 p-2 shadow-sm pmd-ripple-effect">Cores</label>
                                                                <div class="row">
                                                                    <div class="col-md-9 expanded-sm mx-auto">
                                                                        <div class="my-2">
                                                                            <div class="p-1">
                                                                                <div class="radio rounded">
                                                                                    <!-- Inline radio Cores Branco-->
                                                                                    <label class="bg-white p-2 border rounded radio-inline pmd-radio pmd-radio-ripple-effect">
                                                                                        <input type="radio" name="cores" id="corB" value="<?php
                                                                                            
                                                                                            if($_SESSION['cor'] != "preto") {
                                                                                                echo "branco";
                                                                                            }
                                                                                        ?>" class="pm-ini" <?php if($_SESSION['cor'] != "preto") {
                                                                                            echo "checked=''";
                                                                                        }?>>
                                                                                        <span class="pmd-radio-label">&nbsp;</span>
                                                                                        <span for="corB">Branco</span> 
                                                                                    </label>

                                                                                    <!-- Inline radio Cores Preto-->
                                                                                    <label class="bg-dark p-2 rounded radio-inline pmd-radio pmd-radio-ripple-effect">
                                                                                        <input type="radio" name="cores" id="corP" value="<?php
                                                                                            
                                                                                            if($_SESSION['cor'] != "branco") {
                                                                                                echo "preto";
                                                                                            }
                                                                                        ?>" class="pm-ini" <?php if($_SESSION['cor'] != "branco") {
                                                                                            echo "checked=''";
                                                                                        }?>>
                                                                                        <span class="pmd-radio-label">&nbsp;</span>
                                                                                        <span for="corP" class="text-white">Preto</span> 
                                                                                    </label>
                                                                                </div>
                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Problemas -->
                                                            <div class="my-4">
                                                                <label for="problemaT" class="bg-white ra-50 p-2  shadow-sm pmd-ripple-effect">O ventilador está com problemas?</label>
                                                                <div class="row">
                                                                    <div class="col-md-8 expanded-sm mx-auto">
                                                                        <div class="my-2">
                                                                            <div class="p-1">
                                                                                <div class="radio rounded">
                                                                                    <!-- Inline radio Problema Sim-->
                                                                                    <label class="bg-white p-2 border rounded radio-inline pmd-radio pmd-radio-ripple-effect">
                                                                                        <input type="radio" name="problema" id="problemaT" value="<?php
                                                                                            
                                                                                            if($_SESSION['problema'] != "false") {
                                                                                                echo "true";
                                                                                            }
                                                                                        ?>" class="pm-ini" <?php if($_SESSION['problema'] != "false") {
                                                                                            echo "checked=''";
                                                                                        }?>>
                                                                                        <span class="pmd-radio-label">&nbsp;</span>
                                                                                        <span for="problemaT">Sim</span> 
                                                                                    </label>

                                                                                    <!-- Inline radio Problema Não-->
                                                                                    <label class="bg-dark p-2 rounded radio-inline pmd-radio pmd-radio-ripple-effect">
                                                                                        <input type="radio" name="problema" id="problemaF" value="<?php
                                                                                            
                                                                                            if($_SESSION['problema'] != "true") {
                                                                                                echo "false";
                                                                                            }
                                                                                        ?>" class="pm-ini" <?php if($_SESSION['problema'] != "true") {
                                                                                            echo "checked=''";
                                                                                        }?>>
                                                                                        <span class="pmd-radio-label">&nbsp;</span>
                                                                                        <span for="problemaF" class="text-white">Não</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Hélice -->
                                                            <div class="my-4">
                                                                <label for="hF" class="bg-white ra-50 p-2 shadow-sm pmd-ripple-effect">A hélice está ok?</label>
                                                                <div class="row">
                                                                    <div class="col-md-8 expanded-sm mx-auto">
                                                                        <div class="my-2">
                                                                            <div class="p-1">
                                                                                <div class="radio rounded">
                                                                                    <!-- Inline radio Hélice Sim-->
                                                                                    <label class="bg-white p-2 border rounded radio-inline pmd-radio pmd-radio-ripple-effect">
                                                                                        <input type="radio" name="helice" id="hT" value="<?php
                                                                                            
                                                                                            if($_SESSION['helice'] != "false") {
                                                                                                echo "true";
                                                                                            }
                                                                                        ?>" class="pm-ini" <?php if($_SESSION['helice'] != "false") {
                                                                                            echo "checked=''";
                                                                                        }?>>
                                                                                        <span class="pmd-radio-label">&nbsp;</span>
                                                                                        <span for="hT">Sim</span> 
                                                                                    </label>

                                                                                    <!-- Inline radio Hélice Não-->
                                                                                    <label class="bg-dark p-2 rounded radio-inline pmd-radio pmd-radio-ripple-effect">
                                                                                        <input type="radio" name="helice" id="hF" value="<?php
                                                                                            
                                                                                            if($_SESSION['helice'] != "true") {
                                                                                                echo "false";
                                                                                            }
                                                                                        ?>" class="pm-ini" <?php if($_SESSION['helice'] != "true") {
                                                                                            echo "checked=''";
                                                                                        }?>>
                                                                                        <span class="pmd-radio-label">&nbsp;</span>
                                                                                        <span for="hF" class="text-white">Não</span> 
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Tomada -->
                                                            <div class="my-4">
                                                                <label for="tF" class="bg-white ra-50 p-2 shadow-sm pmd-ripple-effect">Está conectado na tomada?</label>
                                                                <div class="row">
                                                                    <div class="col-md-8 expanded-sm mx-auto">
                                                                        <div class="my-2">
                                                                            <div class="p-1">
                                                                                <div class="radio rounded">
                                                                                    <!-- Inline radio Tomada Sim-->
                                                                                    <label class="bg-white p-2 border rounded radio-inline pmd-radio pmd-radio-ripple-effect">
                                                                                        <input type="radio" name="tomada" id="tT" value="<?php
                                                                                            
                                                                                            if($_SESSION['tomada'] != "false") {
                                                                                                echo "true";
                                                                                            }
                                                                                        ?>" class="pm-ini" <?php if($_SESSION['tomada'] != "false") {
                                                                                            echo "checked=''";
                                                                                        }?>>
                                                                                        <span class="pmd-radio-label">&nbsp;</span>
                                                                                        <span for="tT">Sim</span> 
                                                                                    </label>

                                                                                    <!-- Inline radio Tomada Não-->
                                                                                    <label class="bg-dark p-2 rounded radio-inline pmd-radio pmd-radio-ripple-effect">
                                                                                        <input type="radio" name="tomada" id="tF" value="<?php
                                                                                            
                                                                                            if($_SESSION['tomada'] != "true") {
                                                                                                echo "false";
                                                                                            }
                                                                                        ?>" class="pm-ini" <?php if($_SESSION['tomada'] != "true") {
                                                                                            echo "checked=''";
                                                                                        }?>>
                                                                                        <span class="pmd-radio-label">&nbsp;</span>
                                                                                        <span for="tF" class="text-white">Não</span> 
                                                                                    </label>
                                                                                </div>
                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            

                                                            <!-- Nivel de Velocidade -->
                                                            <div class="my-4">
                                                                <label for="nV2" class="bg-white ra-50 p-2 shadow-sm pmd-ripple-effect">Nível de Velocidade</label>
                                                                <div class="row">
                                                                    <div class="col-md-12 expanded-sm mx-auto">
                                                                        <div class="my-2">
                                                                            <div class="p-1">
                                                                                <div class="radio rounded">
                                                                                    <!-- Inline radio nivelVelocidade 0-->
                                                                                    <label class="bg-light p-2 rounded radio-inline pmd-radio pmd-radio-ripple-effect">
                                                                                        <input type="radio" name="nivelVelocidade" id="nV0" value="<?php
                                                                                            echo "0";
                                                                                        ?>" class="pm-ini" <?php if($_SESSION['nV'] == "0") {
                                                                                            echo "checked=''";
                                                                                        }?>>
                                                                                        <span class="pmd-radio-label">&nbsp;</span>
                                                                                        <span for="nV0" class="text-dark">0</span> 
                                                                                    </label>

                                                                                    <!-- Inline radio nivelVelocidade 1-->
                                                                                    <label class="bg-info p-2 rounded radio-inline pmd-radio pmd-radio-ripple-effect">
                                                                                        <input type="radio" name="nivelVelocidade" id="nV1" value="<?php
                                                                                            echo "1";
                                                                                        ?>" class="pm-ini" <?php if($_SESSION['nV'] == "1") {
                                                                                            echo "checked=''";
                                                                                        }?>>
                                                                                        <span class="pmd-radio-label">&nbsp;</span>
                                                                                        <span for="nV1" class="text-white">1</span> 
                                                                                    </label>

                                                                                    <!-- Inline radio nivelVelocidade 2-->
                                                                                    <label class="bg-warning p-2 rounded radio-inline pmd-radio pmd-radio-ripple-effect">
                                                                                        <input type="radio" name="nivelVelocidade" id="nV2" value="<?php
                                                                                            echo "2";
                                                                                        ?>" class="pm-ini" <?php if($_SESSION['nV'] == "2") {
                                                                                            echo "checked=''";
                                                                                        }?>>
                                                                                        <span class="pmd-radio-label">&nbsp;</span>
                                                                                        <span for="nV2" class="text-white">2</span> 
                                                                                    </label>

                                                                                    <!-- Inline radio nivelVelocidade 3-->
                                                                                    <label class="bg-danger p-2 rounded radio-inline pmd-radio pmd-radio-ripple-effect">
                                                                                        <input type="radio" name="nivelVelocidade" id="nV3" value="<?php
                                                                                            echo "3";
                                                                                        ?>" class="pm-ini" <?php if($_SESSION['nV'] == "3") {
                                                                                            echo "checked=''";
                                                                                        }?>>
                                                                                        <span class="pmd-radio-label">&nbsp;</span>
                                                                                        <span for="nV3" class="text-white">3</span> 
                                                                                    </label>
                                                                                </div>
                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Você que manda -->
                                                            <div class="btn-group my-4 w-100 mx-auto">
                                                                <div class="mx-auto text-center text-white">
                                                                    <button type="submit" class="btn btn-info btn-block m-2 rounded-circle pmd-btn-fab pmd-ripple-effect mdi mdi-power mdi-24px" value="true" name="btnLigar" style="border: 6px solid #fff;">
                                                                    </button>
                                                                    Ligar
                                                                </div>

                                                                <div class="mx-auto text-center text-white">
                                                                    <button type="submit" class="btn btn-warning text-white btn-block m-2 rounded-circle pmd-btn-fab pmd-ripple-effect mdi mdi-stop mdi-24px" value="true" name="btnDesligar" style="border: 6px solid #fff;">
                                                                    </button>
                                                                    Desligar
                                                                </div>

                                                                <div class="mx-auto text-center text-white">
                                                                    <button type="submit" class="btn btn-danger btn-block m-2 rounded-circle pmd-btn-fab pmd-ripple-effect mdi mdi-phone mdi-24px" value="true" name="btnManut" style="border: 6px solid #fff;">
                                                                    </button>
                                                                    Assisência
                                                                </div>
                                                                
                                                            </div>

                                                            <div class="w-25 mx-auto my-4 ">
                                                                 <img src="<?php $_SERVER['DOCUMENT_ROOT'];?>/curso-poo-php/src/img/015-512-64-64.png" width="75" height="75">
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>

                                                <!-- Mostrando os dados -->
                                                <div class="col-md-6 expanded-sm">
                                                    <div class="p-4 color-b shadow-sm border-w-3px ra-15">
                                                        <h3 class="lead w-75 mx-auto text-center bg-white  p-2 my-1 mb-2 ra-50 shadow-sm">Classe</h3>

                                                        <div class="p-2 rounded">

                                                            <?php
                                                                $v = new Ventilador;
                                                            ?>

                                                            <!-- Atibrutos -->
                                                            <div class="bg-info text-white ra-15 my-4">
                                                                <h2 class="bg-white text-dark text-center  rt-15 p-2">
                                                                    Atributos
                                                                </h2>

                                                                <!-- Setando e pegando os atributos -->
                                                                <div class="p-2">
                                                                    <!-- setter e getter de modelo -->
                                                                    <div class="p-2 border-bottom">
                                                                        <?php
                                                                            $v->setModelo($_SESSION['modelo']);
                                                                            echo "<mark class='rounded'>Modelo:</mark> {$v->getModelo()} <br/>";
                                                                        ?>
                                                                    </div>

                                                                    <!-- setter e getter de tipo -->
                                                                    <div class="p-2 border-bottom">
                                                                        <?php
                                                                            $v->setTipo($_SESSION['tipo']);
                                                                            echo "<mark class='rounded'>Tipo:</mark> {$v->getTipo()} <br/>";
                                                                        ?>                                                
                                                                    </div>

                                                                    <!-- setter e getter de cor -->
                                                                    <div class="p-2 border-bottom">
                                                                        <?php
                                                                            $v->setCor($_SESSION['cor']);
                                                                            
                                                                            if($v->getCor() == "branco") {
                                                                                echo "<mark class='rounded'>Cor:</mark> <span class='bg-white rounded text-dark w-25 p-1'>Branco</span>";
                                                                            } else {
                                                                                echo "<mark class='rounded'>Cor:</mark> <span class='bg-dark rounded text-white w-25 p-1'>Preto</span>";
                                                                            }
                                                                        ?>                                                
                                                                    </div>

                                                                    <!-- setter e getter de problema -->
                                                                    <div class="p-2 border-bottom">
                                                                        <?php
                                                                            $v->setProblema($_SESSION['problema']);
                                                                            echo "<mark class='rounded'>Problema:</mark> {$v->getProblema()} <br/>";
                                                                        ?>                                                
                                                                    </div>

                                                                    <!-- setter e getter de helice -->
                                                                    <div class="p-2 border-bottom">
                                                                        <?php
                                                                            $v->setHelice($_SESSION['helice']);
                                                                            echo "<mark class='rounded'>Hélice:</mark> {$v->getHelice()} <br/>";
                                                                        ?>                                                
                                                                    </div>

                                                                    <!-- setter e getter de tomada -->
                                                                    <div class="p-2 border-bottom">
                                                                        <?php
                                                                            $v->setTomada($_SESSION['tomada']);
                                                                            echo "<mark class='rounded'>Tomada:</mark> {$v->getTomada()} <br/>";
                                                                        ?>                                                
                                                                    </div>

                                                                    <!-- setter e getter de nível de Velocidade -->
                                                                    <div class="p-2">
                                                                        <?php
                                                                            $v->setNivelVelocidade($_SESSION['nV']);
                                                                            echo "<mark class='rounded'>Nível de Velocidade:</mark> {$v->getNivelVelocidade()} <br/>";
                                                                        ?>                                                
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>


                                                            <!-- Verificando dados -->
                                                            <div class="bg-info text-white ra-15 my-4 my-4">
                                                                <h2 class="bg-white text-dark text-center  rt-15 p-2">
                                                                    Verificando dados
                                                                </h2>

                                                                <div class="p-2">
                                                                    <?php
                                                                        var_dump($_SESSION['nV']);
                                                                        echo "<br/>";
                                                                        echo "<br/><mark class='rounded'>Ligar:</mark> ".$ligarV. "<br/>";

                                                                        echo "<br?>";
                                                                        echo "<br/><mark class='rounded'>Desligar:</mark> ".$desligarV. "<br/>";
                                                                        
                                                                        echo "<br/><mark class='rounded'>Manutenção:</mark> ".$manutV. "<br/><br/>";
                                                                    ?>
                                                                </div>
                                                            </div>


                                                            <!-- Métodos -->
                                                            <div class="bg-info text-white ra-15 my-4">
                                                                <h2 class="bg-white text-dark text-center  rt-15 p-2">
                                                                    Métodos
                                                                </h2>
                                                                
                                                                <!-- Chamando os métodos -->
                                                                <div class="p-2">
                                                                    <!-- Ligar() -->
                                                                    <div class="">
                                                                        <?php
                                                                            echo '<mark class="rounded">$v->Ligar'."(<ins class='text-muted'>{$ligarV}</ins>): </mark><br/>";

                                                                            if($ligarV != false) {
                                                                                $v->ligar();
                                                                            }
                                                                        ?>
                                                                    </div>

                                                                    <!-- Desligar() -->
                                                                    <div class="my-4">
                                                                        <?php
                                                                            echo '<mark class="rounded">$v->Desligar'."(<ins class='text-muted'>{$desligarV}</ins>): </mark><br/>";

                                                                            if($desligarV != false) {
                                                                                $v->desligar();
                                                                            }
                                                                        ?>
                                                                    </div>

                                                                    <!-- Manutenção() -->
                                                                    <div class="my-4">
                                                                        <?php
                                                                            echo '<mark class="rounded">$v->Manutenção'."(<ins class='text-muted'>{$manutV}</ins>): </mark><br/>";

                                                                            if($manutV != false) {
                                                                                $v->manutencao();
                                                                            }
                                                                        ?>
                                                                    </div>
                                                                </div>

                                                            </div>  

                                                            <!-- Vendo o interior do objeto -->
                                                            <div class="bg-info text-white ra-15 my-4 my-4">
                                                                <h2 class="bg-white text-dark text-center  rt-15 p-2">
                                                                    Vendo o interior do objeto
                                                                </h2>

                                                                <div class="p-2">
                                                                    <pre class="text-white">
                                                                        <?php
                                                                            print_r($v);
                                                                        ?>
                                                                    </pre>
                                                                </div>
                                                            </div>      

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!--</footer.php/col> -->
                    <!--</footer.php/row> -->
                <!--</footer.php/container-fluid> -->
            <!--</footer.php/content> -->
        <!--</footer.php/wrapper> -->
    <!--</footer.php/body> -->
<!--</footer.php/html> -->