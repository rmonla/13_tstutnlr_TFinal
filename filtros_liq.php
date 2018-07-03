<?php  
	include_once 'main/fxs.php';
	
	if(isset($_POST['filtro']))
		$filtro = $_POST['filtro'];
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
						<a href="index_liq.php">Inicio</a>
<!-- 						<ul>
							<li class="last">
								<a href="#">Cargar liquidaciones</a>
							</li>
						</ul>
 -->					</li>
					<li id="Novedades" class="">
						<a href="novedades_liq.php">Novedades</a>
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
					<li id="#Consultas"  class="active">
						<a href="consulta_liq.php">Consultas</a>
						<ul>
							<li>
								<a href="cons_revista_liq.php">Situación de Revista</a>
							</li>
							<li>
								<a href="cons_hist_liq.php">Histórico</a>
							</li>
							<li>
								<a href="cons_filtro_liq.php">Consulta por Filtro</a>
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
		      	<h2>CONSULTA POR </h2>
				<?php
				
					switch ($filtro) 
						{
    						case 0:
        							echo "DEBE ELEGIR UNA OPCION";
        							header('Location:cons_filtro.php');
									break;
    						case 1:
        							/*$q_esc = "select * from escus";
									$resc = ejecutar($q_esc);
									while($re = mysql_fetch_array($resc))
										{
											$escuela = $re['escu'];*/
											$escuela ='';
											$zona='';
											$enomb='';
											$q_e = "SELECT e.id as id, e.escu as escu, e.desc as enomb, ar.desc as anomb, z.desc as znomb FROM `escus` e
													inner join escu_areas ea on e.id = ea.idescu
													inner join areas ar on ar.id = ea.idarea
													inner join zonas z on z.id = e.idzona order by e.escu asc";
													$re = ejecutar($q_e);?>
													<table>
													<tr>
																		<th nowrap class="col1"><div align="center"><strong>Nº Escuela</strong></div></th>
																		<th class="col1"><div align="center"><strong>Escuela</strong></div></th>
																		<th class="col1"><div align="center"><strong>Zona</strong></div></th>
																		<th class="col1"><div align="center"><strong>Area</strong></div></th>
													  </tr>

													<div align="center">
													  <?php while($sre = mysql_fetch_array($re))
														{?>
													  </div>
													<tr>
														<td nowrap="nowrap" class="col1"><div align="center">
													        <?php 
																		if($sre['escu'] != $escuela)
																			{
																				echo $sre['escu'];
																				$escuela = $sre['escu'];																
																				}?>
											                  </div></td>
															<td nowrap="nowrap" class="col1"><div align="center">
															<?php 
																if($sre['enomb'] != $enomb)
																	{
																		echo utf8_encode($sre['enomb']);
																		$enomb = $sre['enomb'];
																		}?>
															</div></td>
															
															<td nowrap="nowrap" class="col1"><div align="center">
															<?php 
																if($sre['znomb'] != $zona)
																	{
																		echo  utf8_encode($sre['znomb']);
																		$zona =  utf8_encode($sre['znomb']);
																		}?></div></td>
															<td nowrap="nowrap" class="col1"><div align="center"><?php echo  utf8_encode($sre['anomb']);?></div></td>
																	</tr>
																	
													<div align="center">
													  <?php }?>
													  
													  </div>
													</table>
													<?php 
									break;
    						case 2:
        							$q_a = "select * from areas";
									$ra = ejecutar($q_a);?>
									<table width="80%">
										<tr>
											<td class="col1"><div align="center"><strong>Areas</strong></div></td>
											<td class="col1"><div align="center"><strong>Decripcion de Areas</strong></div></td>
										</tr>
										<?php
											while($ar = mysql_fetch_array($ra)){?>
												<tr>
													<td class="col1"><div align="center"><?php echo $ar['area'];?></div></td>
													<td class="col1"><div align="center"><?php echo $ar['desc'];?></div></td>
												<tr>
												<?php }
									break;
							case 3:
        							$q_z = "select * from zonas order by zona";
									$rz = ejecutar($q_z);?>
									<table width="80%">
										<tr>
											<td class="col1"><div align="center"><strong>Zonas</strong></div></td>
											<td class="col1"><div align="center"><strong>Decripcion de Zona</strong></div></td>
										</tr>
										<?php
											while($zona = mysql_fetch_array($rz)){?>
												<tr>
													<td class="col1"><div align="center"><?php echo $zona['zona'];?></div></td>
													<td class="col1"><div align="center"><?php echo $zona['desc'];?></div></td>
												<tr>
												<?php }
									break;
							case 4:
        							$q_cgo = "select * from cargos where idagru='1' order by cargo";
									$rcgo = ejecutar($q_cgo);?>
									<table width="80%">
										<tr>
													<td colspan='2' class="col1"><div align="center"><strong>NOMENCLADOR DOCENTE</strong></div></td>
										</tr>
										<tr>
											<td class="col1"><div align="center"><strong>Cargos</strong></div></td>
											<td class="col1"><div align="center"><strong>Decripcion de Cargo</strong></div></td>
										</tr>
										<?php
											while($cgo = mysql_fetch_array($rcgo)){?>
												<tr>
													<td class="col1"><div align="center"><?php echo $cgo['cargo'];?></div></td>
													<td class="col1"><div align="center"><?php echo utf8_encode($cgo['desc']);?></div></td>
												<tr>
												<?php }
									break;
							case 5:
        							$q_p = "select * from planes order by plan";
									$rp = ejecutar($q_p);?>
									<table width="80%">
										<tr>
											<td class="col1"><div align="center"><strong>Planes</strong></div></td>
											<td class="col1"><div align="center"><strong>Decripcion de Plan</strong></div></td>
										</tr>
										<?php
											while($cp = mysql_fetch_array($rp)){?>
												<tr class="col2">
												  <td class="col1"><div align="center"><?php echo $cp['plan'];?></div></td>
													<td class="col1"><div align="center"><?php echo $cp['desc'];?></div></td>
									  <tr>
												<?php }
									break;
}				?>

							</table>

					        
						</form>
					</table>	
									
			<div class="clear">
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