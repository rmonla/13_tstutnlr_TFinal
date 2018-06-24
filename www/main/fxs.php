<?php  

	$arr_dias  = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
	$arr_meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
//echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
//Salida: Viernes 24 de Febrero del 2012
 

/*<®> fx conexion <®>*/
	/**
	 * Función que retorna la conexion de la BD.
	 */
function conexion(){
	/* Inicilizo  las variables de conexion */
		$dominio = $_SERVER['HTTP_HOST'];
		//var_dump($dominio);
		//exit;
		switch ($dominio) {
			case 'localhost': //Si se está ejecutando en mi pc.
				$mysql_host       = "localhost";
				$mysql_usuario    = "root";
				$mysql_contrasena = "Sopita_123";
				$basedatos        = "rmEduliq";
				break;
			
			default: //Si se está ejecutando en hostinger.
				$mysql_host       = "mysql.hostinger.es";
				$mysql_usuario    = "u138934575_edliq";
				$mysql_contrasena = "$02rmonla";
				$basedatos        = "u138934575_edliq";
				break;
		}

	/* Conecto al motor de base de datos */
		if (!($conexion_mysql = mysql_connect($mysql_host, $mysql_usuario,$mysql_contrasena))){
			/*ERROR*/
			$msj = 'No se pudo establecer la conexión con la BD.';
			echo $msj;
			exit;
		}
	/* Selecciono la base de datos */
		if (!mysql_select_db($basedatos, $conexion_mysql)){
			/*ERROR*/
			$msj = 'No se pudo seleccionar la BD.';
			echo $msj;
			exit;
		}	
	return $conexion_mysql;
}
/*<®> fx ejecutar <®>*/
	/**
	 * Función que retorna registros desde una consulta SQL.
	 */
function ejecutar($sql){
	if (!$rs = mysql_query($sql, conexion())) return false;
	return $rs;
}
/*<®> fx myURL <®>*/
	/**
	 * Función que obtiene la URL actual.
	 */
function myURL(){
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	return $url;
}

/*<®> fx msj <®>*/
	/**
	 * Función que muestra un mensaje de error por pantalla.
	 */
