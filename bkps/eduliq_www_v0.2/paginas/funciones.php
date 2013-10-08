<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?

include("conectar.php");

function export($dni)
{
		$trab = array();
		$i=0;
		$id=$dni;
		$sql = "select * from l201306 where id =".$id;
		if(mysql_query($sql,$conexion_mysql))
			$res_liq = (mysql_query($sql,$conexion_mysql));
		while($fila_liq = (mysql_fetch_array($res_liq)))
			{
				$trab[$i] = $fila['trab'];
				$i++;
			}
		return ($trab);
	
}
?>
</body>
</html>
