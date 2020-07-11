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
.Estilo11 {font-size: 14px}
.Estilo12 {font-family: Georgia, "Times New Roman", Times, serif; color: #591434; font-size: 14px; }
.Estilo13 {font-family: Georgia, "Times New Roman", Times, serif; color: #591434; font-weight: bold; }
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
			  <div id="logo">
					<h1 align="left"><a href="#">EduLiq</a> </h1>
					<p align="left"> Sistema de Gestión de Novedades y</p>
					<p align="left">Consulta de Liquidaciones</p>
					</div>
					<div class="fl_right">
					</div><br class="clear">
		  </div>
		  <!-- ###### </cabezera> ###### -->
		</div><!-- ####################################################################################################### -->
<div class="wrapper col2">
			<div id="topnav"><!-- ###### <barra navegación> ###### -->
				<ul>
					<li id="MInicio" class="">
						<a href="./">Inicio</a>
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
								<a href="importar.php">Importación</a>
							</li>
							<li>
								<a href="exportar.php">Exportacíon</a>
							</li>
							<li>
								<a href="usuarios.php">Usuarios</a>
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
								<a href="importar.php">Importación</a>
							</li>
							<li>
								<a href="exportar.php">Exportacíon</a>
							</li>
							<li>
								<a href="usuarios.php">Usuarios</a>
							</li>
							<li class="last">
								<a href="#">Perfiles</a>
							</li>
						</ul>
					</li>
					
					<li id="#Administración" class="active">
						<a href="importar.php">Administración</a>
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
					</li>
				</ul>
			</div><!-- ###### </barra navegación> ###### -->
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col3">
		  <div class="col1" id="breadcrumb"><!-- ###### <Ud está aquí> ###### -->
		  		<table width="80%" border="1" cellpadding="20" class="col2">
  					<tr>
   					  <td height="30" colspan="2" class="bold Estilo1"><div align="center" class="Estilo3">Alta de Usuarios </div></td>
					    <td width="30%"><div align="center" class="Estilo2"></div></td>
  					</tr>
  					<form name="alta" action="alta_usr2.php" method="post">
					<tr>
  					  <td align="center" valign="middle" class="Estilo3 Estilo11">
					  	<div align="right" class="Estilo3"><strong>PERFIL:</strong></div>					  </td>
  					  <td align="center" valign="middle" class="Estilo3">
					  	<div align="left" class="Estilo12">
					  	  
				  	      <div align="left">
				  	       <select name="perfil">
								<option value="0">Elija un Perfil</option>
								 <?php
									$sql = "select * from perfiles";
									$rs = ejecutar($sql);
									while($prs = mysql_fetch_array($rs))
										{
											$idper = $prs['id'];
											$pdesc = $prs['desc'];
											?>
								<option value="<?php echo $idper;?>"><?php echo $pdesc;?></option>
									<?php }?>
						  </select>
			  	          </div>
				  	  </div></td>
  					  <td align="center" valign="middle" class="Estilo12"></td>
				  </tr>
  					<tr>
  					  <td align="center" valign="middle">
					  	<div align="right" class="Estilo13">USUARIO:</div>				  	  </td>
  					  <td align="center" valign="middle" class="Estilo3">
					  	
				  	    <div align="left">
				  	      <input name="usr" type="text" class="Estilo3" size="60"/>
		  	            </div></td>
  					  <td valign="top"></td>
				  </tr>
  					<tr>
  					  <td align="center" valign="middle">
					  	<div align="right" class="Estilo13">CONTRASEÑA:</div>					  </td>
  					  <td align="center" valign="middle" class="Estilo3">
					  <div align="left">
					  	<input name="pass" type="password" class="Estilo3" size="60"/>
					  </div></td>
  					  <td valign="top"></td>
				  </tr>
  					<tr>
  					  <td align="center" valign="middle">
					  	<div align="right" class="Estilo13">NOMBRE:</div>					  </td>
  					  <td align="center" valign="middle" class="Estilo3">
					  <div align="left">
					  	<input name="nomb" type="text" class="Estilo3" size="60"/>
					  </div></td>
  					  <td valign="top"></td>
				  </tr>
  					<tr>
  					  <td align="center" valign="middle">
					  	<div align="right" class="Estilo13">APELLLIDO:</div>					  </td>
  					  <td align="center" valign="middle" class="Estilo3">
					  <div align="left">
					  	<input name="ape" type="text" class="Estilo3" size="60"/>
					  </div></td>
  					  <td valign="top"></td>
				  </tr>
  					<tr>
  					  <td align="center" valign="middle">
					  	<div align="right" class="Estilo13">DNI:</div>					  </td>
  					  <td align="center" valign="middle" class="Estilo3">
					  <div align="left">
					  	<input name="dni" type="text" class="Estilo3" size="60"/>
					  </div></td>
  					  <td valign="top"></td>
				  </tr>
					<tr>
  					  <td align="center" valign="middle">
					  	<div align="right" class="Estilo13">DIRECCION:</div>					  </td>
  					  <td align="center" valign="middle" class="Estilo3">
					  <div align="left">
					  	<input name="dire" type="text" class="Estilo3" size="60"/>
					  </div></td>
  					  <td valign="top"></td>
				  </tr>
				  
  					<tr>
  					  <td align="center" valign="middle">
					  	<div align="right" class="Estilo13">TELEFONO:</div>					  </td>
  					  <td align="center" valign="middle" class="Estilo3">
					  <div align="left">
					  	<input name="tel" type="text" class="Estilo3" size="60"/>
					  </div></td>
  					  <td valign="top"></td>
				  </tr>
  					<tr>
  					  <td align="center" valign="middle">
					  	<div align="right" class="Estilo13">E-MAIL:</div>					  </td>
  					  <td align="center" valign="middle" class="Estilo3">
					  <div align="left">
					  	<input name="mail" type="text" class="Estilo3" size="60"/>
					  </div></td>
  					  <td valign="top"></td>
				  </tr>
  					<tr>
  					  <td align="center" valign="middle">
					  	<div align="right" class="Estilo13">ESTADO:</div>					  </td>
  					  <td align="center" valign="middle" class="Estilo3">
					  <div align="left">
					  	<select name="estado">
								<option value="0">Elija un Estado</option>
								 <?php
									$sql = "select * from usr_estados";
									$rs = ejecutar($sql);
									while($ers = mysql_fetch_array($rs))
										{
											$idest = $ers['id'];
											$estdesc = $ers['desc'];
											?>
								<option value="<?php echo $idest;?>"><?php echo $estdesc;?></option>
									<?php }?>
						  </select>
					  </div></td>
				  </tr>
  					<tr>
  					  <td width="27%" align="center" valign="middle" class="Estilo3">					  </td>
					  <td valign="top"> 
					    <div align="right">
					      <input name="enviar" type="submit" class="Estilo3" value="REGISTRAR" />
			            </div></td>
				  	</tr>
				</form>
  					
  					<tr>
    					<td height="30" colspan="3" align="center" valign="bottom" bgcolor="#591434" class="bold Estilo1"><p align="center" class="Estilo4"><font face="Arial, Helvetica, sans-serif" size="2"><strong>Copyright 2013. Grupo BINARIOS . Todos los Derechos Reservados</strong></font></p>   					    						</td>
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
