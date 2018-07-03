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
					<li id="#Consultas"  class="active">
						<a href="consulta.php">Consultas</a>
						<ul>
							<li>
								<a href="cons_revista.php">Situación de Revista</a>
							</li>
							<li>
								<a href="cons_historico.php">Histórico</a>
							</li>
							<li>
								<a href="cons_filtro.php">Consulta por Filtro</a>
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
					<li id="#Administración">
						<a href="importar.php">Administración</a>
						<ul>
							<li>
								<a href="#">Importación</a>
							</li>
							<li>
								<a href="#">Exportacíon</a>
							</li>
							<li>
								<a href="usuarios.php">Usuarios</a>
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
			<div id="container"><!-- ###### <contenido> ###### -->
				<div id="content">
		      	<h2>HISTORICO</h2>
			      <div class="bold" id="respond">
              			INGRESE EL DNI DEL AGENTE:
           			    </form>
   		</div>
			      <!-- ###### </contenido> ###### -->
		      
									</table>	
									
			<div class="clear">
		  </div>
		</div>
		<!-- ####################################################################################################### -->
		<?php 
         unset($_POST['upf']); 
         //Esta bandera la deseteo para que no resubir el mismo archivo.
         //unlink($_SESSION['path_temp'].$_FILES['userfile']['name']);
         //} 
      ?>
	</body>
</html>

<?php  
/*<®> fx verificarArchivo <®>*/
	/**
	 * Función que verifica si se eligió un archivo correctamente.
	 */
function verificarArchivo(){
   //var_dump($_FILES, $_POST);
   //exit;
   
   if(!isset($_POST['upf'])) return false;
   
   //var_dump($_FILES['userfile']);

   if($_FILES['userfile']['error'] > 0){
   	echo 'Error en archivo seleccionado !!!';
      return false;
   }
	$ext = strtolower(substr($_FILES['userfile']['name'],-4));
	$permitidos = array('.zip');
	if(!in_array($ext, $permitidos)){
		echo 'La extensión del archivo no corresponde, <br> 
				Recuerde que el DBF debe estar comprimido en un archivo .ZIP !!!'; 
		return false;
	}
   return true;
}
/*<®> fx subirArchivo <®>*/
	/**
	 * Función que sube un archivo seleccionado.
	 */
	function subirArchivo(){
	   /**
	    * Datos del Archivo.
	    */
	      $arch_nombre  = $_FILES['userfile']['name']; 
	      $arch_tipo    = $_FILES['userfile']['type']; 
	      $arch_tamanio = $_FILES['userfile']['size'];
	   /**
	    * Destino
	    */
			$path_dest = 'uploads/';
			$destino   = $path_dest.$arch_nombre;
	   /**
	    * Subo el archivo.
	    */
	      if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $destino)){
	         echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
	         return false;
	   	}
	   	return $arch_nombre; 
	}
?>