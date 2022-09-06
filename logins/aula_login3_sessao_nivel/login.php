<?php
include ('config.php');
include('funcao.php');
session_start(); // inicia a sessao	


if (@$_REQUEST['botao']=="Entrar")
{
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	gravaLog ($id, date("Y-m-d h:m:s"), $login, 'Entrou')

	$query = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha' ";
	$result = mysqli_query($con, $query);
	while ($coluna=mysqli_fetch_array($result)) 
	{
		$_SESSION["id_usuario"]= $coluna["id"]; 
		$_SESSION["nome_usuario"] = $coluna["login"]; 
		$_SESSION["UsuarioNivel"] = $coluna["nivel"];

		// caso queira direcionar para páginas diferentes
		$niv = $coluna['nivel'];
		if($niv == "USER"){ 
			header("Location: menu.php"); 
			exit; 
		}
		
		if($niv == "ADM"){ 
			header("Location: menu.php"); 
			exit; 
		}
		// ----------------------------------------------
	}
	
}


?>

<html>
<body>
<form action=# method=post>

Login: <input type=text name=login>
Senha: <input type=text name=senha>
<input type=submit name=botao value=Entrar>

</form>










