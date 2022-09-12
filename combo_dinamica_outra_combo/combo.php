<html>
	<head> 
	<script language="JavaScript">
function goToUrl(selObj, goToLocation){
    eval("document.location.href = '" + goToLocation + "&id_cliente=" + selObj.options[selObj.selectedIndex].value + "'");
}
</script>


		    <?php
include ('config.php');
			
		$query = "
			SELECT id, nome
			FROM cliente
			ORDER BY nome
		";
		$result = mysqli_query($con, $query);
	?>
		    DONO: <select  name="id_cliente" onChange="goToUrl(this,'combo.php?pag=combo')" >
		      <option value=""> ..:: selecione ::.. </option>
		      <?php
			
			if ($_REQUEST['id_cliente'] == "") $cliente_combo = $_GET['id_cliente'];
			else $cliente_combo = $_REQUEST['id_cliente'];
			
		while( $row = mysqli_fetch_assoc($result) )
		{
			?>
		      <option value="<?php echo $row['id']; ?>" <?php echo $row['id'] == $cliente_combo?"selected":"" ?>><?php echo $row['nome'] ?></option>
		      <?php
		}
	?>
		      </select>
		    
			<?php
		
		@$id_cliente = $_GET['id_cliente'];
		
		$query = "
			SELECT id, nome
			FROM animal
			WHERE id_cliente = '$id_cliente'
			ORDER BY nome
		";
		
		//echo "$query";
		$result = mysqli_query($con, $query);

	?>
	
	<br>
	
          ANIMAL: <select name="id_animal"  >
            <option value=""> ..:: selecione ::.. </option>
            <?php
		if ($_REQUEST['id_animal'] == "") $veiculos_combo = $_POST['id_animal'];
		else $veiculos_combo = $_REQUEST['id_animal'];
		
		while( $row = mysqli_fetch_assoc($result) )
		{
			?>
            <option value="<?php echo $row['id']; ?>" <?php echo $row['id'] == $veiculos_combo?"selected":"" ?>><?php echo $row['nome'];?></option>
            <?php
		}
	?>
          </select>
	</body>
</html>