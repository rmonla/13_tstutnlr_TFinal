<?
	require_once("conectar.php");
	//print_r($_GET);

	$sql = "select * from l201306 where id =".$_GET["id"];
	
	if(mysql_query($sql,$conexion_mysql))
		$res_escu = mysql_query($sql,$conexion_mysql);
		else
			echo "ERROR 124 ON ESCU";
	?>
	<select name="escu">
		<option value="0">Escu</option>
		<?
			while($fila_escu = (mysql_fetch_array($res_escu)))
				{?>
					<option value="<? echo $fila_escu['id'];?>"><? echo $fila_escu['escu'];?></option>
				<? }?>
	</select>

	

	
