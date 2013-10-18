<?php  
/*<®> Includes <®>*/
	include_once 'fxs.php';
	include_once 'dbf_class.php';
/*<®> Verificación Inicial <®>*/
	if(!isset($_GET['dbf'])){
		echo "No se recibió el archivo DBF.";
	}else{
		/*<®> Variables <®>*/
			//$dbf_arch = "EDUC_PADSEP13.DBF";
			$dbf_arch = $_GET['dbf'];
			$dbf_arch  = '../uploads/dbfs/'.$dbf_arch;
		/*<®> Cargo el DBF <®>*/
			$dbf       = new dbf_class($dbf_arch);
			$dbf_filas = $dbf->dbf_num_rec;
			//$dbf_filas = 50;
		/*<®> Array de Importacion <®>*/
			$cols = array('agentes' => array(
												'docu' => 0, 
												'cuil' => 1, 
												'nom'  => 3, 
												'sexo' => 4),
								'zonas' => array(
												'zona' => 5),
								'escuelas' => array(),
								'liquidaciones' => array(),
								);
		/*<®> Obtengo la datos desde donde quedó la importación <®>*/
			$sql           = "SELECT * FROM importaciones WHERE id = 1";
			$rs            = mysql_fetch_array(ejecutar($sql));
		/*<®> Si el estado es Terminado inicio en 0<®>*/
			$estado = $rs['estado'];
			if($estado == 'Terminado'){
				$ult_fila      = '0';
				$agentes       = '0';
				$escuelas      = '0';
				$liquidaciones = '0';
			}else{
				$ult_fila      = $rs['fila'] + '1';
				$agentes       = $rs['agentes'];
				$escuelas      = $rs['escuelas'];
				$liquidaciones = $rs['liquidaciones'];
			}
			$tramo = $ult_fila + '100';
			//var_dump($dbf_filas, $rs['fila'], $i, $tramo);
			//exit;
		/*<®> Importación <®>*/
			//for ($i; $i<$dbf_filas and $i<$tramo; $i++){
			for ($i=$ult_fila; $i<$dbf_filas and $i<=$tramo; $i++){
				/*<®> Cargo la fila <®>*/
					$dbf_reg = $dbf->getRow($i);
				/*<®> Agentes <®>*/
					/*<®> Verifico si ya está cargado <®>*/
						$tbl = 'agentes';
						$enc = 'docu';
						if(!buscarReg($tbl, $enc, $dbf_reg[$cols[$tbl][$enc]])){
							/*<®> Si el registro no está en la tabla lo importo <®>*/
								/*<®> Armo la SQL <®>*/
									$enc = '';
									$dat = '';
									foreach ($cols[$tbl] as $key => $val) {
										$enc.= ",$key";
										$dat.= ",'$dbf_reg[$val]'";
									}
									$enc = substr($enc,1);
									$dat = substr($dat,1);
								/*<®> Inserto el registro <®>*/
									$sql = "INSERT INTO $tbl ( $enc ) VALUES ( $dat )";
									ejecutar($sql);
									$agentes = $agentes +'1';
						}
			}
			$ult_fila = $i;		
	}
	/*<®> Verifico si llegó al final y lo registro en la BD<®>*/
		$estado = ($i == $dbf_filas)? 'Terminado' : 'Importando';
		$sql = "UPDATE 
					importaciones 
					SET 
						estado        ='$estado',  
						fila          ='$ult_fila',  
						agentes       ='$agentes',  
						escuelas      ='$escuelas',  
						liquidaciones ='$liquidaciones'  
					WHERE id = 1";
		ejecutar($sql);
	/*<®> Obtengo la datos desde donde quedó la importación <®>*/
		$sql           = "SELECT * FROM importaciones WHERE id = 1";
		$rs            = mysql_fetch_array(ejecutar($sql));
		$ult_fila      = $rs['fila'];
		$agentes       = $rs['agentes'];
		$escuelas      = $rs['escuelas'];
		$liquidaciones = $rs['liquidaciones'];
		//Importados = 50
		//En la BD   = 50
	/*<®> Muestro una tabla con los resultados <®>*/
?>
		<table>
			<tr>
				<th align="center">Estado</th>
				<th align="center">Fila</th>
				<th align="center">Agentes</th>
				<th align="center">Zonas</th>
				<th align="center">Liquidaciones</th>
			</tr>
			<tr>
				<td align="center">
					<div id="imp_estado">
						<?php echo $estado; ?>
					</div>
				</td>
				<td align="center">
					<?php echo $ult_fila; ?>
				</td>
				<td>
					<div align="center">
						<?php echo contarRegs('agentes'); ?>
					</div>
				</td>
				<td>
					<div align="center">
						<?php echo contarRegs('zonas'); ?>
					</div>
				</td>
				<td>
					<div align="center">
						<?php echo "Importadas $liquidaciones"; ?>
					</div>
					<div align="center">En la BD<?php //echo contarRegs('liquidaciones'); ?></div>
				</td>
			</tr>
		</table>
