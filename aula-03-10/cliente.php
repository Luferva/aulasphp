<html>

<head>
<title>Cadastro de Clientes</title>
<?php include ('config.php');  ?>
</head>

<body>
<?php
$id = @$_REQUEST['id'];

if (@$_REQUEST['botao'] == "Excluir") {
		$query_excluir = "
			DELETE FROM cliente WHERE id='$id'
		";
		$result_excluir = mysqli_query($con, $query_excluir);
		
		if ($result_excluir) echo "<h2> Registro excluido com sucesso!!!</h2>";
		else echo "<h2> Nao consegui excluir!!!</h2>";
}

if (@$_REQUEST['id'] and !$_REQUEST['botao'])
{
	$query = "
		SELECT * FROM cliente WHERE id='{$_REQUEST['id']}'
	";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	//echo "<br> $query";	
	foreach( $row as $key => $value )
	{
		$_POST[$key] = $value;
	}
}

if (@$_REQUEST['botao'] == "Gravar") 
{

	$uploaddir = 'uploads/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
		echo "Arquivo válido e enviado com sucesso.\n";
	} else {
		echo "Possível ataque de upload de arquivo!\n";
	}

	if (!$_REQUEST['id'])
	{
		$insere = "INSERT into cliente (nome, sexo, avatar) VALUES ('{$_POST['nome']}', '{$_POST['sexo']}', '{$_FILES["userfile"]["name"]}')";
		$result_insere = mysqli_query($con, $insere);
		
		if ($result_insere) echo "<h2> Registro inserido com sucesso!!!</h2>";
		else echo "<h2> Nao consegui inserir!!!</h2>";
		
	} else 	
	{
		$insere = "UPDATE cliente SET 
					nome = '{$_POST['nome']}'
					, sexo = '{$_POST['sexo']}'
					WHERE id = '{$_REQUEST['id']}'
				";
		$result_update = mysqli_query($con, $insere);

		if ($result_update) echo "<h2> Registro atualizado com sucesso!!!</h2>";
		else echo "<h2> Nao consegui atualizar!!!</h2>";
		
	}
}
?>

<form enctype="multipart/form-data" action="cliente.php" method="POST">
<table width="200" border="1">
  <tr>
    <td colspan="2">Cadastro de Clientes</td>
  </tr>
  <tr>
    <td width="53">Cod.</td>
    <td width="131"><?php echo @$_POST['id']; ?>&nbsp;
  </tr>
  <tr>
    <td>Nome:</td>
    <td><input type="text" name="nome" value="<?php echo @$_POST['nome']; ?>"></td>
  </tr>
  <tr>
    <td>Sexo:</td>
    <td><input type="radio" name="sexo" value="M" <?php echo (@$_POST['sexo'] == "M" ? " checked" : "" );?> > Masc
    <input type="radio" name="sexo" value="F" <?php echo (@$_POST['sexo'] == "F" ? " checked" : "" );?> > Fem   
    </td>
  </tr>
 
<tr> <TD colspan=2>

    <!-- O Nome do elemento input determina o nome da array $_FILES -->
    Enviar esse arquivo: <input name="userfile" type="file" />
    </td>
  </tr>

 <tr>
    <td colspan="2" align="right"><input type="submit" value="Gravar" name="botao"> - <input type="submit" value="Excluir" name="botao">
    -
    <input type="reset" value="Novo" name="novo"> 	<input type="hidden" name="id" value="<?php echo @$_REQUEST['id'] ?>" />
</td>
    </tr>	

</table>
</form>


</body>
</html>