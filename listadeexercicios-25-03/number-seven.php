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

    $altura = 1.80;
    $sexo = "M";

    if ($sexo == "M"){
        $peso = ((72.7*$altura)-58);
        echo "Seu peso ideal é $peso";
    }else if($sexo == "F"){
        $peso1 = ((62.1*$altura)-44.7);
        echo "Seu peso ideal é $peso1";
    }else{
        echo "sexo invalido";
    }

    ?>
</body>
</html>