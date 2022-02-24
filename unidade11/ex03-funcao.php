<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function converterTemperatura($_celsius) {
           return $_celsius * 1.8 + 32;
        }
        
        echo converterTemperatura(30);
    ?>
</body>
</html>