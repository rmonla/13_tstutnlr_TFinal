<?php  

/*<®> Variables de conexion. <®>*/
	$dtsBD = [
		"cols"               => ['usr',              'pass',      'base'          ],
		"mysql.hostinger.es" => ['u138934575_edliq', '$02rmonla', 'u138934575_edliq'],
		"localhost"          => ['root',             'lhsurnm',   'eduliq_v1_200708'          ]
	];	

	$appHost = $_SERVER['HTTP_HOST'];

	if (!isset($dtsBD[$appHost])) {
		echo "<br>*appERROR* No se pudo establecer -> dtsBD[$appHost]";
		exit;
	} else {
		list($usrBD, $passBD, $baseBD) = $dtsBD[$appHost];
	}
	
/*<®> fx conBD <®>*/
	function conBD(){
		global $appHost, $usrBD, $passBD, $baseBD;
		
		$conBD = new mysqli($appHost, $usrBD, $passBD, $baseBD);
		
		if ($conBD->connect_errno) {
		    echo "<br>*bdERROR* Fallo al conectar a MySQL: (" . $conBD->connect_errno . ") " . $conBD->connect_error;
		    return 0;
		}
		return $conBD;
	}

/*<®> Test conBD <®>*/
	if(!$conBD = conBD()) exit;
	$conBD->close();

/*<®> fx ejecutar <®>*/
	function ejecutar($sql){
		if ( !$rs = mysqli_query(conBD(), $sql) ) return false;
		return $rs;
	}

/*<®> fx contarRegs <®>*/
	function contarRegs($tbl, $where = '0'){
		/*<®> Sentencia SQL <®>*/
			$where = ($where == '0') ? "" : " WHERE $where";
			$sql = "SELECT COUNT(*) as cant FROM $tbl$where";
			//var_dump($sql);
			//exit;
		/*<®> Cuento los registros <®>*/
			$res = ($res = ejecutar($sql))? mysqli_fetch_array($res) : 0 ;
		/*<®> Imprimo el resultado <®>*/
			return $res['cant'];
	}





// if (!$mysqli->query("DROP TABLE IF EXISTS test") ||
//     !$mysqli->query("CREATE TABLE test(id INT)") ||
//     !$mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)")) {
//     echo "Falló la creación de la tabla: (" . $mysqli->errno . ") " . $mysqli->error;
// }

// $resultado = $mysqli->query("SELECT id FROM test ORDER BY id ASC");


/*<®> Prueba de Conección a la BD <®>*/
	// echo "<h1>Test Base de Datos</h1>";
	// $sql = "SELECT * FROM areas";
	// echo "<pre>";
	// var_dump(conBD());
	// // var_dump(ejecutar($sql));
	// echo "</pre>";
	// exit;

	// $sql = mysqli_query($success, "SELECT * FROM login WHERE username = '".$_POST['username']."' and password = '".md5($_POST['password'])."'");
	// $row = mysqli_num_rows($sql);
	



?>
