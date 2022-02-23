<?php
    $_fumante = false;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "É fumante? $_fumante <br>";
            echo "É boleana? " . is_bool($_fumante);
        ?>
    </body>
</html>