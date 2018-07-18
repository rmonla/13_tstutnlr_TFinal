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
.Estilo7 {font-size: xx-small}
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
  <div id="container">
    <div id="content">
      <table width="145%" height="161" cellspacing="1" summary="Summary Here">
        <thead>
          <tr>
            <th colspan="11"><span class="Estilo3">Usuarios</span></th>
            <th width="13%"><form action="alta_usr.php" method="post" name="usuario" class="Estilo3"/>
              <span class="Estilo3">
              <input name="alta" type="submit" class="col1" value="Alta Usuario"/>
              </span></th>
          </tr>
        </thead>
        <tbody>
          <tr class="light">
            <td width="7%" height="24" class="bold"><div align="center" class="Estilo4">PERFIL </div></td>
            <td width="9%" class="bold"><div align="center" class="Estilo4">USUARIO </div></td>
            <td width="7%" class="bold"><div align="center" class="Estilo4">NOMBRE</div></td>
            <td width="9%" class="bold"><div align="center" class="Estilo4">APELLIDO </div></td>
			<td width="4%" class="bold"><div align="center" class="Estilo4">DNI</div></td>
            <td width="10%" class="bold"><div align="center" class="Estilo4">DIRECCION </div></td>
            <td width="9%" class="bold"><div align="center" class="Estilo4">TELEFONO </div></td>
            <td width="7%" nowrap="nowrap" class="bold"><div align="center" class="Estilo4">E-MAIL</div></td>
            <td class="bold"><div align="center" class="Estilo4">ESTADO</div></td>
            <td colspan="2" class="bold"><div align="center" class="Estilo4">MODIFICAR</div></td>
            <td colspan="2" class="bold"><div align="center" class="Estilo4">ELIMINAR</div></td>
          </tr>
          <?php
				/*$sql = "SELECT perfiles.desc AS perfil, usr_estados.estado, usuarios.id, usuarios.idperfil, usuarios.idusr_estado, usuarios.usr, usuarios.pass, 	
						usuarios.docu,usuarios.nomb, usuarios.ape, usuarios.dir, usuarios.tel, usuarios.email 
						FROM usr_estados 
						INNER JOIN (perfiles INNER JOIN usuarios ON perfiles.id = usuarios.idperfil) ON usr_estados.id = usuarios.idusr_estado";*/
						$sql = "Select p.desc as perfil, st.desc as estado, usrs.id, usrs.usr, usrs.idperfil, usrs.idusr_estado, 
						usrs.pass, usrs.docu, usrs.nomb, usrs.ape, usrs.dir, usrs.tel, usrs.email
						from usuarios usrs 
						inner join perfiles p on p.id = usrs.idperfil
						inner join usr_estados st on st.id = usrs.idusr_estado";
				$rs = ejecutar($sql);
				$numregs = mysql_num_rows($rs);
				for($i=0;$i<$numregs;$i++)
					{
						$reg = mysql_fetch_array($rs);
				?>
          <tr class="light">
            <td width="7%" height="50"><span class="Estilo3"><?php echo $reg['perfil'];?></span></td>
            <td width="9%"><span class="Estilo3"><?php echo $reg['usr'];?></span></td>
            <td width="7%"><span class="Estilo3"><?php echo $reg['nomb'];?></span></td>
            <td width="9%"><span class="Estilo3"><?php echo $reg['ape'];?></span></td>
			<td width="4%"><span class="Estilo3"><?php echo $reg['docu'];?></span></td>
            <td width="10%" nowrap="nowrap"><span class="Estilo3"><?php echo $reg['dir'];?></span></td>
            <td nowrap="nowrap"><span class="Estilo3"><?php echo $reg['tel'];?></span></td>
            <td width="7%"><span class="Estilo3"><?php echo $reg['email'];?></span></td>
            <td width="7%"><span class="Estilo3"><?php echo $reg['estado'];?></span></td>
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
