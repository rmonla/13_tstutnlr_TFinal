<?
	require_once("conectar.php");
	//print_r($_GET);

	$sql = "select * from l201306 where id =".$_GET['id'];

	if(mysql_query($sql,$conexion_mysql))
		$res_area = mysql_query($sql,$conexion_mysql);
		else
			echo "ERROR 124 ON AREAS";
	?>
	<select name="area"  onChange="from(document.form1.docu.value,'escu','escu.php')">
		<option value="0">Area</option>
		<?
			while($fila_area = (mysql_fetch_array($res_area)))
				{?>
					<option value="<? echo $fila_area['id'];?>"><? echo $fila_area['area'];?></option>
				<? }?>
	</select>

	

	
