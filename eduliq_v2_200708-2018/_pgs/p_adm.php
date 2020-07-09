<?php  
	include_once '../_main/fxs.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr"><head profile="http://gmpg.org/xfn/11">
		<title>
			EduLiq
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="imagetoolbar" content="no">
		<link   type="text/css"       href="../_css/layout.css" rel="stylesheet">
		<script type="text/javascript" src="../_jss/jquery-1.4.1.min.js"></script>
		<script type="text/javascript" src="../_jss/jquery.slidepanel.setup.js"></script>
		<script type="text/javascript" src="../_jss/jquery-ui-1.7.2.custom.min.js"></script>
		<script type="text/javascript" src="../_jss/jquery.tabs.setup.js"></script>
		<script type="text/javascript" src="../_jss/fxs.js"></script>
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
					<li id="MInicio" class="active">
						<a href="index_adm.php">Inicio</a>
<!-- 						<ul>
							<li class="last">
								<a href="#">Cargar liquidaciones</a>
							</li>
						</ul>
 -->					</li>
					<li id="#Novedades" class="">
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
								<a href="exportar.php">Importación</a>
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
			        <li class="last ui-corner-top ui-state-default"><a href="#fc4">¿Que es EduLiq?<br>
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
			          <div class="floater"><a href="http://juetaeno.gov.ar/inicio1.asp">Ir a la página. »</a></div>
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
		    <p class="fl_left">Copyright © 2013 - Grupos Binarios - Todos los derechos reservados</p>
		   		    <br class="clear">
		  </div>
		</div>

</body>
</html>