<?php  
	include_once 'main/fxs.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
	<head profile="http://gmpg.org/xfn/11">
		<title>
			EduLiq
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="imagetoolbar" content="no">
		<link rel="stylesheet" href="styles/layout.css" type="text/css">
		<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
		<script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.tabs.setup.js"></script>
		<script type="text/javascript" src="main/fxs.js"></script>
	</head>
	<body>

		<div class="wrapper co10">

			<div id="topbar"><!-- ###### <barra superior> ###### -->
				<div id="slidepanel" style="display: none;">
					<div id="login_res" class="topbox">
						<?php include_once 'login.php'; ?>
					</div><br class="clear">
				</div>
				<div id="loginpanel">
					<ul>
						<li class="left">Login »</li>
						<li class="right" id="toggle">
							<a id="slideit" href="#slidepanel" style="display: block;">Abri Panel</a>
							<a id="closeit" style="display: none;" href="#slidepanel">Cerrar Panel</a>
						</li>
					</ul>
				</div><br class="clear">
			</div><!-- ###### </barra superior> ###### -->
		</div><!-- ####################################################################################################### -->

		<div class="wrapper col1">
			<div id="header"><!-- ###### <cabezera> ###### -->
				<div id="logo">
					<h1 align="left"><a href="#">EduLiq</a> </h1>
					<p align="left"> Sistema de Gestión de Novedades y</p>
					<p align="left">Consulta de Liquidaciones</p>
					</div>
				<div class="fl_right">
				</div><br class="clear">
			</div><!-- ###### </cabezera> ###### -->
		</div><!-- ####################################################################################################### -->
		<div class="wrapper col2">
			<div id="topnav"><!-- ###### <barra navegación> ###### -->
				<ul>
					<li id="MInicio" class="">
						<a href="index_adm.php">Inicio</a>
