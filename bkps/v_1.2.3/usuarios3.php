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
.Estilo3 {font-size: 10; }
.Estilo4 {font-size: 10px; }
-->
        </style>
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
							<a id="slideit" href="#slidepanel">rmonla</a>
							<a id="closeit" style="display: none;" href="#slidepanel">Cerrar Panel</a>
						</li>
					</ul>
				</div><br class="clear">
			</div><!-- ###### </barra superior> ###### -->
		</div><!-- ####################################################################################################### -->

		<div class="wrapper col1">
			<div id="header"><!-- ###### <cabezera> ###### -->
				<div id="logo"><img src="images/logo_edul2.jpg" width="246" height="98"/>
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
					<li id="MInicio" class="">
						<a href="index.php">Inicio</a>
<!-- 						<ul>
							<li class="last">
								<a href="#">Cargar liquidaciones</a>
							</li>
						</ul>
 -->					</li>
					<li id="Novedades" class="">
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
								<a href="#">Importación</a>
							</li>
							<li>
								<a href="#">Exportacíon</a>
							</li>
							<li>
								<a href="alta_usr.php">Usuarios</a>
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
		      <li>&#187;</li>
		      <li><a href="#">Home</a></li>
		      <li>&#187;</li>
		      <li><a href="#">Grand Parent</a></li>
		      <li>&#187;</li>
		      <li><a href="#">Parent</a></li>
		      <li>&#187;</li>
		      <li class="current"><a href="#">Child</a></li>
		    </ul>
		  </div><!-- ###### </Ud está aquí> ###### -->
		</div>
		<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    <div id="content">
      <table width="145%" height="161" cellspacing="1" summary="Summary Here">
        <thead>
          <tr>
            <th colspan="11"><span class="Estilo3">Usuarios</span></th>
            <th width="16%"><form action="alta_usr.php" method="post" name="usuario" class="Estilo3"/>
              <span class="Estilo3">
              <input name="alta" type="submit" class="col1" value="Alta Usuario"/>
              </span></th>
          </tr>
        </thead>
        <tbody>
          <tr class="light">
            <td width="7%" height="24" class="bold"><div align="center" class="Estilo4">PERFIL </div></td>
            <td width="9%" class="bold"><div align="center" class="Estilo4">USUARIO </div></td>
            <td width="12%" class="bold"><div align="center" class="Estilo4">CONTRASEÑA </div></td>
            <td width="8%" class="bold"><div align="center" class="Estilo4">NOMBRE</div></td>
            <td width="9%" class="bold"><div align="center" class="Estilo4">APELLIDO </div></td>
            <td width="10%" class="bold"><div align="center" class="Estilo4">DIRECCION </div></td>
            <td width="10%" class="bold"><div align="center" class="Estilo4">TELEFONO </div></td>
            <td width="7%" nowrap="nowrap" class="bold"><div align="center" class="Estilo4">E-MAIL</div></td>
            <td class="bold"><div align="center" class="Estilo4">ESTADO</div></td>
            <td colspan="2" class="bold"><div align="center" class="Estilo4">MODIFICAR</div></td>
            <td colspan="2" class="bold"><div align="center" class="Estilo4">ELIMINAR</div></td>
          </tr>
          <?php
				$sql = "select * from usuarios";
				$rs = ejecutar($sql);
				$numregs = mysql_num_rows($rs);
				for($i=0;$i<$numregs;$i++)
					{
						$reg = mysql_fetch_array($rs);
						$sql = "select * from perfiles where id='".$reg['idperfil']."'";
						$prs = ejecutar($sql);
						$pr = mysql_fetch_array($prs);
						$sql = "select * from usr_estados where id='".$reg['idusr_estado']."'";
						$ers = ejecutar($sql);
						$er = mysql_fetch_array($ers);
			?>
          <tr class="light">
            <td width="7%" height="50"><span class="Estilo3"><?php echo $pr['desc'];?></span></td>
            <td width="9%"><span class="Estilo3"><?php echo $reg['usr'];?></span></td>
            <td width="12%"><span class="Estilo3"><?php echo $reg['pass'];?></span></td>
            <td width="8%"><span class="Estilo3"><?php echo $reg['nomb'];?></span></td>
            <td width="9%"><span class="Estilo3"><?php echo $reg['ape'];?></span></td>
            <td width="10%" nowrap="nowrap"><span class="Estilo3"><?php echo $reg['dir'];?></span></td>
            <td width="10%"><span class="Estilo3"><?php echo $reg['tel'];?></span></td>
            <td width="7%"><span class="Estilo3"><?php echo $reg['email'];?></span></td>
            <td width="7%"><span class="Estilo3"><?php echo $er['estado'];?></span></td>
            <td colspan="2" class="bold"><div align="center" class="Estilo3"><a href="mod_usr.php?id=<?php echo $reg['id'];?>"><img src="images/agent_edit.jpg" width="30" height="40"/></a></div></td>
            
			<td colspan="2" class="bold"><div align="center" class="Estilo3"><a href="del_usr.php?id=<?php echo $reg['id'];?>"><img src="images/agent_del.jpg" width="30" height="40" /></a></div></td>
          </tr>
          <?php
		  	}?>
          <tr class="dark">
            <th height="16" colspan="14">&nbsp;</th>
          </tr>
        </tbody>
      </table>
      <h2>&nbsp;</h2>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5"></div>
<!-- ####################################################################################################### -->
<div class="wrapper col6"></div>
</body>
</html>
