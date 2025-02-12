<?php
//Agregação de classe
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao {
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    //Métodos
    public function detalhes() {
        echo "</br>----------------------------------------";
        echo "</br>Livro " . $this->titulo . " escrito por " . $this->autor;
        echo "</br> Páginas: " . $this->totPaginas . " atual " . $this->pagAtual;
        echo "</br> Sendo lido por " . $this->leitor->getNome();
    }
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = true;
    }

    public function avancarPag() {
        $this->pagAtual = $this->pagAtual +1;
    }

    public function fechar() {
        $this->fechar = false;
    }

    public function folhear($p) {
        if($p>$this->totPaginas) {
            $this->pagAtual = 0;
            echo "O livro acaba na página " . $this->totPaginas;
        }else {
            $this->pagAtual = $p;
        }
    }

    public function voltarPag() {
        $this->pagAtual = $this->pagAtual -1;
    }
}
