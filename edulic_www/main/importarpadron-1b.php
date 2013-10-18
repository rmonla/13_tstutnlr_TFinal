<?php  
/*<®> Verificación Inicial <®>*/
	if(!isset($_GET['dbf'])){
		echo "No se encontró el archivo DBF.";
	}else{
		$command = "php -f importarpadron-1.php";
		system($command);
	}
?>