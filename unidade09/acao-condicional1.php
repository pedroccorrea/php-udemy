<?php
    $_num1 = 9;
    $_num2 = 9;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            if ($_num1 > $_num2){
                echo "O número $_num1 é maior que o número $_num2";
            }else if ($_num1 == $_num2){
                echo "O número $_num1 é igual ao número $_num2";
            }else {
                echo "O número $_num1 é menor que o número $_num2";
            }
        ?>
    </body>
</html>