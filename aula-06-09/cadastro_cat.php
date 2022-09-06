<?php

    require('config.php');
    include('funcao.php');

    $id = 1;

    if(@$_REQUEST['botao'] =="Gravar")
    {
        $nome = $_POST['nome'];

        gravaLog ($id, date("Y-m-d h:m:s"), $nome, 'criou');

        $query = "INSERT INTO categoria (nome) values ('$nome')";
        $result = mysqli_query($con, $query);
        if(!$result) echo mysqli_error($con);

    }
    if (@$_REQUEST['botao'] =="Deletar")
    {
        $id_cat = $_POST['id'];

        gravaLog ($id, date("Y-m-d h:m:s"), $id_cat, 'deletou');

        $query = "DELETE FROM categoria WHERE id = '$id_cat'";
        $result = mysqli_query($con, $query);
        if(!$result) echo mysqli_error($con);
    }
?>
    <form action="#" method="POST">
    Nome: <input type="text"  name = "nome"><br>
    <input type="submit" name="botao" value="Gravar">
    </form>

    <hr>   

    <form action="" method="POST">
    ID: <input type="text" name= "id"><br>
    <input type="submit" name="botao" value="Deletar">
    </form>