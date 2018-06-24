<?php  
	include_once 'main/fxs.php';
	//var_dump(arrNomCols('h'));

	//$var1 = '000';
	//$var2 = '';

	//var_dump($r= $var1 == $var2);
	
	//$str = "123456";
   //$encriptada = md5($str);
   //echo $encriptada."<br>";
   //echo strlen($encriptada);
   //var_dump($encriptada);	
////////////////////////////////
///
///
	//$periodo = $_POST['periodo'];
	//$docu    = $_POST['dni'];
	//
	//

	//$periodo = '201311';
	$periodo = '201311';
	//$docu    = '27849467'; //Yanina
	$docu    = '22703174'; //otro
	
	echo "Situaci&oacute;n de Revista <br>";
	var_dump(situacionAgente($docu, $periodo));
	
	echo "Hist&oacute;rico <br>";
	var_dump(situacionAgente($docu));

?>
