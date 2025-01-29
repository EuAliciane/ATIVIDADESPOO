<?php
class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    //Métodos
    function apresentar() {
        echo "<p>--------------------</p>";
        echo "<p>CHEGOU A HORA! O LUTADOR:</p>" . $this->getNome();
        echo " Veio diretamente de " . $this->getNacionalidade();
        echo " tem " . $this->getIdade() . " anos e peso " . $this->getPeso() . "Kg";
        echo "<br>Ele tem " . $this->getVitorias() . " vitorias ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates.";
    }
    public function status() {
        echo "<p>--------------------</p>";
        echo $this->getNome() . " é um peso " . $this->getCategoria();
        echo " Já teve " . $this->getVitorias() . " vitórias, ";
        echo $this->getDerrotas() . " derrotas, e ";
        echo $this->getEmpates() . " empates.";
    }
     public function ganharLuta() {
        $this->setVitorias($this->getVitorias() +1);
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() +1);
    }
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() +1);
        $this->empates +=1;
    }
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    //Métodos Especiais
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates) {
        $this->empates = $empates;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    private function setCategoria() {
        if($this->peso < 52.2) {
            $this->categoria = "inválido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "pesado";
        }else {
            $this->categoria = "inválido";
        } 
    }
}

