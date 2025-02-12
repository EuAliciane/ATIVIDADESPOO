<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'ContaBanco.php';
        $p1 = new ContaBanco(); //João
        $p2 = new ContaBanco(); //Maria
        $p1->setNumConta(11111);
        $p1->AbrirConta("CC");
        $p1->setDono("João");
        $p2->setNumConta(22222);
        $p2->AbrirConta("CP");
        $p2->setDono("Maria");
        
        $p1->depositar(300);
        $p2->depositar(500);
        
        $p2->sacar(1000);
        
        $p1->pagarMensal();
        $p2->pagarMensal();
        
        $p1->sacar(338);
        $p2->sacar(630);
        
        $p1->fecharConta();
        $p2->fecharConta();
        
        print_r($p1);
        print_r($p2);
        ?>
        </pre>
    </body>
</html>
