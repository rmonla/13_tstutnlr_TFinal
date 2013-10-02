<?
	session_start();
	
  	include("conectar.php");
	
	$usuario = $_SESSION['usuario'];
	$nov = $_POST['nov'];
	$tipo = $_POST['tip'];
	$id = $_POST['docu'];
	echo $id;

	$sql="select * from agentes2 where id =".$id;
	if(mysql_query($sql,$conexion_mysql))
		$resultado = (mysql_query($sql,$conexion_mysql));
	$fila = mysql_fetch_array($resultado);
	$nomb = $fila['nomb'];
	echo $nomb;
	
	$sql="select * from l201306";
	if(mysql_query($sql,$conexion_mysql))
		$res = (mysql_query($sql,$conexion_mysql));
	while($fila_l = (mysql_fetch_array($res)))
		{
			while($fila_l['id'] == $id)
				{
					$docu = $fila_l['docu'];
					if($fila_l['trab'] == $_POST['trab']) 
						$trab = $_POST['trab'];
					if($fila_l['area'] == $_POST['area']) 
						$area = $_POST['area'];						
					if($fila_l['escu'] == $_POST['escu']) 
						$escu = $_POST['escu'];
				}
		}
	$sexo = $_POST['sex'];
	$valor = $_POST['val'];
	$codigo = $_POST['cod'];
	$desde = $_POST['desde'];
	$hasta = $_POST['hasta'];
	$observacion = $_POST['obs'];
	
	$sql = "insert into exportar (id, nov, tipo, docu, sexo, trab, nomb, valor, codigo, desde, hasta, area, escu, observacion, usuario)
					value('$id', '$nov', '$tipo', '$docu', '$sexo', '$trab', '$nomb', '$valor', '$codigo', '$desde', '$hasta', '$area', '$escu',
						  '$observacion', '$usuario')";
	
	if(mysql_query($sql,$conexion_mysql))
		header("location:export.php");
		else
			echo "ERROR NO SE CARGO EL REGISTRO INTENTE NUEVAMENTE";
			
?>
 echo "<option value='$fila_libros[id]'>$fila_libros[nombre]</option>";