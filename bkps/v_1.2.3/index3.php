<?php include_once '_inc/fxs.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr"><head profile="http://gmpg.org/xfn/11">
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
					<input type="button" value="Salir" class="loginbutton" data-type="zoomin">
					<div class="overlay-container" style="display: none;">
						<div class="msjlogin-container zoomin">
							<center>
								<div id="msjlogin">
									<h3>Bienvenido Ricardo MONLA</h3> 
									Ud. se ha logeado exitosamente en el sistema.<br>
									<br>
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
							<a id="slideit" href="#slidepanel" style="display: block;">rmonla</a>
							<a id="closeit" style="display: none;" href="#slidepanel">Cerrar Panel</a>
						</li>
					</ul>
				</div><br class="clear">
			</div><!-- ###### </barra superior> ###### -->
		</div><!-- ####################################################################################################### -->

		<div class="wrapper col1">
			<div id="header"><!-- ###### <cabezera> ###### -->
				<div id="logo">
					<h1>
						<a href="#">EduLiq</a>
					</h1>
					<p>
						Sistema Administrativo de Liquidaciones
					</p>
				</div>
				<div class="fl_right">
					<ul>
						<li class="last"><a href="#">Search</a></li>
						<li><a href="#">Online Support</a></li>
						<li><a href="#">School Board</a></li>
					</ul>
					<p>
						Tel: xxxxx xxxxxxxxxx | Mail: info@domain.com
					</p>
				</div><br class="clear">
			</div><!-- ###### </cabezera> ###### -->
		</div><!-- ####################################################################################################### -->
		<div class="wrapper col2">
			<div id="topnav"><!-- ###### <barra navegación> ###### -->
				<ul>
					<li id="MInicio" class="active">
						<a href="index.php">Inicio</a>
<!-- 						<ul>
							<li class="last">
								<a href="#">Cargar liquidaciones</a>
							</li>
						</ul>
 -->					</li>
					<li id="#Novedades" class="">
						<a href="#Novedades">Novedades</a>
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
						<a href="#Consultas">Consultas</a>
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
								<a href="importar.php">Importación</a>
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
					<li id="#Administración" class="">
						<a href="importar.php">Administración</a>
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
				</ul>
			</div><!-- ###### </barra navegación> ###### -->
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col3">
		  <div id="breadcrumb"><!-- ###### <Ud está aquí> ###### -->
		    <ul>
		      <li class="first">You Are Here</li>
		      <li>»</li>
		      <li><a href="#">Home</a></li>
		      <li>»</li>
		      <li><a href="#">Grand Parent</a></li>
		      <li>»</li>
		      <li><a href="#">Parent</a></li>
		      <li>»</li>
		      <li class="current"><a href="#">Child</a></li>
		    </ul>
		  </div><!-- ###### </Ud está aquí> ###### -->
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col4">
		  <div id="container" style="min-height:300px;">
				<div id="featured_slide">
			    <div id="featured_wrap" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
			      <ul id="featured_tabs" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
			        <li class="ui-corner-top ui-tabs-selected ui-state-active"><a href="#fc1">Gobierno del Pueblo de La Rioja<br>
			          <span></span></a></li>
			        <li class="ui-corner-top ui-state-default ui-state-hover"><a href="#fc2">Ministerio de Educación Ciencia y Tecnología<br>
			          <span></span></a></li>
			        <li class="ui-corner-top ui-state-default"><a href="#fc3">Junta Unica de Evaluación de Títulos y Antecedentes del Edu...<br>
			          <span></span></a></li>
			        <li class="last ui-corner-top ui-state-default"><a href="#fc4">Los Binarios<br>
			          <span></span></a></li>
			      </ul>
			      <div id="featured_content">
			        <div class="featured_box ui-tabs-panel ui-widget-content ui-corner-bottom" id="fc1" style=""><img src="images/demo/1.gif" alt="">
			          <div class="floater"><a href="http://www.larioja.gov.ar">Ir a la página. »</a></div>
			        </div>
			        <div class="featured_box ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide" id="fc2" style=""><img src="images/demo/2.gif" alt="">
			          <div class="floater"><a href="http://www.educacionlarioja.gov.ar">Ir a la página. »</a></div>
			        </div>
			        <div class="featured_box ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide" id="fc3" style=""><img src="images/demo/3.gif" alt="">
			          <div class="floater"><a href="http://www.educacionlarioja.gov.ar">Ir a la página. »</a></div>
			        </div>
			        <div class="featured_box ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide" id="fc4" style=""><img src="images/demo/4.gif" alt="">
			          <div class="floater"><a href="pags/losbinarios.php">Ir a la página. »</a></div>
			        </div>
			      </div>
			    </div>
			  </div>		    
		  </div>
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col5">
		  <div id="footer">
		  </div>
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col6">
		  <div id="copyright">
		    <p class="fl_left">Copyright © 2013 - Todos los derechos reservados</p>
		    <p class="fl_right"><a href="pags/losbinarios.php" title="Los Binarios">Los Binarios</a></p>
		    <br class="clear">
		  </div>
		</div>

</body>
</html>