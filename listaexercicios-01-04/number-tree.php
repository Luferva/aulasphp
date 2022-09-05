<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
<form action="" method="post">
    Senha: <input type="password" name="senha"> <br>
    <input type= "submit">
</form>

    <?php
    $senha = $_POST["senha"];

    if (strlen($senha) > 8){
        echo "Senha maior que 8 digitos";
    }else if (strlen($senha) < 6){
        echo "senha menor que 6 digitos";
    }else{
        echo "senha ok";
    }
    ?>
</body>
</html>