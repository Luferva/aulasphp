<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
</head>
<body>

<body style="background-color: rgb(175, 50, 248)">
<font size="5" face="calibri" >

<p align="center"> <img src="imagens/exer05.png" alt="logo-validacao"> </p>

<h1 align = "center">Todos os numeros menor que 500 e que são divisiveis por 4</h1>

<?php
    $a = 0;
    while ($a < 500) {
        if(($a%4) == 0){
        echo "$a<br>";
        $a++;
    }else
    $a++;
    }
    ?>
    
</body>
</html>