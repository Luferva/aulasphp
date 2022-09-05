<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body style="background-color: rgb(47, 131, 199);">
<font size="5" face="calibri" >

<p align="center"> <img src="imagens/validacao.png" alt="logo-validacao"> </p>

<h1 align = "center">Algoritmo para validação de nota</h1>

<?php
error_reporting(0);
?>

<form action="" method="post">
    Nota: <input type="text" name="nota"> <br>
    <input type= "submit">
</form>

<?php
    $text = $_POST["nota"];

    if ($text == null) {
        echo "Informe a nota, entre 0 e 10 !";
    }else if(($text <= 10) && ($text >=0)){
        echo "$text é valida !!! A nota esta entre 0 e 10!";
    }else{
        echo "Nota Invalida !!!";
    }
?>

</font>
</body>
</html>