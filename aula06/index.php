<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Projeto Controle Remoto</h1>
        <pre>
        <?php
        require_once 'ControleRemoto.php';
        $c = new ControleRemoto();
        $c1->ligar();
        $c->maisVolume();
        $c->abrirMenu();
        ?>
        </pre>
    </body>
</html>
