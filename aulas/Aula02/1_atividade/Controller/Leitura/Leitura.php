<?php

class Leitura {
    var $livro;
    var $duracao;
    var $atencao;
    var $prazo;
    var $concluido;

    function iniciarLeitura() {
        if($this->livro != "" && $this->atencao != false && $this->concluido !=true) {
            echo "<p>Iniciando leitura...</p>";

            echo "<br>Livro: ". $this->livro;

            echo "<br/>Duração: ". $this->duracao ." min";
        }
    }

    function pararLeitura() {
        if($this->atencao != true) {
            echo "<p>Você não está no clima para ler!</p>";

            echo "<br/>Lembrando, você tem até ". $this->prazo ." para concluir o livro";
        }
    }

    function retomarLeitura() {
        if($this->atencao != false && $this->concluido !=true) {
            echo "<br/>Como é bom saber que você está focado(a)!";
            echo "<br/>Prazo: ". $this->prazo;
        }
    }

    function terminarLeitura() {
        if($this->concluido != false && $this->atencao != false) {
            echo "<br/>Parabéns!!! Leitura concluída!!!";
        }
    }
}