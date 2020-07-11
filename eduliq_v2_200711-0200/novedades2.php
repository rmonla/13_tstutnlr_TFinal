<?php  
	include_once 'main/fxs.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
	<head profile="http://gmpg.org/xfn/11">
<script>
function verBuscador(visible) {
	switch (visible) {
		case 0:
			document.getElementById("bt_buscador")
				.style.visibility = "visible";			
			document.getElementById("txt_buscador")
				.style.visibility = "hidden";
				//showResult();			
			break;
		case 1:
			document.getElementById("bt_buscador")
				.style.visibility = "hidden";			
			document.getElementById("txt_buscador")
				.style.visibility = "visible";			
			break;
	}

	document.getElementById("livesearch").style.border
}
function cargarDestino (div) {
	document.getElementById("docu").innerHTML = div.getAttribute('docu');
	document.getElementById("nom").innerHTML = div.getAttribute('nom');
	document.getElementById("sexo").innerHTML = div.getAttribute('sexo');
	document.getElementById("trab").innerHTML = div.getAttribute('trab');
	document.getElementById("escuela").innerHTML = div.getAttribute('escuela');
	document.getElementById("area").innerHTML = div.getAttribute('area');
	document.getElementById("ida_p_c_ea").value = div.getAttribute('ida_p_c_ea')
	document.getElementById("livesearch").innerHTML = "";
	document.getElementById("livesearch").style.border = "0px";
	verBuscador(0);
}

