<nav id="sidebar">
    <div id="dismiss" class="ama-dismiss btn ama-navbar-custom btn nav-item navbar-btn"  style="border: 2px solid #ccc;">
        <i class="mdi mdi-arrow-left ama-mdi-close mdi-24px"></i>
    </div>

    <div class="sidebar-header text-center">
        <!-- User -->
        <strong>
            <img src="http://alipio/POO-PHP/src/img/alipio-pereira.jpg" alt="" class="rounded-circle  pmd-btn-fab mx-auto border-w-3px shadow-sm" width="90" height="90">
        </strong>
        <div class="lead mx-auto text-dark text-center bg-light  p-3 my-4 mb-5 border-bottom ra-50 shadow-sm">
            <h2>Alipio</h2>
            <h3>Curso POO PHP</h3>
        </div>

        <!-- Lista de Aulas -->
        <ul class="navbar-nav mr-auto my-4">
            <?php
                $z = 0;
                for($i=1; $i <= 4; $i++) {
                    if($i > 9){$z="";}
                    echo "
                    <li class='navbar-item'>
                        <a href='http://alipio/POO-PHP/aulas/Aula$z$i/index.php' class='navbar-link lead mx-auto text-dark text-center p-3 my-2 mb-2 ra-50 shadow-sm'>Aula $z$i</a>
                    </li>
                    ";
                }
            ?>
        </ul>
    </div>
</nav> 