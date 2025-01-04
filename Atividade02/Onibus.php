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
