<?php

function somarDados ($a, $b)
{
    $soma = $a + $b;
    return $soma;
}

function gravaLog ($id, $data, $cat, $tipo)
{
    include('config.php');

    $query = "INSERT INTO log (id_user, data, descricao1, desccricao2) values ('$id', '$data', '$cat', '$tipo')";
    $result = mysqli_query($con, $query);
}



?>
    
