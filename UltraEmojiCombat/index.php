<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <pre>
        <?php
        require_once 'Lutador.php';
        $l = array();
        $l[0] = new Lutador('Pretty Boy','França', 31, 1.75, 68.9, 
                11, 3, 1);
        $l[1] = new Lutador ('Putscript', 'Brasil', 29, 1.68, 57.8,
                14, 2, 3);
        $l[2] = new Lutador ('SnapShadow', 'EUA', 35, 1.65, 80.9,
                12, 2, 1);
        $l[3] = new Lutador ('Dead Code', 'Australia', 28, 1.93, 81.6,
                13, 0, 2);
        $l[4] = new Lutador ('UfoCobol', 'Brasil', 37, 1.70, 119.3,
                5, 4, 3);
        $l[5] = new Lutador ('Nerdaart', 'EUA', 30, 1.81, 105.7,
                12, 2, 4);
        $l[0]->status();
        $l[3]->status();
        $l[2]->apresentar();
        $l[1]->perderLuta($l[1]);
        $l[1]->perderLuta($l[1]);
        $l[1]->status();
<<<<<<< HEAD
=======
        
>>>>>>> 6f279b12fb71cc3d5b6eb838eaf1185aa37188c8
        ?>
        </pre>
    </body>
</html>
