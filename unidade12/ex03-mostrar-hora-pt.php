<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            date_default_timezone_set("Brazil/East");
            setlocale(LC_TIME, "portuguese");
            $_agora = getdate();
            
            $_segundos = $_agora["seconds"];
            $_minutos = $_agora["minutes"];
            $_horas = $_agora["hours"];
            $_diaMes = $_agora["mday"];
            $_mes = strftime("%B");
            $_ano = $_agora["year"];

            echo strftime("%A") . ", $_diaMes de $_mes de $_ano";
        ?>

        <pre>
            <?php
                print_r($_agora);
            ?>
        </pre>
    </body>
</html>