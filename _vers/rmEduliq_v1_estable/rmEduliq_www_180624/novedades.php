<?php  
	include_once 'main/fxs.php';

?>
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
					<div id="login_res" class="topbox">
						<?php include_once 'login.php'; ?>
					</div><br class="clear">
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
	document.getElementById("destino").innerHTML = div.getAttribute('destino');
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

<form id="form_busc">
<table>
	<tr>
		<th><!-- Buscador --></th>
		<th>Destino</th>
	</tr>
	<tr>
		<td><!-- Buscador -->
			<input 
				id="bt_buscador" 
				type="button" 
				value="buscar" 
				style="visibility:visible"
				onclick="verBuscador(1)">
			<input 
				id="txt_buscador" 
				type="text" 
				onkeyup="showResult(this.value)" 
				style="visibility:hidden">
		</td>
		<td><!-- Destino -->
			<div id="destino"></div>
			<input type="hidden" id="ida_p_c_ea">
		</td>
	</tr>
	<tr><td colspan="2"><div id="livesearch"></div></td></tr>
</table>
</form>

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
		    <p class="fl_right"><a href="pags/losbinarios.php" title="Binarios">Binarios</a></p>
		    <br class="clear">
		  </div>
		</div>

</body>
</html>