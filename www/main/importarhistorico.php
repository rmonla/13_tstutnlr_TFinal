<?php  
/*<®> Incluyo el código de limpieza de las variables Get y Post <®>*/
	include_once 'limpiarVarGP.php';
/*<®> Incluyo mi biblioteca de funciones <®>*/
	include_once 'fxs.php';
/*<®> Incluyo la clase para tratar archivos dbf <®>*/
	include_once 'dbf_class.php';

/*<®> Verificación Inicial <®>*/
//var_dump($_POST);
	if(!isset($_POST['dbf'], $_POST['ult_fila'])){
		echo "No se recibió correctamente los datos.";
	}else{
		/*<®> Variables <®>*/
			$ult_fila = $_POST['ult_fila'];
			$dbf_arch = $_POST['dbf'];
			$dbf_arch  = '../uploads/dbfs/'.$dbf_arch;
		/* periodo */
			//$periodo = explode('.', $_POST['dbf']);
			//$periodo = $periodo[0];
		/*<®> Cargo el DBF <®>*/
			$dbf       = new dbf_class($dbf_arch);
			$dbf_filas = $dbf->dbf_num_rec;
		/*<®> Cargo array de tablas (Columnas, Condiciones de Búsquedas, Columnas Tupla) <®>*/
			$tblscols = array(
								'zonas'         => array('cols' => array(),
																'where' => '',
																'tupla' => array('zona')),
								'areas'         => array('cols' => array(),
																'where' => '',
																'tupla' => array('area')),
								'planes'        => array('cols' => array(),
																'where' => '',
																'tupla' => array('plan')),
								'agrups'        => array('cols' => array(),
																'where' => '',
																'tupla' => array('agru')),
								'periodos'      => array('cols' => array(),
																'where' => '',
																'tupla' => array('periodo')),
								'agentes'       => array('cols' => array(),
																'where' => '',
																'tupla' => array('docu')),
								'escus'         => array('cols' => array(),
																'where' => '',
																'tupla' => array('idzona','escu')),
								'escu_areas'    => array('cols' => array(),
																'where' => '',
																'tupla' => array('idescu','idarea')),
								'a_p'           => array('cols' => array(),
																'where' => '',
																'tupla' => array('idagente','idplan')),
								'cargos'        => array('cols' => array(),
																'where' => '',
																'tupla' => array('idagru','cargo')),
								'a_p_c_ea'      => array('cols' => array(),
																'where' => '',
																'tupla' => array('ida_p','idcargo','idescu_area')),
								'liqs'          => array('cols' => array(),
																'where' => '',
																'tupla' => array('ida_p_c_ea','idperiodo','trab'))
							);
		/*<®> Cargo desde la BD las columnas de las tablas <®>*/
			foreach ($tblscols as $tbl => $val) {
				$cols = cargarColumnasDeTabla($tbl);
				while($col = mysql_fetch_array($cols)){
					array_push($tblscols[$tbl]['cols'], $col['Field']);
				}
			}
		/*<®> Cargo el array de valores de columnas dentro de la DBF <®>*/
			$dbfcolval = array(
								'docu'    => 0,
								'cuil'    => 1,
								'trab'    => 2,
								'nom'     => 3,
								'sexo'    => 4,
								'zona'    => 4,
								'escu'    => 5,
								'plan'    => 9,
								'anti'    => 14,
								'hora'    => 18,
								'agru'    => 19,
								'lcat'    => 20,
								'ncat'    => 21,
								'dias'    => 22,
								'area'    => 36,
								'periodo' => 37
							);
		/*<®> Cargo el array de tablas que se mostrarán al final <®>*/
			$arr_mostrar = array(
									'zonas'    => 'Zonas',
									'areas'    => 'Areas',
									'planes'   => 'Planes',
									'agrups'   => 'Agrupaciones',
									'periodos' => 'Periodos',
									'agentes'  => 'Agentes',
									'escus'    => 'Escuelas',
									'cargos'   => 'Cargos',
									'liqs'     => 'Liquidaciones'
								);
		/*<®> Tomo el tiempo de inicio <®>*/
			$t_ini = time();
			$t=0;
		/*<®> Se ejecutará el for mientras 
				* no llegue al final de la DBF 
				* el tiempo no supere los 25s <®>*/
			for ($i=$ult_fila; $i<$dbf_filas and $t<=20; $i++){
				/*<®> Cargo la fila del dbf<®>*/
					$dbf_reg = $dbf->getRow($i);
				/*<®> Segun cada tabla busco, armo, y cargo valores en la BD <®>*/
					foreach ($tblscols as $tbl => $vals) {
						/*<®> Armo el where para buscarlo en la BD<®>*/
							$tblscols[$tbl]['where'] = '';
							switch ($tbl) {
								case 'periodos':
										//$tblscols[$tbl]['where'].= " AND periodo='$periodo'";
									break;
								case 'escus':
										$stbl = 'zonas';
										$idzona = buscarReg($stbl, $tblscols[$stbl]['where'], 'id');
										$tblscols[$tbl]['where'].= " AND idzona='$idzona'";
									break;
								case 'escu_areas':
									//idescu
										$stbl = 'escus';
										$idescu = buscarReg($stbl, $tblscols[$stbl]['where'], 'id');
										$tblscols[$tbl]['where'].= " AND idescu='$idescu'";
									//idarea
										$stbl = 'areas';
										$idarea = buscarReg($stbl, $tblscols[$stbl]['where'], 'id');
										$tblscols[$tbl]['where'].= " AND idarea='$idarea'";
									break;
								case 'a_p':
									/* idagente */
										$stbl = 'agentes';
										$idagente = buscarReg($stbl, $tblscols[$stbl]['where'], 'id');
										$tblscols[$tbl]['where'].= " AND idagente='$idagente'";
									/* idplan */
										$stbl = 'planes';
										$idplan = buscarReg($stbl, $tblscols[$stbl]['where'], 'id');
										$tblscols[$tbl]['where'].= " AND idplan='$idplan'";
									break;
								case 'cargos':
									/* idagru */
										$stbl = 'agrups';
										$idagru = buscarReg($stbl, $tblscols[$stbl]['where'], 'id');
										$tblscols[$tbl]['where'].= " AND idagru='$idagru'";
									/* cargo */
										$cargo = $dbf_reg[$dbfcolval['lcat']].$dbf_reg[$dbfcolval['ncat']];
										$tblscols[$tbl]['where'].= " AND cargo='$cargo'";
									break;
								case 'a_p_c_ea':
									/* ida_p */
										$stbl = 'a_p';
										$ida_p = buscarReg($stbl, $tblscols[$stbl]['where'], 'id');
										$tblscols[$tbl]['where'].= " AND ida_p='$ida_p'";
									/* idcargo */
										$stbl = 'cargos';
										$idcargo = buscarReg($stbl, $tblscols[$stbl]['where'], 'id');
										$tblscols[$tbl]['where'].= " AND idcargo='$idcargo'";
									/* idescu_area */
										$stbl = 'escu_areas';
										$idescu_area = buscarReg($stbl, $tblscols[$stbl]['where'], 'id');
										$tblscols[$tbl]['where'].= " AND idescu_area='$idescu_area'";
									break;
								case 'liqs':
									/* ida_p_c_ea */
										$stbl = 'a_p_c_ea';
										//var_dump($tblscols[$stbl]['where']);
										//exit;
										$ida_p_c_ea = buscarReg($stbl, $tblscols[$stbl]['where'], 'id');
										$tblscols[$tbl]['where'].= " AND ida_p_c_ea='$ida_p_c_ea'";
									/* idperiodo */
										$stbl = 'periodos';
										$idperiodo = buscarReg($stbl, $tblscols[$stbl]['where'], 'id');
										$tblscols[$tbl]['where'].= " AND idperiodo='$idperiodo'";
								
								default:
									break;
							}
							foreach ($tblscols[$tbl]['tupla'] as $col) {
								if (isset($dbfcolval[$col])){
									$val = $dbf_reg[$dbfcolval[$col]];
									$tblscols[$tbl]['where'].= " AND $col='$val'";
								}
							}
							$tblscols[$tbl]['where'] = substr($tblscols[$tbl]['where'],5);
						/*<®> Lo importo si no está cargado <®>*/
							if (!buscarReg($tbl, $tblscols[$tbl]['where'])) {
								/*<®> Armo las string de encabezados y datos para la sql<®>*/
									$enc = '';
									$dat = '';
									switch ($tbl) {
										case 'periodos':
												//$enc.= ",periodo";
												//$dat.= ",'$periodo'";
											break;
										case 'escus':
												$enc.= ",idzona";
												$dat.= ",'$idzona'";
											break;
										case 'escu_areas':
												$enc.= ",idescu,idarea";
												$dat.= ",'$idescu','$idarea'";
											break;
										case 'a_p':
												$enc.= ",idagente,idplan";
												$dat.= ",'$idagente','$idplan'";
											break;
										case 'cargos':
												$enc.= ",idagru,cargo";
												$dat.= ",'$idagru','$cargo'";
											break;
										case 'a_p_c_ea':
												$enc.= ",ida_p,idcargo,idescu_area";
												$dat.= ",'$ida_p','$idcargo','$idescu_area'";
											break;
										case 'liqs':
												$enc.= ",ida_p_c_ea,idperiodo";
												$dat.= ",'$ida_p_c_ea','$idperiodo'";
											break;
										
										default:
											break;
									}
									foreach ($tblscols[$tbl]['cols'] as $col) {
										if (isset($dbfcolval[$col])){
											$enc.= ",$col";
											$dat.= ",'".$dbf_reg[$dbfcolval[$col]]."'";
										}
									}
									$enc = substr($enc,1);
									$dat = substr($dat,1);
								/*<®> Inserto el registro <®>*/
									$sql = "INSERT INTO $tbl ( $enc ) VALUES ( $dat )";
									ejecutar($sql);
							}
					}
				/*<®> Tomo el tiempo trancurrido para el corte del for <®>*/
					$t = time() - $t_ini;
			}
		/*<®> Verifico si llegó al final de la dbf<®>*/
			$ult_fila = $i;
			$estado = ($ult_fila == $dbf_filas) ? 'Terminado' : 'Importando' ;
	
	/*<®> Muestro una tabla con los resultados <®>*/
?>
	<table>
		<tr>
			<th align="center">Estado</th>
			<th align="center">Fila</th>
			<?php 
				/*<®> Armo los encavezados de columnas <®>*/
					foreach ($arr_mostrar as $tbl => $nombre) {
			 ?>
				<th align="center"><?php echo ucfirst($nombre); ?></th>
			<?php 
				} 
			?>
		</tr>
		<tr>
			<td align="center">
				<div id="imp_estado">
					<?php echo $estado; ?>
				</div>
			</td>
			<td align="center">
				<div id="ult_fila">
					<?php echo $ult_fila; ?>
				</div>
			</td>
			<?php 
				/*<®> Cuento las cantidades de registros <®>*/
					foreach ($arr_mostrar as $tbl => $nombre) { 
			?>
				<td>
					<div align="center">
						<?php echo contarRegs($tbl); ?>
					</div>
				</td>
			<?php 
				} 
			?>
		</tr>
	</table>
<?php 
	} 
?>
