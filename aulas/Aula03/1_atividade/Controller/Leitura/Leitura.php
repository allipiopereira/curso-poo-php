<?php

class Leitura {
    public $livro;
    private $duracao;
    private $atencao;
    protected $prazo;
    protected $concluido;

    public function iniciarLeitura() {
        $this->duracao = 30;
        $this->atencao = true;
        $this->concluido = false;

        if($this->livro != "" && $this->atencao != false && $this->concluido !=true) {
            echo "<p>Iniciando leitura...</p>";

            echo "<br>Livro: ". $this->livro;

            echo "<br/>Duração: ". $this->duracao ." min";

            echo "<br/><pre>". print_r($this->atencao) ."</pre>";
        }
    }

    private function pararLeitura() {
        if($this->atencao != true) {
            echo "<p>Você não está no clima para ler!</p>";

            echo "<br/>Lembrando, você tem até ". $this->prazo ." para concluir o livro";
        }
    }

    private function retomarLeitura() {
        if($this->atencao != false && $this->concluido !=true) {
            echo "<br/>Como é bom saber que você está focado(a)!";
            echo "<br/>Prazo: ". $this->prazo;
        }
    }

    protected function terminarLeitura() {
        if($this->concluido != false && $this->atencao != false) {
            echo "<br/>Parabéns!!! Leitura concluída!!!";
        }
    }
}