function msj($msj = '', $tipo = 'ERROR', $retorno = ''){
	$msj = $tipo.': '.$msj;
	if($tipo != 'Err Conexión') logs($msj);
	header('Content-Type: text/html; charset=UTF-8');
	$elMsj = "<script type=\"text/javascript\" >
  	alert('$msj');
  	setTimeout(\"location.href='$retorno'\",0); 
	</script>";
	echo $elMsj;
}
/*<®> fx logs <®>*/
	/**
	 * Función que carga un log en la BD de un error o un insidente.
	 */
	function logs($log = ''){
		$tabla = 'logs';
		$datos = array('log' => $log);
		sql_insert($tabla, $datos);
	}
/*<®> fx sql_insert <®>*/
	/**
	 * Función que inserta un registro en una tabla.
	 */
	function importacion($archivo, $hasta = '0', $desde ='0'){
		include_once 'dbf_class.php';
		
		$file     = $archivo; //WARNING !!! CASE SENSITIVE APPLIED !!!!!
		$dbf      = new dbf_class($file);
		$num_regs = $dbf->dbf_num_rec;
		$num_cols = $dbf->dbf_num_field;
		$num_cols = $num_cols - '8'; //por que me trae unas columnas basias.


		/*<®> Cargo los nombres tablas y columnas de la BD <®>*/
   		$tbl = 'importacion';
   		$campos = cargarColumnasDeTabla($tbl);

		/*<®> Armo los encavezados <®>*/
			$enc = '';
			while($col = mysql_fetch_array($campos))
				$enc.= ','.$col['Field'];
			$enc = substr($enc,1);
		/*<®> Agregos los registros a la BD <®>*/
			$desde = ($desde > '0') ? $desde : '0' ;
			$hasta = ($hasta > '0') ? $hasta : $num_regs ;
			for($i=$desde; $i<$hasta; $i++){
		   	$row = $dbf->getRow($i);
				$dat = '';
				for($j=0; $j<$num_cols; $j++)
					$dat.= ",'$row[$j]'";
				$dat = substr($dat,1);
				$sql = "INSERT INTO $tbl ( $enc ) VALUES ( $dat )";
				//var_dump($sql);
				//exit;
				ejecutar($sql);
			}
	}
/*<®> fx sql_insert1 <®>*/
	/**
	 * Función que inserta un registro en una tabla.
	 */
	function sql_insert1($tabla, $datos){
	  /*<®> Cargo los nombres tablas y columnas de la BD <®>*/
	    $campos = array(
	    						'logs' => array(
								    		'id',
								    		'log', 
								    		'fecha'
											)
								);
	    
	  /*<®> Construyo la consulta SQL <®>*/
	    /*<®> Armo la string de los campos <®>*/
	      if(!isset($campos[$tabla])){
	      	/*ERROR*/
	      	msj('La tabla <strong>'.$tabla.'</strong> no se encuentra en la BD', 'Err InsertInto');
	      	return;
	      }else{
		      switch ($tabla) {
		      	case 'logs':
		      		$i = 1;
		      		if(!isset($datos['fecha'])) $datos['fecha'] = date('Y-m-d H:i:s', time());
		      		break;
		      	
		      	default:
		      		$i = 0;
		      		break;
		      }
		      $sql_campos = '';
	      	$sql_datos = '';
		      for ($i; $i < (count($campos[$tabla]))-1; $i++){ // El -1 es para el sin coma.
						$campo      = $campos[$tabla][$i];
						$sql_campos .= $campo.', ';
						$sql_datos  .= '\''.$datos[$campo].'\', ';
	        }
					$campo      = $campos[$tabla][$i];
		      $sql_campos.= $campo; // <-- Este sin coma.
					$sql_datos  .= '\''.$datos[$campo].'\'';
	      }
	    /*<®> Armo la string de la consulta <®>*/
	      $sql = 'INSERT INTO '.$tabla.' ( '.$sql_campos.' ) VALUES ( '.$sql_datos.')';
	      //var_dump($sql);
	      //exit;
	  /*Ejecuto la consulta SQL*/
	     if (!mysql_query($sql, conexion())){
	      /*ERROR*/
	    	msj('No se pudo insertar el registro en la BD <strong>'.var_dump($datos).'</strong>', 'Err InsertInto');
	    	return;
	    }      
	}
/*<®> fx cargarColumnasDeTabla <®>*/
	/**
	 * Función que carga los encavezados de columnas de una tabla dada de la BD.
	 */
	function cargarColumnasDeTabla($tbl){
		$sql = "SHOW FIELDS FROM $tbl";
		$rs = ejecutar($sql);
		return $rs;
	}
/*<®> fx arrNomBDColDBF <®>*/
	/**
	 * Función que retorna un array 
	 * con los nombres de columnas y
	 * los lugares donde se encuentran 
	 * los valores en la DBF.
	 */
	function arrNomBDColDBF($timport){
	/*<®> Armo y ejecuto la sql de selección <®>*/
		$sql  = "SELECT * FROM importaciones WHERE timport='$timport'";
		$regs = ejecutar($sql);
	/*<®> Armo y cargo el array de resultado <®>*/
		$arr = array();
		while($reg = mysql_fetch_array($regs))
			$arr[$reg['nomb_bd']] = $reg['col_dbf'];
		
		//var_dump($arr);
		//exit;
		return $arr;
	}
/*<®> fx mostrarDBF <®>*/
	/**
	 * Función que muestra el contenido de un archivo DBF por pantalla.
	 */
	function mostrarDBF($arch, $timport, $desde ='0', $hasta = '10'){
	/*<®> Inluyo la clase que administra dbfs <®>*/
		include_once 'dbf_class.php';
	/*<®> Instancio un objeto de la clase <®>*/
		$dbf      = new dbf_class($arch);
	/*<®> Cuento registros y columnas <®>*/
		$num_regs = $dbf->dbf_num_rec;
		$num_cols = $dbf->dbf_num_field;
	/*<®> Cargo, desde BD segun timport, 
		los nombres de las columnas
		y la ubicación en la DBF<®>*/
		$arr_NomBDColDBF = arrNomBDColDBF($timport);
	/*<®> Armo la tabla <®>*/
		$tabla = "<h2>Vista previa desde la DBF.</h2>";
		$tabla.= "<table summary='Summary Here' cellpadding='0' cellspacing='0'>";
		/*<®> Encavezados <®>*/
			$tabla.= "<thead><tr>";
			for ($i=0; $i < $num_cols; $i++) { 
				$tabla.= "<th>($i)</th>";
			}
			$tabla.= "</tr></thead>";
		/*<®> Datos <®>*/
			$tabla.= "<tbody>";
			$TClass = 'light';
			$tabla.= "<tr class='$TClass'>";
			for ($i=0; $i < $num_cols; $i++) { 
				$dbf_reg = $dbf->getRow(0);
				$val_dbf = $dbf_reg[$i];
				$tabla.= "<td align='center'>$val_dbf</td>";
			}
			$tabla.= "</tr>";
		$tabla.= "</tbody></table>";
		echo $tabla;
	/*<®> Armo la tabla <®>*/
		$tabla = "<h2>Vista previa como se importarán los datos.</h2>";
		$tabla.= "<table summary='Summary Here' cellpadding='0' cellspacing='0'>";
		/*<®> Encavezados <®>*/
			$tabla.= "<thead><tr>";
			foreach ($arr_NomBDColDBF as $NomBD => $ColDBF) {
				$tabla.= "<th>$NomBD ($ColDBF)</th>";
			}
			$tabla.= "</tr></thead>";
		/*<®> Datos <®>*/
			$tabla.= "<tbody>";
			$TClass = 'light';
			for($i=$desde; $i<$hasta; $i++){
				$TClass = ($TClass != 'light')? 'light': 'dark';
				$tabla.= "<tr class='$TClass'>";
				foreach ($arr_NomBDColDBF as $NomBD => $ColDBF) {
					$dbf_reg = $dbf->getRow($i);
					$val_dbf = $dbf_reg[$ColDBF];
					$tabla.= "<td align='center'>$val_dbf</td>";
				}
				$tabla.= "</tr>";
			}
		$tabla.= "</tbody></table>";
		$tabla.= "<br>Cantidad de Registros = $num_regs se mostraron desde el $desde hasta el $hasta.<br><br>";
		echo $tabla;
	}   
/*<®> fx eliminarArchs <®>*/
	/**
	 * Función que elimina todo los archivos de una carpeta dada.
	 */
	function eliminarArchs($carpeta){
		foreach(glob($carpeta . "/*") as $archivos_carpeta){
			//echo $archivos_carpeta;
			if (is_dir($archivos_carpeta)){
				eliminarDir($archivos_carpeta);
			}else{
				unlink($archivos_carpeta);
			}
		}
	}
/*<®> fx descomprimirArch <®>*/
		/**
		 * Función que descomprime el archivo enviado.
		 */
	function descomprimirArch($zip_arch, $path_dest){
		$path_orig = 'uploads/';
		$zip_arch = $path_orig.$zip_arch;
		eliminarArchs($path_dest);
		//var_dump($zip_arch);
	   //exit;
		$zip = new ZipArchive;
		if ($zip->open($zip_arch) === TRUE) {
		    $zip->extractTo($path_dest);
		    $zip->close();
	   } else {
	   	echo "No se pudo descomprimir el archivo.";
	   	return false;
	   }
		//var_dump($zip->open($arch), $destino, $zip->extractTo($destino));
	   return true;
	}	
/*<®> fx buscarPrimerDBF <®>*/
	/**
	 * Función que buscar el primer archivo DBF que encuentre en un carpeta dada.
	 */
	function buscarPrimerDBF($path_dbfs){
		$dir = opendir($path_dbfs); 
		$archivo = readdir($dir);
		$arch_dbf = 'NoEncontrado';
		$stop = 0;
		while($archivo = readdir($dir)){  
	      if ($archivo != ".")
	      	if($archivo != ".." ){
	      		$arch = explode('.', $archivo);
	      		//var_dump($arch);
	      		//exit;
	      		$ext = strtolower($arch[1]);
	      		if($ext == 'dbf'){
	      			$arch_dbf = $archivo;
	      			break;
      			}
				}
		}
		closedir($dir);
		if($arch_dbf == 'NoEncontrado') return false;
		return $arch_dbf;
	}
/*<®> fx contFilasDBF <®>*/
	/**
	 * Función que cuanta las filas de un archivo DBF.
	 */
	function contFilasDBF($arch_dbf){
		/*<®> includes <®>*/
			include_once 'dbf_class.php';
		/*<®> Variables <®>*/
			$dbf_path = 'uploads/dbfs/';
			$file = $dbf_path.$arch_dbf;

			//var_dump($file);
		/*<®> Instancio la calse <®>*/
			$dbf  = new dbf_class($file);
		/*<®> Retorno el resultado <®>*/
			return $dbf->dbf_num_rec;
	}
/*<®> fx obtenerRegDBF <®>*/
	/**
	 * Función que obtiene un registro de un archivo DBF.
	 */
	function obtenerRegDBF($arch_dbf, $id){
		/*<®> includes <®>*/
			include_once 'dbf_class.php';
		/*<®> Instancio la clase <®>*/
			$dbf      = new dbf_class($arch_dbf);
		/*<®> Retorno el resultado <®>*/
			return $dbf->getRow($id);
	}
/*<®> fx buscarReg <®>*/
	/**
	 * Función que retorna verdadero si encuentra un registro en una tabla.
	 */
	function buscarReg($tbl, $where, $valcol = 'SinValor'){
		/*<®> Sentencia SQL <®>*/
			$sql = "SELECT * FROM $tbl WHERE $where";
		/*<®> Verifico si se encontró el registro <®>*/
			$reg = ejecutar($sql);
			$res = mysql_num_rows($reg);
		/*<®> Imprimo el resultado <®>*/
			if ($res != 0){
				$res = mysql_fetch_array($reg);
				$res = ($valcol != 'SinValor') ? $res[$valcol]: true; //Si me piden que retorne el valor de la columna lo retorno.
			} else $res = false;
				/*if($valcol != 'SinValor'){
					var_dump($res[$valcol], $valcol);
					exit;
				}*/
			return $res;
	}
/*<®> fx contarRegs <®>*/
	/**
	 * Función que retorna la catidad de registros de una tabla.
	 */
	function contarRegs($tbl, $where = '0'){
		/*<®> Sentencia SQL <®>*/
			$where = ($where == '0') ? "" : " WHERE $where";
			$sql = "SELECT COUNT(*) as cant FROM $tbl$where";
			//var_dump($sql);
			//exit;
		/*<®> Cuento los registros <®>*/
			$res = ($res = ejecutar($sql))? mysql_fetch_array($res) : 0 ;
		/*<®> Imprimo el resultado <®>*/
			return $res['cant'];
	}

/*<®> fx situacionAgente <®>*/
	/**
	 * Función que retorna un array con la información de 
	 * situación histórica o de revista del agente.
	 */
	function situacionAgente($docu, $periodo = '0'){
		/*<®> Variables <®>*/
			global $arr_meses;
			$datos = array();
		/*<®> Verifico el método <®>*/
			$s_rev = ($periodo != '0'); //guarda true o false en s_rev
		/*<®> Traigo el id del periodo <®>*/
			if($s_rev){
				$q = "SELECT * FROM periodos WHERE periodo='$periodo'";
				if($rs = ejecutar($q)){
					$rg = mysql_fetch_array($rs);
					$idperiodo = $rg['id'];
				}else{
					echo "No se encontro índice para el periodo $periodo.";
					return false;
				}
			}
		/*<®> Traigo los datos del agente <®>*/
			$q  = "SELECT * FROM agentes WHERE docu='$docu'";
		   if($rs = ejecutar($q)){
				$rg    = mysql_fetch_array($rs);
				$id_ag = $rg['id'];
				
				$datos['agente'] = strtoupper(utf8_encode($rg['nom']));
				$datos['dni']    = 'DNI: '.number_format($rg['docu'], '0', ",", ".");
		   }else{
				echo "No se encontraron datos para el dni $docu.";
				return false;
			}
   	/*<®> Traigo todos ida_p para el $id_ag <®>*/
			$q  = "SELECT * FROM a_p WHERE idagente='$id_ag'";
			if($rs = ejecutar($q)){
				$w_r1 = '';
				while($rg = mysql_fetch_array($rs)){
					$ida_p = $rg['id'];
					$w_r1.= " OR ida_p='$ida_p'";
				}
				$w_r1 = substr($w_r1,4);
		   }else{
				echo "No se encontraron relaciones a_p.";
				return false;
			}
		/*<®> Traigo todos a_p_c_ea para el ida_p <®>*/
			$q = "SELECT * FROM a_p_c_ea WHERE $w_r1";
			if($rs = ejecutar($q)){
				$w_r2 = '';
				while($rg = mysql_fetch_array($rs)){
					$ida_p_c_ea = $rg['id'];
					$w_r2.= " OR ida_p_c_ea='$ida_p_c_ea'";
				}
				$w_r2 = substr($w_r2,4);
		   }else{
				echo "No se encontraron relaciones a_p_c_ea.";
				return false;
			}
		/*<®> Traigo todas liqs de las ida_p_c_ea <®>*/
   		$where = ($s_rev) ? "($w_r2) AND idperiodo='$idperiodo'" : "($w_r2)" ;
   		$q = "SELECT liqs.*, periodos.periodo 
		   			FROM periodos 
		   			INNER JOIN liqs ON liqs.idperiodo = periodos.id 
		   			WHERE $where 
		   			ORDER BY periodo ASC";
   		//var_dump($q);
   		if($rs_l = ejecutar($q)){
   			$i = 0;
   			while($rg_l = mysql_fetch_array($rs_l)){
					$ida_p_c_ea = $rg_l['ida_p_c_ea'];
					$q  = "SELECT * FROM a_p_c_ea WHERE id='$ida_p_c_ea'";
					$rg_r2 = mysql_fetch_array(ejecutar($q));
   				/*<®> Plan <®>*/
						$ida_p  = $rg_r2['ida_p'];
						$q      = "SELECT * FROM a_p WHERE id='$ida_p'";
						$rg     = mysql_fetch_array(ejecutar($q));
						$idplan = $rg['idplan'];
						$q      = "SELECT * FROM planes WHERE id='$idplan'";
						$rg     = mysql_fetch_array(ejecutar($q));
						
						$datos['sit'][$i]['plan'] = $rg['desc'];
					/*<®> Cargo <®>*/
						$idcargo = $rg_r2['idcargo'];
						$q       = "SELECT * FROM cargos WHERE id='$idcargo'";
						$rg      = mysql_fetch_array(ejecutar($q));
						
						$datos['sit'][$i]['cargo'] = utf8_encode($rg['cargo'].'-'.$rg['desc']);
					/*<®> Escuela y Area<®>*/
						$idescu_area = $rg_r2['idescu_area'];
						$q           = "SELECT * FROM escu_areas WHERE id='$idescu_area'";
						$rg_ea       = mysql_fetch_array(ejecutar($q));
						$idescu      = $rg_ea['idescu'];
						$q           = "SELECT * FROM escus WHERE id='$idescu'";
						$rg          = mysql_fetch_array(ejecutar($q));
						
						$datos['sit'][$i]['escuela'] = utf8_encode($rg['escu'].'-'.$rg['desc']);

						$idarea = $rg_ea['idarea'];
						$q      = "SELECT * FROM areas WHERE id='$idarea'";
						$rg     = mysql_fetch_array(ejecutar($q));
						
						$datos['sit'][$i]['area'] = utf8_encode($rg['desc']);
					/*<®> Periodo <®>*/
						$p      = $rg_l['periodo'];
						$p_anio = substr($p, 0, 4);
						$p_mes  = substr($p, -2)+0;
						$p_mes  = substr($arr_meses[$p_mes-1], 0, 3);

						$datos['sit'][$i]['periodo'] = $p_mes.'-'.$p_anio;
					/*<®> Trab <®>*/
						$datos['sit'][$i]['trab']    = $rg_l['trab'];
					/*<®> Antiguedad <®>*/
						$datos['sit'][$i]['anti']    = $rg_l['anti'];
					/*<®> Horas <®>*/
						$datos['sit'][$i]['hora']   = $rg_l['hora'];
					/*<®> Dias <®>*/
						$datos['sit'][$i]['dias']    = $rg_l['dias'];
					/*<®> Incremento i para la proxima sit <®>*/
						$i++;
   			}
		   }else{
				echo "No se encontraron liquidaciones para el agente en este periodo.";
				return false;
			}
	   /*<®> Retorno los datos <®>*/
	   	return $datos;
	}


?>
