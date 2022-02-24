<?php
    $_salada = array("Laranja", "Uva", "Abacate")
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "Existe o elemento? " . in_array("Laranja", $_salada);
            echo "Em que posição está o elemento? " . array_search("Abacate", $_salada);
        ?>
    </body>
</html>