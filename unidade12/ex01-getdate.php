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
        ?>

        <pre>
            <?php
                print_r($_agora["hours"])
            ?>
        </pre>
    </body>
</html>