<?php  
//echo 'Sin Limpiar';
//var_dump($_POST, $_GET);
$input_arr = array(); 
foreach ($_POST as $key => $input_arr) 
	$_POST[$key] = addslashes(limpiarCadena($input_arr));
$input_arr = array(); 
foreach ($_GET as $key => $input_arr) 
	$_GET[$key] = addslashes(limpiarCadena($input_arr));

//echo 'Limpio';
//var_dump($_POST, $_GET);

function limpiarCadena($valor)
{
	$nopermitidos = array(
							"SELECT","COPY","DELETE","DROP","DUMP"," OR ","%",
							"LIKE","--","^","[","]","\\","!","¡","?","=","&");

	$valor = str_replace($nopermitidos,"",$valor);

	return $valor;
}

?>