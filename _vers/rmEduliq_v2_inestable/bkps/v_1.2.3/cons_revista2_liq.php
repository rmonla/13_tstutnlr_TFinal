<?php include_once '_inc/fxs.php';

	$mes='';
	$anio='';
	$docu='';	
	
	if(isset($_POST['dni']))
		$docu = $_POST['dni'];
	if(isset($_POST['mes']))
		$mes = $_POST['mes'];
	if(isset($_POST['anio']))
		$anio = $_POST['anio'];
	$periodo = $anio.$mes;
	if(isset($_POST['autoridad']))
		$aut = $_POST['autoridad'];
	if(isset($_POST['nomb_aut']))
		$nomb_aut = $_POST['nomb_aut'];
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
		<link rel="stylesheet" href="_css/layout.css" type="text/css">
		<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
		<script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.tabs.setup.js"></script>
		<script type="text/javascript" src="main/fxs.js"></script>
	    <style type="text/css">
<!--
.Estilo3 {color: #660000}
-->
        </style>
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
		<?php
			$situacion = situacionAgente($docu,$periodo);
		?>
		
		<div class="wrapper col4">
			<div id="container"><!-- ###### <contenido> ###### -->
				<div id="content">
		      	<h2 class="bold">Agente:<input type="text" name="nomb" size="50" value="<?php echo $situacion['agente']."///".$situacion['dni'];?>"></h2>
			      <div id="respond">
              			<form name="rev" method="post" action="rep_revista_liq.php"/>
              				<input type="hidden" name="autoridad" size="30" value="<?php echo $aut;?>" />
							<input type="hidden" name="nomb_aut" size="30" value="<?php echo $nomb_aut;?>" />
							<input type="hidden" name="periodo" size="30" value="<?php echo $periodo;?>" />
							<input type="hidden" name="dni" size="30" value="<?php echo $docu;?>" />
							
							
							<table width="80%">
								<tr>
									<td class="col1"><div align="center"><strong>Escuela</strong></div></td>
									<td class="col1"><div align="center"><strong>Antiguedad</strong></div></td>
									<td class="col1"><div align="center"><strong>Horas</strong></div></td>
									<td class="col1"><div align="center"><strong>Cargo</strong></div></td>
									<td class="col1"><div align="center"><strong>Dias</strong></div></td>
									<td class="col1"><div align="center"><strong>Area</strong></div></td>
									<td class="col1"><div align="center"><strong>Sit. Revista</strong></div></td>
								</tr>
								<?php
										for($i=0;$i<count($situacion['sit']);$i++)
											{?>
								<tr>
									<td nowrap="nowrap" class="col1">
								      <div align="center">
								        <input type="hidden" name="esc" size="30" value="<?php echo $situacion['sit'][$i]['escuela'];?>" />								      
							        <?php echo $situacion['sit'][$i]['escuela'];?></div></td>
									<td nowrap="nowrap"  class="col1">
								      <div align="center">
								        <input type="hidden" name="anti" size="10" value="<?php echo $situacion['sit'][$i]['anti'];?>">								      
							        <?php echo $situacion['sit'][$i]['anti'];?></div></td>
									<td nowrap="nowrap"  class="col1">
								      <div align="center">
								        <input type="hidden" name="hs" size="10" value="<?php echo $situacion['sit'][$i]['hora'];?>">								      
							        <?php echo $situacion['sit'][$i]['hora'];?></div></td>
									<td nowrap="nowrap" class="col1">
								      <div align="center">
								        <input type="hidden" name="carg" size="10" value="<?php echo $situacion['sit'][$i]['cargo'];?>">								      
							        <?php echo $situacion['sit'][$i]['cargo'];?></div></td>
									<td nowrap="nowrap" class="col1">
								      <div align="center">
								        <input type="hidden" name="dias" size="10" value="<?php echo $situacion['sit'][$i]['dias'];?>">								      
							        <?php echo $situacion['sit'][$i]['dias'];?></div></td>
									<td nowrap="nowrap" class="col1">
								      <div align="center">
								        <input type="hidden" name="area" size="30" value="<?php echo $situacion['sit'][$i]['area'];?>">								      
							        <?php echo $situacion['sit'][$i]['area'];?></div></td>
									<td nowrap="nowrap" class="col1">
								      <div align="center">
								        <input type="hidden" name="rev" size="30" value="<?php echo $situacion['sit'][$i]['plan'];?>">								      
							        <?php echo $situacion['sit'][$i]['plan'];?></div></td>
							  <tr>
										<td nowrap="nowrap" colspan="7">
									    <span class="col5 Estilo3"></span>										</td>
							  </tr>
									<?php
										}?>
								</tr>
							</table>
							<table>
								<tr>
									<td class="col1">
									  <div align="left">
									    <input name="" type="submit" class="bold" value="Imprimir" />
								        </div></td></tr>
							</table>
				 		</form>
   		</div><!-- ###### </contenido> ###### -->
		      
						
			<div class="clear">
		  </div>
		</div>
		<!-- ####################################################################################################### -->
	</body>
</html>

