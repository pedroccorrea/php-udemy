<?php 
    $_salario = 1100;
    $_meses = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo $_salario * $_meses . "<br>";
            echo $_salario /2 . '<br>';

            // Exponencial
            echo "Exponencial: " . pow(6, 2) . '<br>';

            // Raiz Quadrada
            echo "Raiz quadrada: " . sqrt(36) . '<br>';
            // Randômico Generica
            echo 'Números geréricos: ' . rand() . '<br>';

            // Randômico entre um intervalo
            echo 'Randomico intervalo: ' . rand(0, 10) . '<br>';
            
            // Valor absoluto
            echo 'Número absoluto: ' . abs(-100)
        ?>
    </body>
</html>