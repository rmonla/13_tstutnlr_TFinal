<?php  
	/*<®> includes <®>*/
		include_once 'fxs.php';
	/*<®> Cargo Variables <®>*/
		$tbl = $_GET['tbl'];
		$col = $_GET['col'];
		$id  = $_GET['id'];
	/*<®> Sentencia SQL <®>*/
		$sql = "SELECT * FROM $tbl WHERE $col=$id";
		$rs = ejecutar($sql);
	/*<®> Verifico si se encontró el registro <®>*/
		$res = mysql_num_rows($rs);
	/*<®> Imprimo el resultado <®>*/
		$res =($res != 0)? false : true;
		$res =($res != 0)?: true;
		echo $res;
?>