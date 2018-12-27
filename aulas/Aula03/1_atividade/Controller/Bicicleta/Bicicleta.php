<?php

class Bicicleta {
    private $rodas;
    private $pneus;
    private $cela;
    private $quidon;
    private $catraca;
    private $pedalar;
    private $empreste;

    public function transportar() {
        $this->rodas = 2;
        $this->pneus = 2;
        $this->cela = true;
        $this->quidon = true;
        $this->catraca = true;        
        $this->pedalar = false;
        $this->empreste = true;

        if($this->rodas===2 && $this->pneus===2 && $this->cela != false && $this->quidon != false && $this->catraca != false && $this->pedalar != false) {
            echo "Pedalando...";
        } elseif($this->empreste != false && $this->pedalar != true && $this->rodas != 2 && $this->pneus != 2 && $this->cela != true && $this->quidon != true && $this->catraca != true && $this->pedalar != true) {
            $this->manutencao();
        }

        if($this->empreste != false && $this->pedalar != true) {
            $this->emprestar();
        }        
    }

    protected function manutencao() {
        echo "Sua bicicleta está em manutenção";
    }

    private function emprestar() {
        if($this->empreste != false && $this->pedalar != true) {
            echo "<br/>Bicicleta emprestada com sucesso!";
        }
    }
}