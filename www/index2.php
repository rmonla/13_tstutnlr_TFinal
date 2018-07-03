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
	    <style type="text/css">
<!--
.Estilo1 {font-size: 18px}
.Estilo2 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 18px;
	font-weight: bold;
	color: #591434;
}
.Estilo3 {
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #591434;
}
.Estilo4 {color: #FFFFFF}
.Estilo5 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 18px;
	color: #CF8551;
}
.Estilo6 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 24px;
	color: #CF8551;
	font-weight: bold;
}
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

		<div class="wrapper col1" align="center">
		  <div id="header"><!-- ###### <cabezera> ###### -->
			  <div id="logo"><img src="images/logo_edul2.jpg" width="246" height="98"/></div>
				<div align="center"><br class="clear">
		        </div>
		  </div>
		  <!-- ###### </cabezera> ###### -->
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
		  <div class="col1" id="breadcrumb"><!-- ###### <Ud está aquí> ###### -->
		  		<table width="80%" border="1" cellpadding="20" class="col2">
  					<tr>
    					<td width="72%" class="bold Estilo1"><div align="center" class="Estilo3">Bienvenido al Sistema Administrativo de Liquidaciones EduLiq </div></td>
					    <td width="28%"><div align="center" class="Estilo2">Links de Interes </div></td>
  					</tr>
  					<tr>
  					  <td height="350" align="center" valign="middle"><p align="center" class="Estilo6">¿Que es EduLiq?</p>
				      <p align="center" class="Estilo5">EduLiq, es un sistema de Gestión de Novedades y Consultas de Liquidaciones, desarrollado por el Grupo Binarios, para el Area de Liquidaciones del Ministerio de Educación, Ciencia y Tecnología del la Provincia de La Rioja.</p>
				      <p align="center" class="Estilo5">Con este Sistema, usted podra realizar consultas tales como Situaciones de Revistas, Consultas Historicas, Cargar Novedades como asi tambien generar todo tipo de Reporte de los Agentes pertenecientes a este Ministerio de Educacion, Ciencia y Tecnologia.-</p>
				      <p align="center" class="Estilo1">&nbsp; </p></td>
  					  <td valign="top">
					  	<P align=center><b><font color=#ff0000><a href="http://www.larioja.gov.ar/portal/"><img src="images/logo rioja_nvo24x4.jpg" width="90" height="90"></a></font></b></P>
						<P align=center><b><font color=#ff0000><a href="http://www.educacionlarioja.gov.ar"><img src="images/LOGO MISTERIO.jpg" width="90" height="90"></a></font></b></P>
						<P align=center><b><font color=#ff0000><a href="http://juetaeno.gov.ar/inicio1.asp"><img src="images/JUETAENO.jpg" width="90" height="90"></a></font></b></P>					  </td>
				  </tr>
  					
  					<tr>
    					<td height="64" colspan="2" align="center" valign="bottom" bgcolor="#591434" class="bold Estilo1"><p align="center" class="Estilo4"><font face="Arial, Helvetica, sans-serif" size="2"><strong>Copyright 2013. Grupo BINARIOS . Todos los Derechos Reservados</strong></font></p>   					    						</td>
   					</tr>
  					</table>
		  </div>
		  <!-- ###### </Ud está aquí> ###### -->
		  	
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col4">
			<div id="container"><!-- ###### <contenido> ###### -->
	</div>
			<!-- ###### </contenido> ###### -->
	<div class="wrapper col2">
	  <div id="div">
	    <!-- ###### <barra navegación> ###### -->
      </div>
	</div>
</body>
</html>
