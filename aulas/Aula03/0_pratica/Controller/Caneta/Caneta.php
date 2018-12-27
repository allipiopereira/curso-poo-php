<?php

class Caneta {
    //definicao dos atributos
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    //definicao dos metodos
    public function rabiscar() {
        if ($this->tampada === true) {
            echo '<p>ERRO! Não posso rabiscar!</p>';
        } else {
            echo '<p>Estou rabiscando...</p>';
        }
        
    }

    protected function tampar() {
        $this->tampada = false;
    }

    public function destampar() {
        $this->tampada = true;
    }
}