<?
	session_start();
	
	require_once("conectar.php");
	
	$sql = "select * from l201306 where id=".$_GET['id'];
	if(mysql_query($sql,$conexion_mysql))
		$res = mysql_query($sql,$conexion_mysql);
			else
				echo "ERROR 123 ON TRAB";
	?>
	<select name="trab" onChange="from(document.form1.docu.value,'nomb','nombres.php')">
		<option value="0">Trab</option>
		<?
			while($fila_trab = (mysql_fetch_array($res)))
				{?>
					<option value="<? echo $fila_trab['id'];?>"><? echo $fila_trab['trab'];?></option>
				<? }?>
   	</select>
