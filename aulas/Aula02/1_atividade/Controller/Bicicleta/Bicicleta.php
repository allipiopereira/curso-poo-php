<?php

class Bicicleta {
    var $rodas;
    var $pneus;
    var $cela;
    var $quidon;
    var $catraca;
    var $pedalar;
    var $empreste;

    function transportar() {
        if($this->rodas===2 && $this->pneus===2 && $this->cela != false && $this->quidon != false && $this->catraca != false && $this->pedalar != false) {
            echo "Pedalando...";
        } elseif($this->empreste != true) {
            echo "ERROR!!! Sua bicicleta está em manutenção";
        }
    }

    function emprestar() {
        if($this->empreste != false && $this->pedalar != true) {
            echo "<br/>Bicicleta emprestada com sucesso!";
        }
    }
}