<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
<?php

require('config.php');


if(@$_REQUEST['botao'] =="Gravar")
{
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];

    $query = "INSERT INTO cliente (nome, idade, sexo) values ('$nome', '$idade', '$sexo')";
    $result = mysqli_query($con, $query);
    if(!$result) echo mysqli_error($con);

}
if (@$_REQUEST['botao'] =="Deletar")
{
    $id = $_POST['id'];

    $query = "DELETE FROM cliente WHERE id = '$id'";
    $result = mysqli_query($con, $query);
    if(!$result) echo mysqli_error($con);
}

?>
    <form action="#" method="POST">
    Nome: <input type="text"  name = "nome"><br>
    Idade:<input type="text" name="idade"><br>
    Sexo: <input type="radio" name="sexo" value="M"> Masculino <input type="radio" name="sexo" value="F"> Feminino <br> 
    <input type="submit" name="botao" value="Gravar">
    </form>

    <hr>   

    <form action="" method="POST">
    ID: <input type="text" name= "id"><br>
    <input type="submit" name="botao" value="Deletar">
    </form>
    
</body>
</html>