<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php
        $_salada = array("laranja", "uva", "abacate");
        for ($_i = 0; $_i < count($_salada); $_i ++){
            echo $_salada[$_i] . "<br>";
        }
    ?>

    <?php
        foreach($_salada as $_frutas){
            echo $_frutas . "<br>";
        }
    ?>
</body>
</html>