function showResult(str) {
	if (str.length == 0) {
		document.getElementById("livesearch").innerHTML = "";
		document.getElementById("livesearch").style.border = "0px";
		return;
	}
	var estado = "tipeando";
	if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("livesearch").innerHTML = xmlhttp.responseText;
			document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
		}
	}
	xmlhttp.open("GET", "novedades_buscador.php?q=" + str, true);
	xmlhttp.send();
}
</script>
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
.Estilo3 {font-size: 10; }
.Estilo4 {font-size: 10px; }
.Estilo6 {font-size: 10; color: #FFFFFF; }
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
				<div id="logo"><img src="images/logo_edul2.jpg" width="246" height="98"/>
				</div>
				<div class="fl_right">
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
					<li id="Novedades" class="active">
						<a href="#Novedades">Novedades</a>
						<ul>
							<li>
								<a href="#">Consultas</a>
							</li>
							<li>
								<a href="#">Reportes</a>
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
					<li id="#Administración" class="">
						<a href="importar.php">Administración</a>
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
      <table width="80%" cellspacing="1">
        <tr class="col5">
          <th height="20" bgcolor="#333333" class="col5"><div align="left"><span class="Estilo6">BUSCADOR DE AGENTES</span></div></th>
        </tr>
        <tr>
          <td><!-- Buscador -->
              <input name="button" 
				type="button" 
				id="bt_buscador" 
				style="visibility:visible"
				onclick="verBuscador(1)" 
				value="BUSCAR" />
              <input name="text" 
				type="text" 
				id="txt_buscador" 
				style="visibility:hidden" 
				onkeyup="showResult(this.value)" 
				size="10" />
          </td>
        </tr>
        <tr>
          <td height="28" colspan="2"><div id="livesearch"></div></td>
        </tr>
      </table>
      <br>
<br>
<br>

  <table width="100%">
		<tr>
			<td class="col5"><div align="center"><strong>DOCU</strong></div></td>
			<td class="col5"><div align="center"><strong>NOMBRE</strong></div></td>
			<td class="col5"><div align="center"><strong>SEXO</strong></div></td>
			<td class="col5"><div align="center"><strong>TRAB</strong></div></td>
			<td class="col5"><div align="center"><strong>ESCUELA</strong></div></td>
			<td class="col5"><div align="center"><strong>AREA</strong></div></td>
			<td class="col5"><div align="center"><strong>CONCEPTO</strong></div></td>
			<td class="col5"><div align="center"><strong>TIPO</strong></div></td>
			<td class="col5"><div align="center"><strong>MONTO</strong></div></td>
			<td class="col5"><div align="center"><strong>CODIGO</strong></div></td>
		</tr>
		<tr>
		<td><div id="docu" align="center"></div></td>
		<td><div id="nom" align="center"></div></td>
		<td><div id="sexo" align="center"></div></td>
		<td><div id="trab" align="center"></div></td>
		<td><div id="escuela" align="center"></div></td>
		<td><div id="area" align="center"></div></td>
		<td><div align="center">
		  <select name="conc">
		  	<?php
				$q_c = "select * from conceptos";
				$rc = ejecutar($q_c);?>
				<option value="0" selected>Elija una Opción</option>
				<?php while($conc = mysql_fetch_array($rc))
					{?>
						<option value="<?php echo $conc['id'];?>"><?php echo $conc['concepto'];?></option>
				<?php }
			?>
		  </select>
		  </div></td>
		<td ><div align="center">
		  <select name="tipo">
		  	<?php
				$q_tp = "select * from tiposnov";
				$rtp = ejecutar($q_tp);?>
				<option value="0" selected>Elija una Opción</option>
				<?php while($tp = mysql_fetch_array($rtp))
					{?>
						<option value="<?php echo $tp['id'];?>"><?php echo $tp['tiponov'];?></option>
				<?php }
			?>
		  </select>
		  </div></td>
		<td nowrap="nowrap"><div align="center">
		  <input style="text-align:right" name="int" type="text" size="6" maxlength="6"> 
		  . 
		  <input style="text-align:right" align="right" maxlength="2" type="text" size="2" name="dec">
		  </div></td>
		
		<td><div align="center">
		  <select name="cod">
		  	<?php
				$q_c = "select * from codigos";
				$rc = ejecutar($q_c);?>
				<option value="0" selected>Elija una Opción</option>
				<?php while($cod = mysql_fetch_array($rc))
					{?>
						<option value="<?php echo $cod['id'];?>"><?php echo $cod['codigo'];?></option>
				<?php }
			?>
		  </select>
		  </div></td>
	<tr>
	<tr>
		<th width="123">OBSERVACION:</th>
		<td colspan='10' class="bold"><div align="center" class="Estilo4">
		  <div align="left">
		    <input type="text" size="150" name="obs">
		    </div>
		</div></td>
	</tr>
	<tr>
		<td colspan="10"><div align="center">
		  <input name="Enviar" type="submit" value="REGISTRAR NOVEDAD"/>
		  </div></td>
	</tr>
</table>
<br>	
	  <table width="169%" height="97" cellspacing="1" summary="Summary Here">
        <thead>
          <tr>
            <th height="26" colspan="12"><span class="Estilo3">NOVEDADES CARGADAS </span></th>
            
          </tr>
        </thead>
        <tbody>
          <tr class="light">
            <td width="7%" height="24" class="bold"><div align="center" class="Estilo4">CONCEPTO </div></td>
            <td width="9%" class="bold"><div align="center" class="Estilo4">TIPO</div></td>
            <td width="12%" class="bold"><div align="center" class="Estilo4">DOCUMENTO</div></td>
            <td width="8%" class="bold"><div align="center" class="Estilo4">SEXO</div></td>
            <td width="9%" class="bold"><div align="center" class="Estilo4">TRAB </div></td>
            <td width="9%" class="bold"><div align="center" class="Estilo4">NOMBRE</div></td>
            <td width="10%" class="bold"><div align="center" class="Estilo4">MONTO </div></td>
            <td width="10%" class="bold"><div align="center" class="Estilo4">CODIGO </div></td>
            <td width="7%" nowrap="nowrap" class="bold"><div align="center" class="Estilo4">PERIODO</div></td>
            <td class="bold"><div align="center" class="Estilo4">AREA</div></td>
            <td class="bold"><div align="center" class="Estilo4">ESCU</div></td>
            <td class="bold"><div align="center" class="Estilo4">ESTADO</div></td>
          </tr>
          <?php
				/* <th width="16%"><form action="alta_usr.php" method="post" name="usuario" class="Estilo3"/>
              <span class="Estilo3">
                <input name="alta" type="submit" class="col1" value="Alta Usuario"/>
              </span></th>
					$sql = "SELECT perfiles.desc AS perfil, usr_estados.estado, usuarios.id, usuarios.idperfil, usuarios.idusr_estado, usuarios.usr, usuarios.pass, 	
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
            <td width="7%" height="24"></td>
            <td width="9%"><span class="Estilo3"></td>
            <td width="12%"><span class="Estilo3"></td>
            <td width="8%"><span class="Estilo3"></td>
            <td width="9%"><span class="Estilo3"></td>
            <td width="9%"><span class="Estilo3"></td>
            <td width="10%" nowrap="nowrap"><span class="Estilo3"></span></td>
            <td width="10%"><span class="Estilo3"></span></td>
            <td width="7%"><span class="Estilo3"></span></td>
            <td width="7%"><span class="Estilo3"></span></td>
            <td width="7%"><span class="Estilo3"></span></td>
            <td width="7%"><span class="Estilo3"></span></td>
          </tr>
          <?php
		  	}?>
          <tr class="dark">
            <th height="2" colspan="14">&nbsp;</th>
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
