<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa{
    //Atributos 
    private $setor;
    private $trabalhando;
    //Método
    public function mudarTrabalho(){
      
    }
    //Métodos especiais
    public function getSetor() {
        return $this->setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setSetor($setor){
        $this->setor = $setor;
    }

    public function setTrabalhando($trabalhando){
        $this->trabalhando = $trabalhando;
    }
}
