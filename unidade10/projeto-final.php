<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php
            $_megasena = array();
            $_i = 1;
            while ($_i < 7){
                $_sorteio = rand(1, 60);
                if(!in_array($_sorteio, $_megasena)){
                    $_megasena[] = $_sorteio;
                    $_i ++;
                } else {
                    $_sorteio = rand(1, 60);
                }
            }
            sort($_megasena);

            foreach($_megasena as $_numero) {
                echo "$_numero <br>";
            }
        ?>
    </body>
</html>