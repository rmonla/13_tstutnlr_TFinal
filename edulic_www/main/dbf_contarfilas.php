<?php  
	/*<®> includes <®>*/
		include_once 'fxs.php';
	/*<®> Cargo Variables <®>*/
		
		if(isset($_POST['dbf_arch'])) {
			$dbf_path = '';
			$dbf_arch = $_POST['dbf_arch'];
		} else {
			$dbf_path = '../';
			$dbf_arch = $_GET['dbf_arch'];
		}
		$file = $dbf_path.'uploads/dbfs/'.$dbf_arch;
		//var_dump($file);
		//exit;
	/*<®> Cuento las filas del DBF <®>*/
		$res = contFilasDBF($file);
	/*<®> Imprimo el resultado <®>*/
		echo $res;
?>