<<<<<<< HEAD
<!DOCTYPE html>
        <meta charset="UTF-8">
        <title>Atividade aula</title>
    </head>
    <body>
<?php
require_once 'Onibus.php';
$o1= new Onibus;
$o1->origem = "Terminal do Siqueira";
$o1->destino = "Terminal Santa Felicidade";
$o1->linha = 250;
$o1->embarque = false;
$o1->pegaronibus();
print_r($o1);
echo "</br>";
$o2= new Onibus;
$o2->origem = "Terminal Santa Felicidade";
$o2->destino = "Terminal do Siqueira";
$o2->linha = 250;
$o2->embarque = true;
$o2->pegaronibus();
print_r($o2);
 ?>
    </body>
=======
<!DOCTYPE html>
        <meta charset="UTF-8">
        <title>Atividade aula</title>
    </head>
    <body>
<?php
require_once 'Onibus.php';
$o1= new Onibus;
$o1->origem = "Terminal do Siqueira";
$o1->destino = "Terminal Santa Felicidade";
$o1->linha = 250;
$o1->embarque = false;
$o1->pegaronibus();
print_r($o1);
echo "</br>";
$o2= new Onibus;
$o2->origem = "Terminal Santa Felicidade";
$o2->destino = "Terminal do Siqueira";
$o2->linha = 250;
$o2->embarque = true;
$o2->pegaronibus();
print_r($o2);
 ?>
    </body>
>>>>>>> 6f279b12fb71cc3d5b6eb838eaf1185aa37188c8
</html>