<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php
        $_count = 1;
        $_sorteio = array();
        $_num = 0;
        while ($_count <= 6) {
            $_num = rand(1, 60);
            if (in_array($_num, $_sorteio)){
                $_num = rand(1, 60);
            } else {
                $_sorteio[] = $_num;
                $_count += 1;
            }  
        }
        sort($_sorteio);
    ?>

    <pre>
        <?php
            print_r($_sorteio);
        ?>
    </pre>
</body>
</html>