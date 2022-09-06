<?php

function gravaLog ($id, $date, $login, $tipo)
{
    include('config.php');

    $query = "INSERT INTO log (id_user, data, descricao1, descricao2) values ('$id', '$data', '$login', '$tipo')";
    $result = mysqli_query($con, $query);
}



?>