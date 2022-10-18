<?php
$handle = fopen ("catraca.txt",'a+');

$nome = "Luiz ";
$idade = "23";
$sexo = "M";

$exportacao = $nome."|".$idade. "|".$sexo;
fwrite($handle, $exportacao);

fclose($handle);
 ?>
