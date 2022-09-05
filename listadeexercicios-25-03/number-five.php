<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>
    <?php
    $sexo = "M";

    if ($sexo == "M"){
        echo "M - Masculino";
    }else if($sexo == "F"){
        echo "F - Feminino";
    } else{
        echo "Sexo Inválido";
    }
    ?>
</body>
</html>