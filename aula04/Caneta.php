<?php
class Caneta {
    public $modelo;
    private $ponta;
    private $tampada;
    
    public function __construct(){
        //também é possível criar um construct colocando nele o mesmo nome da classe
        //assim todas vezes que criar uma novo objeto ele virá a configuração padrão
        $this->cor = "Azul";
        $this->tampar();
    }
    public function tampar() {
        $this->tampada= true;
    }
    
    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($m) {
        $this->modelo = $m;
    }
    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($p) {
        $this->ponta = $p;
    }
}
