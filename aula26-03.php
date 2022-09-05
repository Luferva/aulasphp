<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(@$_REQUEST['botao']=="Dobro")//request pega tanto get como post, mas é utilizado em botões
    {//@ serve para não mostrar notificações na linha 
    $valor = $_POST['numero'];// aqui esta pegar oq o User digitou no campo chamado numero
    echo $valor * 2;
    } 
    // GET -> mais rapido, porem mostra nome de variavel e conteudo na URL
    // POST-> mais lento, mas passa escondido esses valores
    if (@$_REQUEST['botao'] =="Triplo") {
        $valor = $_POST['numero'];
        echo $valor *3;
    }
    ?> 
    
    <form action="#" method=post>
        Numero: <input type=text name=numero>
        <input type= submit name=botao value=Dobro>
        <input type= submit name=botao value=Triplo>
    </form>
    
</body>
</html>