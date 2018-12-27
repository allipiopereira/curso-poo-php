<?php

class Ventilador {
    //Atributos
    public $modelo;
    public $tipo;
    public $cor;
    protected $helice;
    private $tomada;
    private $nivelVelocidade;
    public $problema;

    //Métodos getter e setter de $modelo
    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getModelo() {
        return $this->modelo;
    }


    //Métodos getter e setter de $tipo
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }

    
    //Métodos getter e setter de $cor
    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function getCor() {
        return $this->cor;
    }
    

    //Métodos getter e setter de $helice
    public function setHelice($h) {
        $this->helice = $h;
    }

    public function getHelice() {
        return $this->helice;
    }
    

    //Métodos getter e setter de $tomada
    public function setTomada($tmda) {
        $this->tomada = $tmda;
    }

    public function getTomada() {
        return $this->tomada;
    }

    
    //Métodos getter e setter de $nivelVelocidade
    public function setNivelVelocidade($nivelV) {
        $this->nivelVelocidade = $nivelV;
    }

    public function getNivelVelocidade() {
        return $this->nivelVelocidade;
    }


    //Métodos getter e setter de $problema
    public function setProblema($erro) {
        $this->problema = $erro;
    }

    public function getProblema() {
        return $this->problema;
        //$this->manutencao();
    }



    //Métodos ligar()
    
    public function ligar() {
        if($this->getTomada() != "false") {
            
            if($this->getProblema() != "false" || $this->getHelice() != "true") {
                echo "Ops!!! Não é possível ligar, seu ventilador está com algum problema";
            }
            elseif($this->getNivelVelocidade() > 0 && $this->getNivelVelocidade() <= 3) {
                echo "Seu ventilador está ligado na velocidade {$this->getNivelVelocidade()}";
            } else {
                echo "Vai com calma!!! Seu ventilador está no nível {$this->getNivelVelocidade()}";
            }
        } else {
            echo "Imposível ligar, porque o ventilador não está conectado na tomada";
        }
    }

    //Métodos dealigar() manutencao()

    public function desligar() {
        if($this->getProblema() != "false" || $this->getHelice() != "true") {
            echo "Ops!!! Não é possível ligar, seu ventilador está com algum problema";
        }
        elseif($this->getTomada() != "false") {
            if($this->getNivelVelocidade() == 0) {
                echo "Seu ventilador está desligado. Isto é, está na velocidade {$this->getNivelVelocidade()}";
            } elseif($this->getNivelVelocidade() != 0) {
                echo "Você precisa colocar no nível 0 para isso, agora seu ventilador está no nível {$this->getNivelVelocidade()}";
            }
        } else {
            echo "Seu ventilador já está desligado, porque ele está desconectado da tomada";
        }
    }

    //Métodos manutencao()

    public function manutencao() {
        if($this->getProblema() != "false" OR $this->getHelice() != "true") {
            echo "Seu ventilador está com problemas. <br/> Temos uma prazo de 7 dias para que o assistente visite sua casa para resolver o problema";

            if($this->getHelice() != "false") {
                echo "<br/> O problema pode estar na hélice";
            } else {
                echo "<br/> Mesmo a hélice estando ok, vamos verificar ela também";
            }
        } else {
            echo "Ventilador funcionando com sucesso. Não se faz necessário chamar a assistência!!!";
        }
    }
    
}