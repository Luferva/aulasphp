<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>
<body style = "background-color: rgb(238, 208, 157);" >

<p align="center"> <img src="imagens/logo2-250.png" alt="logo-marca"> </p>

<font size="5" face="calibri">

<?php
error_reporting(0);
?>

<form action="" method="post">
    Informe o valor da compra: 
    <input type="text" name="valor"><br>
    Metodos de Pagamento: <br>
    <input type="radio" name="escolha" value ="1">Pagamento à vista <br> 
    <input type="radio" name="escolha" value ="2">Pagamento 30 dias direto <br> 
    <input type="radio" name="escolha" value ="3">Pagamento 60 dias direto <br> 
    <input type= "submit">
</form>
    
<?php
    $escolha = $_POST["escolha"];
    $valor = $_POST["valor"];
    $valor_final = 0;

    if (($valor ==null) && ($escolha ==null)){
        echo "Por favor informe o valor da compra e o metodo de pagamento";
    } else if($valor ==null){
        echo "Por favor informe o valor da compra";
    }else if($escolha == null){
        echo "Por favor informe o metodo de pagamento";
    }else{

    switch ($escolha){

        case '1':
            $valor_final = $valor*0.90;
            echo " Pagamento Efetuado. <br> Foi realizado um desconto de 10%. De R$ $valor  para R$ $valor_final. ";
            break;

        case '2':
            $valor_final = $valor*0.95;
            echo " Pagamento Efetuado. <br> Foi realizado um desconto de 5%. De R$ $valor  para R$ $valor_final. ";
            break;
        
        case '3':
            $valor_final = $valor;
            echo "Pagamento Efetuado. <br> Foi realizado nenhum desconto. De R$ $valor  para R$ $valor_final. ";
            break;
            
        }
        
    }    

    
   
?>


</body>
</html>