<!-- 						<ul>
							<li class="last">
								<a href="#">Cargar liquidaciones</a>
							</li>
						</ul>
 -->					</li>
					<li id="Novedades" class="">
						<a href="novedades.php">Novedades</a>
						<ul>
							<li>
								<a href="#">Importación</a>
							</li>
							<li>
								<a href="#">Exportacíon</a>
							</li>
							<li>
								<a href="#">Usuarios</a>
							</li>
							<li class="last">
								<a href="#">Perfiles</a>
							</li>
						</ul>
					</li>
					<li id="#Consultas" class="">
						<a href="consulta.php">Consultas</a>
						<ul>
							<li>
								<a href="#">Importación</a>
							</li>
							<li>
								<a href="#">Exportacíon</a>
							</li>
							<li>
								<a href="#">Usuarios</a>
							</li>
							<li class="last">
								<a href="#">Perfiles</a>
							</li>
						</ul>
					</li>
					<li id="#Reportes" class="">
						<a href="#Reportes">Reportes</a>
						<ul>
							<li>
								<a href="#">Importación</a>
							</li>
							<li>
								<a href="#">Exportacíon</a>
							</li>
							<li>
								<a href="#">Usuarios</a>
							</li>
							<li class="last">
								<a href="#">Perfiles</a>
							</li>
						</ul>
					</li>
					<li id="#Administración" class="active">
						<a href="#Administración">Administración</a>
						<ul>
							<li>
								<a href="importar.php">Importación</a>
							</li>
							<li>
								<a href="exportar.php">Exportacíon</a>
							</li>
							<li>
								<a href="usuarios.php">Usuarios</a>
							</li>
						</ul>
					</li>
				</ul>
			</div><!-- ###### </barra navegación> ###### -->
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col3">
		  <div id="breadcrumb"><!-- ###### <Ud está aquí> ###### -->
		  </div><!-- ###### </Ud está aquí> ###### -->
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col4">
			<div id="container"><!-- ###### <contenido> ###### -->
				<div id="content">
		      	<h2>Importación de Archivo DBF</h2>
			      <div id="respond">
						<form action="" method="post" enctype="multipart/form-data">
							<p>
								<div id="content">
									<input name="userfile" type="file" id="file"/>
									<select name="timport" id="timport">
										<option value="p">Padrón Mensual</option>
						            <option value="h">Histórico</option>
					            </select>
								</div>
								<label for="userfile">
									<small>Seleccione un archivo</small>
								</label>
							</p>
							<p>
								<input name="submit" type="submit" id="submit" value="Subir Archivo" />
							&nbsp;
								<input name="reset" type="reset" id="reset" tabindex="5" value="Reiniciar Formulario" />
							</p>
							<input type="hidden" name="upf">
						</form>
			      </div>
	   		</div>
   		</div><!-- ###### </contenido> ###### -->
		      <br>
			<div class="clear">
			<?php  
				$datos = array('10', '12');
				
				if(verificarArchivo()){ 
						$zip_arch = subirArchivo();
						$path_dbfs = 'uploads/dbfs/';
						if(descomprimirArch($zip_arch, $path_dbfs)){
							if(!$dbf_arch = buscarPrimerDBF($path_dbfs)){
								echo "No se puede encontrar en archivo .dbf en $zip_arch";
								exit;
							}
						$dbf_filas = contFilasDBF($dbf_arch);
						//$dbf_filas = '20';
						$arch = $path_dbfs.$dbf_arch;
						$timport = $_POST['timport'];
						mostrarDBF($arch, $timport);
			?>
						<div id="container">
							<div id="content">
								<h2>Importación de Agentes</h2>
								<div id="respond">
									<p>
									<div id="botImpAgentes">
										<input name="submit" type="submit" 
										id="botImpAgentes" value="Importar"
										onclick="importarpadron()" />
									&nbsp;
									</div>
									<table>
										<tr>
											<th align="center">Archivo</th>
											<th align="center">Filas</th>
											<th align="center">Tipo</th>
											<th align="center">Importación</th>
										</tr>
										<tr>
											<td><div id="dbf_arch" align="center"><?php echo "$dbf_arch"; ?></div></td>
											<td><div id="dbf_filas" align="center"><?php echo "$dbf_filas"; ?></div></td>
											<td><div id="idtimport" align="center"><?php echo "$timport"; ?></div></td>
											<td>
												<?php  
												/*<®> Cargo el array de tablas con sus nombres que se mostraran al final <®>*/
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
												?>
												<div id="importacion">	
													<table>
														<tbody>
															<tr>
																<th align="center">Estado</th>
																<th align="center">Fila</th>
																<?php foreach ($arr_mostrar as $tbl => $nombre) { ?>
																	<th align="center"><?php echo ucfirst($nombre); ?></th>
																<?php } ?>
															</tr>
														<tr>
															<td align="center">
																<div id="imp_estado">Iniciar</div>
															</td>
															<!-- <td align="center"><div id="ult_fila">0</div></td> -->
															<td align="center"><div id="ult_fila">0</div></td>
															<?php foreach ($arr_mostrar as $tbl => $nombre) { ?>
																<td>
																	<div align="center"><?php echo contarRegs($tbl); ?></div>
																</td>
															<?php } ?>
														</tr>
													</tbody>
												</table>
												</div>
												<!-- Progress bar -->
												<div id="progress_bar" class="ui-progress-bar ui-container">
													<html>
														<head>
															<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
															<link rel="stylesheet" href="styles/ui.css">
															<link rel="stylesheet" href="styles/ui.progress-bar.css">
															<link media="only screen and (max-device-width: 480px)" href="styles/ios.css" type="text/css" rel="stylesheet" />
															<script src="scripts/jquery.js" type="text/javascript" charset="utf-8"></script>
															<script src="scripts/progress.js" type="text/javascript" charset="utf-8"></script>
														</head>
														<body>
															<div class="ui-progress" style="width: 0%;">
																<span class="ui-label" style="display:none;">Importando <b class="value">0%</b></span>
															</div>
														</body>
													</html>
												</div>
											</td>
										</tr>
									</table>	
									<div id="val">0</div>
									<div id="botPru">
										<input name="submit" type="submit" 
										id="botImpAgentes" value="Pru"
										onclick="bprogreso()" />
									&nbsp;
									</div>

									</p>
		 							<?php  
										//$archivo = 'uploads/EDUC_PADSEP13.dbf';
										//mostrarDBF($archivo, '0', '10');
									?> 
								<br>
								<br>
								</div>
							</div>
						</div>
			<?php }} ?>
			<div class="clear">
		  </div>
		</div>
		<!-- ####################################################################################################### -->
		<?php 
         unset($_POST['upf']); 
         //Esta bandera la deseteo para que no resubir el mismo archivo.
         //unlink($_SESSION['path_temp'].$_FILES['userfile']['name']);
         //} 
      ?>
	</body>
</html>

<?php  
/*<®> fx verificarArchivo <®>*/
	/**
	 * Función que verifica si se eligió un archivo correctamente.
	 */
function verificarArchivo(){
   //var_dump($_FILES, $_POST);
   //exit;
   
   if(!isset($_POST['upf'])) return false;
   
   //var_dump($_FILES['userfile']);

   if($_FILES['userfile']['error'] > 0){
   	echo 'Error en archivo seleccionado !!!';
      return false;
   }
	$ext = strtolower(substr($_FILES['userfile']['name'],-4));
	$permitidos = array('.zip');
	if(!in_array($ext, $permitidos)){
		echo 'La extensión del archivo no corresponde, <br> 
				Recuerde que el DBF debe estar comprimido en un archivo .ZIP !!!'; 
		return false;
	}
   return true;
}
/*<®> fx subirArchivo <®>*/
	/**
	 * Función que sube un archivo seleccionado.
	 */
	function subirArchivo(){
	   /**
	    * Datos del Archivo.
	    */
	      $arch_nombre  = $_FILES['userfile']['name']; 
	      $arch_tipo    = $_FILES['userfile']['type']; 
	      $arch_tamanio = $_FILES['userfile']['size'];
	   /**
	    * Destino
	    */
			$path_dest = 'uploads/';
			$destino   = $path_dest.$arch_nombre;
	   /**
	    * Subo el archivo.
	    */
	      if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $destino)){
	         echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
	         return false;
	   	}
	   	return $arch_nombre; 
	}
?>