<?php
//Agregar classe
class Pessoa{
    //Atributos
    private $nome;
    private $idade;
    private $sexo;
    //Método
    public function fazerAniver() {
        $this->idade = $this->idade + 1;
<<<<<<< HEAD
        echo "</br>" . $this->nome . " tem " . $this->idade . " anos.";
    }
    //Métodos especiais
=======
    }
>>>>>>> 6f279b12fb71cc3d5b6eb838eaf1185aa37188c8
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
}
