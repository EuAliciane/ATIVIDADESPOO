<<<<<<< HEAD
<!DOCTYPE html>
        <meta charset="UTF-8">
        <title>Atividade aula</title>
    </head>
    <body>
        <?php
        class Onibus {
            var $origem;
            var $destino;
            var $linha;
            var $embarque;
            
            function pegaronibus() {
                if($this->embarque == true) {
                    echo "<p>Você está embarcando :) Boa Viagem!</p>";
                } else {
                    echo "<p>Você não embarcou... :(</p>";
                }
            }
            function pagarpassagem(){
                $this->embarque = true;
            }
            function naopagar() {
                $this->embarque = false;
            }
        }
        ?>
    </body>
</html>
=======
<!DOCTYPE html>
        <meta charset="UTF-8">
        <title>Atividade aula</title>
    </head>
    <body>
        <?php
        class Onibus {
            var $origem;
            var $destino;
            var $linha;
            var $embarque;
            
            function pegaronibus() {
                if($this->embarque == true) {
                    echo "<p>Você está embarcando :) Boa Viagem!</p>";
                } else {
                    echo "<p>Você não embarcou... :(</p>";
                }
            }
            function pagarpassagem(){
                $this->embarque = true;
            }
            function naopagar() {
                $this->embarque = false;
            }
        }
        ?>
    </body>
</html>
>>>>>>> 6f279b12fb71cc3d5b6eb838eaf1185aa37188c8
