<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Utilizando métodos setters para modificar um objeto</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Pessoa.php';
        
        $p1= new Pessoa;
        $p1->setNome("Maria");
        $p1->setIdade(25);
        $p1->setTelefone(99999999999);
        
        print_r($p1);
        echo "</br>";
        //utilizando método get para exibir mensagens
        echo "Me chamo {$p1->getNome()}, tenho {$p1->getIdade()} anos e meu telefone é {$p1->getTelefone()}";
        ?>
        </pre>
    </body>
</html>
