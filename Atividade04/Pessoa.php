<?php
class Pessoa {
    public $nome;
    public $idade;
    private $telefone;
    
    public function getNome() {
        return $this->nome;
    }
    public function setNome($n) {
        $this->nome = $n;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($i) {
        $this->idade = $i;
    }
    public function getTelefone() {
        return $this->telefone;
    }
    public function setTelefone($t) {
        $this->telefone = $t;
    }
}
