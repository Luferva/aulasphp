<html>
	<head> 
	<script language="JavaScript">
function goToUrl(selObj, goToLocation){
    eval("document.location.href = '" + goToLocation + "&id_pro=" + selObj.options[selObj.selectedIndex].value + "'");
}
</script>

<?php
include ('config.php');
			
		$query = "
			SELECT id, nome
			FROM cadastro_pro
			ORDER BY nome
		";
		$result = mysqli_query($con, $query);
	?>
		    Proprietário: <select  name="id_pro" onChange="goToUrl(this,'combo.php?pag=combo')" >
		      <option value=""> ..:: selecione ::.. </option>
		      <?php
			
			if ($_REQUEST['id_pro'] == "") $cliente_combo = $_GET['id_pro'];
			else $cliente_combo = $_REQUEST['id_pro'];
			
		while( $row = mysqli_fetch_assoc($result) )
		{
			?>
		      <option value="<?php echo $row['id']; ?>" <?php echo $row['id'] == $cliente_combo?"selected":"" ?>><?php echo $row['nome'] ?></option>
		      <?php
		}
	?>
		      </select>
		    
<?php
		
            @$id_pro = $_GET['id_pro'];
            
            $query = "
                SELECT id, veiculo
                FROM cadastro_vei
                WHERE id_pro = '$id_pro'
                ORDER BY veiculo
            ";
		
		//echo "$query";
		$result = mysqli_query($con, $query);

	?>
	
	<br>
	
          Veiculo: <select name="id_vei"  >
            <option value=""> ..:: selecione ::.. </option>
            <?php
		if ($_REQUEST['id_vei'] == "") $veiculos_combo = $_POST['id_vei'];
		else $veiculos_combo = $_REQUEST['id_vei'];
		
		while( $row = mysqli_fetch_assoc($result) )
		{
			?>
            <option value="<?php echo $row['id']; ?>" <?php echo $row['id'] == $veiculos_combo?"selected":"" ?>><?php echo $row['veiculo'];?></option>
            <?php
		}
	?>
          </select>
	</body>
</html>