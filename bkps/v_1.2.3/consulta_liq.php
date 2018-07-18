<?php include_once '_inc/fxs.php'; ?>

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
	</head>
	<body>

		<div class="wrapper co10">

			<div id="topbar"><!-- ###### <barra superior> ###### -->
				<div id="slidepanel">
				<div class="box1">
				<div class="topbox">
					<h2>Login del Sistema</h2>
					<form action="#" method="post">
						<fieldset>
							<legend>Formulario de Login</legend> 
							<label for="usr">Usuario: 
								<input type="text" name="usr" id="usr" value="">
							</label> 
							<label for="pass">Contraseña: 
								<input type="password" name="pass" id="pass" value="">
							</label> 
							<p>
								<input type="submit" name="login" id="login" value="Ingresar"> &nbsp; 
								<input type="reset" name="reset" id="reset" value="Reiniciar">
							</p>
						</fieldset>
					</form>
				</div>
					<br class="clear">
				</div>
		      <div class="topbox">
					<input type="button" value="Zoom In Modal Window" class="loginbutton" data-type="zoomin" />
					<div class="overlay-container">
						<div class="msjlogin-container zoomin">
							<center>
								<div id="msjlogin">
									<h3>Bienvenido Ricardo MONLA</h3> 
									Ud. se ha logeado exitosamente en el sistema.<br/>
									<br/>
								</div>
								<span class="loginclose" align="center">Cerrar</span>
							</center>
						</div>
					</div>
		      </div>
					
					<br class="clear">
				</div>
				<div id="loginpanel">
					<ul>
						<li class="left">Login »</li>
						<li class="right" id="toggle">
							<a id="slideit" href="#slidepanel">Abrir Panel</a>
							<a id="closeit" style="display: none;" href="#slidepanel">Cerrar Panel</a>
						</li>
					</ul>
				</div><br class="clear">
			</div><!-- ###### </barra superior> ###### -->
		</div><!-- ####################################################################################################### -->

		<div class="wrapper col1">
			<div id="header"><!-- ###### <cabezera> ###### -->
				<div id="logo">
					<h1 align="left">
						<a href="#">EduLiq</a>					</h1>
					<p align="left">
						Sistema de Gestión de Novedades y</p>
					<p align="left">Consulta de Liquidaciones </p>
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
		<!-- ###### </contenido> ###### -->
