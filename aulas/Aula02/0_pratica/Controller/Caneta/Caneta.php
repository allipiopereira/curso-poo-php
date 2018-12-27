<?php

class Caneta {
    //definicao dos atributos
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    //definicao dos metodos
    function rabiscar() {
        if ($this->tampada === true) {
            echo '<p>ERRO! Não posso rabiscar!</p>';
        } else {
            echo '<p>Estou rabiscando...</p>';
        }
        
    }

    function tampar() {
        $this->tampada = true;
    }

    function destampar() {
        $this->tampada = false;
    }
}