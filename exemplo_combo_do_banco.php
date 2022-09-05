<?php
	$query = "
			SELECT id, nome
			FROM parentesco
			ORDER BY nome
		";
		$result = mysql_query($query);
	?>
          <select  name="id_parentesco"  >
            <option value=""> ..:: selecione ::.. </option>
            <?php
		while( $row = mysql_fetch_assoc($result) )
		{
			?>
            <option value="<?php echo $row['id']; ?>" ><?php echo @$row['nome'] ?></option>
            <?php
		}
	?>
          </select>