<?php  
	/*<®> includes <®>*/
		include_once 'fxs.php';
	/*<®> Cargo Variables <®>*/
		$tbl      = $_GET['tbl'];
		$dbf_fila = $_GET['dbf_fila'];
		$dbf_arch = '../uploads/dbfs/'.$_GET['dbf_arch'];
	/*<®> Array de importación <®>*/
		switch ($tbl) {
			case 'agentes':
				$dbf_cols = array('docu' => 0, 'cuil' => 1, 'nom' => 3, 'sexo' => 4);
				$dbf_id_col = 0;
				$dbf_id_enc = 'docu';
				break;
			
			default:
				# code...
				break;
		}
	/*<®> Obtengo los datos desde la DBF <®>*/
		include_once 'dbf_class.php';
		$dbf     = new dbf_class($dbf_arch);
		$dbf_reg = $dbf->getRow($dbf_fila);
	
		if(!buscarReg($tbl, $dbf_id_enc, $dbf_reg[$dbf_id_col])){ //Si el registro no está en la tabla lo importo.
			/*<®> Armo la SQL <®>*/
				$enc = '';
				$dat = '';
				foreach ($dbf_cols as $key => $val) {
					$enc.= ",$key";
					$dat.= ",'$dbf_reg[$val]'";
				}
				$enc = substr($enc,1);
				$dat = substr($dat,1);
				$sql = "INSERT INTO $tbl ( $enc ) VALUES ( $dat )";
				$res = (ejecutar($sql))? 'Importado' : 'Error';
		}else{
			$res = 'Encontrado';
		}
	/*<®> Imprimo el resultado <®>*/
		echo $res;
?>