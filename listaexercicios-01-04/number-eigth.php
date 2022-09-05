<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 08</title>
</head>
<body>
    <?php
    $a = 100;
    $b = 20;

    if ($a < $b) {
        while ($a<$b){
            if($a%2==1){
            echo "$a<br>";
            $a++;
            }else{
                $a++;
            }
        }
    }else{
        echo "O primeiro numero é maior que o segundo";
    }

    ?>
</body>
</html>