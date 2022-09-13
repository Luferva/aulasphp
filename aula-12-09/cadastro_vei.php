<body>
<?php

require('config.php');

if(@$_REQUEST['botao'] =="Gravar")
{
    $proprietario = $_POST['id'];
    $veiculo = $_POST['veiculo'];
    $ano = $_POST['ano'];

    $query = "INSERT INTO cadastro_vei (id_pro, veiculo, ano ) values ('$proprietario', '$veiculo', '$ano')";
    $result = mysqli_query($con, $query);
    if(!$result) echo mysqli_error($con);

}
if (@$_REQUEST['botao'] =="Deletar")
{
    $id = $_POST['id'];

    $query = "DELETE FROM cadastro_vei WHERE id = '$id'";
    $result = mysqli_query($con, $query);
    if(!$result) echo mysqli_error($con);
}

?>
    <form action="#" method="POST">
    Proprietário:
    <?php
	$query = "
			SELECT id, nome
			FROM cadastro_pro
			ORDER BY nome
		";
		$result = mysqli_query($con, $query);
	?>
          <select  name="id"  >
            <option value=""> ..:: selecione ::.. </option>
            <?php
		while( $row = mysqli_fetch_assoc($result) )
		{
			?>
            <option value="<?php echo $row['id']; ?>" ><?php echo @$row['nome'] ?></option>
            <?php
		}
	?>
          </select> <br>
    Veiculo: <input type="text"  name = "veiculo"><br>
    Ano: <input type="text"  name = "ano"><br>
    <input type="submit" name="botao" value="Gravar">
    </form>

    <hr>   

    <form action="" method="POST">
    ID: <input type="text" name= "id"><br>
    <input type="submit" name="botao" value="Deletar">
    </form>
    
</body>