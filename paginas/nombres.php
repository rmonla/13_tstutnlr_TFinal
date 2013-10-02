<?
	require_once("conectar.php");
	//print_r($_GET);

	$sql = "select * from agentes2 where id =".$_GET["id"];
	
	if(mysql_query($sql,$conexion_mysql))
		$res_nomb = mysql_query($sql,$conexion_mysql);
		else
			echo "ERROR 124 ON NOMB";
	?>
	<select name="nomb" onChange="from(document.form1.docu.value,'area','areas.php')">
		<option value="0">Nomb</option>
		<?
			while($fila_nomb = (mysql_fetch_array($res_nomb)))
				{?>
					<option value="<? echo $fila_nomb['id'];?>"><? echo $fila_nomb['nomb'];?></option>
				<? }?>
	</select>

	

	
