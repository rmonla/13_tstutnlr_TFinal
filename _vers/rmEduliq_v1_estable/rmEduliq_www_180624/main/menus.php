<?php  
/*<®> Includes <®>*/
	include_once 'fxs.php';
/*<®> Variables <®>*/
	$p = $_SESSION['perfil'];
/*<®> Obtengo de la BD los menus y opciones <®>*/
	$sql = "SELECT mopciones.* FROM mo_perf WHERE idperfil=$p";
	$sql = "SELECT mopciones.* 
				FROM mo_perf 
				INNER JOIN mopciones ON mopciones.id = idmopciones 
				WHERE idperfil=$p";

	$rs_rel  = ejecutar($sql);
	while ($reg_rel = mysql_fetch_array($rs_rel)){
		$opc = $reg_rel['mo'];
		$sql_reg = "SELECT * FROM mopciones WHERE id=$opc";
	}



	//SELECT perfiles.perfil as, menus.menu, mopciones.opcion, mopciones.link, perfiles.id
	//FROM perfiles INNER JOIN ((menus INNER JOIN mopciones ON menus.id = mopciones.idmenu) INNER JOIN mo_perf ON mopciones.id = mo_perf.idmopciones) ON perfiles.id = mo_perf.idperfil;



?>