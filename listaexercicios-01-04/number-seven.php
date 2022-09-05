<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 07</title>
</head>
<body>
    <?php
    $a = 0;
    while ($a < 500) {
        if(($a%2 == 0) && ($a%9 == 0)){
            echo "$a<br>";
            $a++;
        }else
        $a++;
    }

    ?>
</body>
</html>