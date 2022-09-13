<body>
<?php

require('config.php');

if(@$_REQUEST['botao'] =="Gravar")
{
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];

    $query = "INSERT INTO cadastro_pro (nome, telefone) values ('$nome', '$telefone')";
    $result = mysqli_query($con, $query);
    if(!$result) echo mysqli_error($con);

}
if (@$_REQUEST['botao'] =="Deletar")
{
    $id = $_POST['id'];

    $query = "DELETE FROM cadastro_pro WHERE id = '$id'";
    $result = mysqli_query($con, $query);
    if(!$result) echo mysqli_error($con);
}

?>
    <form action="#" method="POST">
    Nome: <input type="text"  name = "nome"><br>
    Telefone:<input type="text" name="telefone"><br>
    <input type="submit" name="botao" value="Gravar">
    </form>

    <hr>   

    <form action="" method="POST">
    ID: <input type="text" name= "id"><br>
    <input type="submit" name="botao" value="Deletar">
    </form>
    
</body>