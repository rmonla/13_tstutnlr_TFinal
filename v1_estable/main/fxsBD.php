<?php  

/* Inicilizo  las variables de conexion */
	$dtsBD = [
		"cols"               => ['usr',              'pass',      'base'          ],
		"mysql.hostinger.es" => ['u138934575_edliq', '$02rmonla', 'u138934575_edliq'],
		"localhost"          => ['root',             'lhsurnm',   'eduliq'          ]
	];	

	$appHost = $_SERVER['HTTP_HOST'];

	if (!isset($dtsBD[$appHost])) {
		/*ERROR*/
		echo "*appERROR* No se pudo establecer el appHost-> $appHost";
		exit;
	} else {
		list($usrBD, $passBD, $baseBD) = $dtsBD[$appHost];
	}
	
/*<®> fx conBD <®>*/
	function conBD($appHost, $usrBD, $passBD, $baseBD){
		
		$conBD = new mysqli($appHost, $usrBD, $passBD, $baseBD);
		
		if ($conBD->connect_errno) {
		    echo "Fallo al conectar a MySQL: (" . $conBD->connect_errno . ") " . $conBD->connect_error;
		    return 0;
		}
		return $conBD;
	}

/*<®> Test conBD <®>*/
	if(!conBD($appHost, $usrBD, $passBD, $baseBD)) exit;


		// $dominio = $_SERVER['HTTP_HOST'];
		// //var_dump($dominio);
		// //exit;
		// switch ($dominio) {
		// 	case 'localhost': //Si se está ejecutando en mi pc.
		// 		$mysql_host       = "localhost";
		// 		$mysql_usuario    = "root";
		// 		$mysql_contrasena = "lhsurnm";
		// 		$basedatos        = "eduliq";
		// 		break;
			
		// 	default: //Si se está ejecutando en hostinger.
		// 		$mysql_host       = "mysql.hostinger.es";
		// 		$mysql_usuario    = "u138934575_edliq";
		// 		$mysql_contrasena = "$02rmonla";
		// 		$basedatos        = "u138934575_edliq";
		// 		break;
		// }
	

	// $mysqli = new mysqli("127.0.0.1", "usuario", "contraseña", "basedatos", 3306);
	// if ($mysqli->connect_errno) {
	//     echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	// }

	// echo $mysqli->host_info . "\n";

/*<®> fx conBD <®>*/
	/**
	 * Función que retorna la conexion de la BD.
	 */
// function conBD(){
// 	/* Conecto al motor de base de datos */
// 		if (!($conexion_mysql = mysql_connect($mysql_host, $mysql_usuario,$mysql_contrasena))){
// 			/*ERROR*/
// 			$msj = 'No se pudo establecer la conexión con la BD.';
// 			echo $msj;
// 			exit;
// 		}
// 	/* Selecciono la base de datos */
// 		if (!mysql_select_db($basedatos, $conexion_mysql)){
// 			/*ERROR*/
// 			$msj = 'No se pudo seleccionar la BD.';
// 			echo $msj;
// 			exit;
// 		}	
// 	return $conexion_mysql;
// }
// /*<®> fx ejecutar <®>*/
// 	/**
// 	 * Función que retorna registros desde una consulta SQL.
// 	 */
// function ejecutar($sql){
// 	if (!$rs = mysql_query($sql, conBD())) return false;
// 	return $rs;
// }

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
