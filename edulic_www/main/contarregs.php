<?php  
	/*<®> includes <®>*/
		include_once 'fxs.php';
	/*<®> Cargo Variables <®>*/
		if(isset($_GET['tbl'])) {
			$tbl = $_GET['tbl'];
			$regs = contarRegs($tbl);
			echo $regs;
		} else
			echo 'Error';
?>