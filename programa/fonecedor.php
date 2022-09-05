<!DOCTYPE html>
<html lang="pt-">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonecedor</title>
</head>
<body>
    
<?php

require('config.php');


if(@$_REQUEST['botao'] =="Gravar")
{
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $telefone = $_POST['telefone'];
  //$data = $_POST['data'];

    $query = "INSERT INTO fornecedor (nome, cnpj, telefone) values ('$nome', '$cnpj', '$telefone')";
    $result = mysqli_query($con, $query);
    if(!$result) echo mysqli_error($con);

}
if (@$_REQUEST['botao'] =="Deletar")
{
    $id = $_POST['id'];

    $query = "DELETE FROM fornecedor WHERE id = '$id'";
    $result = mysqli_query($con, $query);
    if(!$result) echo mysqli_error($con);
}
?>

<form action="" method="POST">
    Nome: <input type="text" name = "nome" placeholder = "Informe o nome"><br>
    CNPJ:<input type="text" name="cnpj"><br>
    Telefone:<input type="text" name="telefone"><br>
    Data Revisão <input type="date" name="data">
    <input type="submit" name="botao" value="Gravar">
    </form>
    <hr>
    <form action="" method="POST">
    ID: <input type="text" name= "id"><br>
    <input type="submit" name="botao" value="Deletar">
    </form>


</body>
</html>