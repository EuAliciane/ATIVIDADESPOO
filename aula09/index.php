<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        //criando objetos
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        $p[0] = new Pessoa("Lucia", 18, "Femino");
        $p[1] = new Pessoa("Roberto", 20, "Masculino");
        
        $l[0] = new Livro("O Hobbit", "J.J.Tolkien", 400, $p[0]);
        $l[1] = new Livro ("A Escada do Cláustro", "Guigo Cartuno", 200, $p[1]);
        //print_r($l[1]);
        //print_r($l[0]);
        //$l[0]->abrir();
       // $l[0]->folhear(1000);
       // $l[0]->detalhes();
        //$l[0]->voltarPag();
        //$l[0]->detalhes();
        $p[1]->fazerAniver();
        $p[0]->fazerAniver();
        ?></pre>
    </body>
</html>
