<?php 
	include_once '../../main/dbf_class.php';
	include_once '../../main/fxs.php';
	
	$file = '../../uploads/dbfs/EDUC_PADSEP13.DBF'; 
	//$file = $_GET['file']; 
	$id_reg = $_GET['id_reg'];

	$dbf      = new dbf_class($file);
	$num_cols = $dbf->dbf_num_field;
	$num_cols = $num_cols - '8'; //por que me trae unas columnas basias.


	/*<®> Cargo los nombres de columnas de la BD <®>*/
		$tbl = 'importacion';
		$rs_cols = cargarColumnasDeTabla($tbl);

	/*<®> Armo los encavezados <®>*/
		$enc = '';
		while($col = mysql_fetch_array($rs_cols))
			$enc.= ','.$col['Field'];
		$enc = substr($enc,1);
	/*<®> Agregos el registro a la BD <®>*/
	   	$reg = $dbf->getRow($id_reg);
			$dat = '';
			for($j=0; $j<$num_cols; $j++)
				$dat.= ",'$reg[$j]'";
			$dat = substr($dat,1);
			$sql = "INSERT INTO $tbl ( $enc ) VALUES ( $dat )";
			//var_dump($sql);
			//exit;
			ejecutar($sql);
			echo ++$id_reg;
?>