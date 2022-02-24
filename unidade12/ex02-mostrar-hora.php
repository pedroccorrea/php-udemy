<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            date_default_timezone_set("Brazil/East");
            $_agora = getdate();
            
            $_segundos = $_agora["seconds"];
            $_minutos = $_agora["minutes"];
            $_horas = $_agora["hours"];
            $_diaMes = $_agora["mday"];
            $_mes = $_agora["month"];
            $_ano = $_agora["year"];

            echo "$_horas:$_minutos:$_segundos -  Dia $_diaMes de $_mes de $_ano";
        ?>

        <pre>
            <?php
                print_r($_agora);
            ?>
        </pre>
    </body>
</html>