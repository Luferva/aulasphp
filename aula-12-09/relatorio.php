<html>
<head>
<title>Relat&oacute;rio de Proprietários</title>
<?php 
	include ('config.php'); 
?>
</head>

<body>
<?php 

 if (@!$_REQUEST['botao'] == "Gerar") { ?>

<form action="relatorio.php?botao=gravar" method="post" name="form1">
<table width="95%" border="1" align="center">
  <tr>
    <td colspan=4 align="center">Relat&oacute;rio de Proprietários</td>
  </tr>
  <tr>
    <td width="10%" align="right">Nome:</td>
    <td width="40%"><input type="text" name="nome"  /></td>
	
	<td width="40%" >Ordem:
	<select name=ordem>
	<option value="id"> codigo </option>
	<option value="nome"> nome </option>
	</select>
    </td>

    <td rowspan=1> <input type="submit" name="botao" value="Gerar" /> </td>
</table>
</form>

<?php 

} // se eu não clicar no botao gravar


if (@$_REQUEST['botao'] == "Gerar") {  
?>

<table width="95%" border="1" align="center">
  <tr bgcolor="#9999FF">
    <td colspan=5 align="center"><a href=relatorio.php> Relat&oacute;rio de Proprietário</a></td>
  </tr>
  
  <tr bgcolor="#9999FF">
    <th width="5%">C&oacute;d</th>
    <th width="30%">Nome</th>
    <th width="12%">Telefone</th>
  </tr>

<?php

	$nome = $_POST['nome'];
	$ordem = $_POST['ordem'];
	
	$query = "SELECT *
			  FROM cadastro_pro 
			  WHERE id > 0 ";
	$query .= ($nome ? " AND nome LIKE '%$nome%' " : "");
	$query .= " ORDER by $ordem";
	$result = mysqli_query($con, $query);

/*
	echo "<pre>";
	echo $query;
	echo mysql_error();
	echo "</pre>";
*/
	while ($coluna=mysqli_fetch_array($result)) 
	{
		
	?>
    
    <tr>
      <th width="5%"><?php echo $coluna['id']; ?></th>
      <th width="30%"><?php echo $coluna['nome']; ?></th>
	  <th width="12%"><?php echo $coluna['telefone']; ?></th>
    </tr>

    <?php
	
	} // fim while
?>
</table>
<?php	
}
?>
</body>