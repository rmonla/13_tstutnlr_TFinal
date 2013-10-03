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
	</head>
	<body>
		<div class="wrapper co10">
			<div id="topbar">
				<div id="slidepanel">
					
					<div class="topbox">
						<h2>
							Login del Sistema
						</h2>
						<form action="#" method="post">
							<fieldset>
								<legend>Teachers Login Form</legend> 
								<label for="teachername">Usuario: 
									<input type="text" name="teachername" id="teachername" value="">
								</label> 
								<label for="teacherpass">Contraseña: 
									<input type="password" name="teacherpass" id="teacherpass" value="">
								</label> 
								<label for="teacherremember">
									<input class="checkbox" type="checkbox" name="teacherremember" id="teacherremember" checked="checked"> Recordarme
								</label>
								<p>
									<input type="submit" name="teacherlogin" id="teacherlogin" value="Ingresar"> &nbsp; 
									<input type="reset" name="teacherreset" id="teacherreset" value="Reiniciar">
								</p>
							</fieldset>
						</form>
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
			</div>
		</div><!-- ####################################################################################################### -->
		<div class="wrapper col1">
			<div id="header">
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
						<li class="last">
							<a href="#">Search</a>
						</li>
						<li>
							<a href="#">Online Support</a>
						</li>
						<li>
							<a href="#">School Board</a>
						</li>
					</ul>
					<p>
						Tel: xxxxx xxxxxxxxxx | Mail: info@domain.com
					</p>
				</div><br class="clear">
			</div>
		</div><!-- ####################################################################################################### -->
		<div class="wrapper col2">
			<div id="topnav">
				<ul>
					<li class="">
						<a href="index.php">Inicio</a>
						<ul>
							<li class="last">
								<a href="#">Cargar liquidaciones</a>
							</li>
						</ul>
					</li>
					<li class="active">
						<a href="#">Administración</a>
						<ul>
							<li>
								<a href="#">Importasíon</a>
							</li>
							<li>
								<a href="#">Suspendisse in neque</a>
							</li>
							<li class="last">
								<a href="#">Praesent et eros</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Carrera Académica</a>
						<ul>
							<li>
								<a href="#">Lorem ipsum dolor</a>
							</li>
							<li>
								<a href="#">Suspendisse in neque</a>
							</li>
							<li class="last">
								<a href="#">Praesent et eros</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Our Services</a>
					</li>
					<li class="last">
						<a href="#">Long Link Text</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col3">
		  <div id="breadcrumb">
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
		  </div>
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col3">
			<div id="container">
				<div id="content">
		      	<h2>Importación de Archivo DBF</h2>
			      <div id="respond">
						<form action="" method="post" enctype="multipart/form-data">
							<p>
								<div id="content">
									<input name="userfile" type="file" id="file"/>
								</div>
								<label for="userfile">
									<small>Seleccione un archivo</small>
								</label>
							</p>
							<p>
								<input name="submit" type="submit" id="submit" value="Subir Archivo" />
							&nbsp;
								<input name="reset" type="reset" id="reset" tabindex="5" value="Reiniciar Formulario" />
							</p>
							<input type="hidden" name="upf" value="1">
						</form>
			      </div>
	   		</div>
   		</div>
		      <br>
			<div class="clear">
			<?php  
				if(verificarArchivo())
					{ 
						//$archivo = $_POST['userfile'];
						//var_dump($_FILES, $_POST);
						//var_dump($_POST);
						//var_dump($archivo);
						//exit;
						subirArchivo();
			?>
						<div id="container">
							<h2>Table(s)</h2>
							<?php  
								mostrarDBF($archivo, $desde ='1000', $hasta = '1010');
							?>
						</div>
			<?php } ?>
		  </div>
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col5">
			<div id="footer">
				<div id="newsletter">
					<h2>
						Stay In The Know !
					</h2>
					<p>
						Please enter your email to join our mailing list
					</p>
					<form action="#" method="post">
						<fieldset>
							<legend>News Letter</legend> <input type="text" value="Enter Email Here…" onfocus="this.value=(this.value=='Enter Email Here…')? '' : this.value ;"> <input type="submit" name="news_go" id="news_go" value="GO">
						</fieldset>
					</form>
					<p>
						To unsubscribe please <a href="#">click here »</a>
					</p>
				</div>
				<div class="footbox">
					<h2>
						Lacus interdum
					</h2>
					<ul>
						<li>
							<a href="#">Praesent et eros</a>
						</li>
						<li>
							<a href="#">Praesent et eros</a>
						</li>
						<li>
							<a href="#">Lorem ipsum dolor</a>
						</li>
						<li>
							<a href="#">Suspendisse in neque</a>
						</li>
						<li class="last">
							<a href="#">Praesent et eros</a>
						</li>
					</ul>
				</div>
				<div class="footbox">
					<h2>
						Lacus interdum
					</h2>
					<ul>
						<li>
							<a href="#">Praesent et eros</a>
						</li>
						<li>
							<a href="#">Praesent et eros</a>
						</li>
						<li>
							<a href="#">Lorem ipsum dolor</a>
						</li>
						<li>
							<a href="#">Suspendisse in neque</a>
						</li>
						<li class="last">
							<a href="#">Praesent et eros</a>
						</li>
					</ul>
				</div>
				<div class="footbox">
					<h2>
						Lacus interdum
					</h2>
					<ul>
						<li>
							<a href="#">Praesent et eros</a>
						</li>
						<li>
							<a href="#">Praesent et eros</a>
						</li>
						<li>
							<a href="#">Lorem ipsum dolor</a>
						</li>
						<li>
							<a href="#">Suspendisse in neque</a>
						</li>
						<li class="last">
							<a href="#">Praesent et eros</a>
						</li>
					</ul>
				</div><br class="clear">
			</div>
		</div><!-- ####################################################################################################### -->
		<div class="wrapper col6">
			<div id="copyright">
				<p class="fl_left">
					Copyright © 2011 - All Rights Reserved - <a href="#">Domain Name</a>
				</p>
				<p class="fl_right">
					Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>
				</p><br class="clear">
			</div>
		</div>
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
   var_dump($_FILES, $_POST);
   //exit;
   if (!isset($_POST['upf'])) return false;
   if ($_FILES['userfile']['error'] > 0){
   	echo 'Error en archivo seleccionado !!!'; return false;
   }
   $ext = substr($_FILES['userfile']['name'],-4);
	$comp = (strcasecmp($ext, '.zip')!=0) ? (strcasecmp($ext, '.rar')!=0)? : false ;
	if ($comp) {
      echo 'El archivo DBF, debe estar comprimido en un .ZIP o .RAR !!!'; return false;
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
      $destino = 'uploads/';
   /**
    * Subo el archivo.
    */
      if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $destino.$arch_nombre))
         echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";     
            
            //echo "El archivo ha sido cargado correctamente."; 
         //else
   
   //$dominio = $_SERVER['HTTP_HOST'];
   //$resto_url = $_SERVER['REQUEST_URI'];
   //$_SESSION['temp_file'] = $dominio.$resto_url.$arch_destino.$arch_nombre;  
}
?>