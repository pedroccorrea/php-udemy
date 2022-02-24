<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php
        $_count = 1;
        do {
            $_sorteio = rand(1, 60);
            echo $_sorteio . "<br>";
            $_count += 1;
        } while ($_count < 1)
    ?>
</body>
</html>