<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php
        for ($_count = 1; $_count < 5; $_count ++){
            $_sorteio = rand(1, 60);
            echo $_sorteio . " ";
        }
    ?>
</body>
</html>

