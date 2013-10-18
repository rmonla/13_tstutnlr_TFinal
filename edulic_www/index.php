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
			<div id="topbar">
				<div id="slidepanel">
					
					<div class="topbox">
						<h2>Login del Sistema</h2>
						
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
						<li class="last"><a href="#">Search</a></li>
						<li><a href="#">Online Support</a></li>
						<li><a href="#">School Board</a></li>
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
							<li class="last">
								<a href="#">Importasíon</a>
							</li>
						</ul>
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
							<input type="hidden" name="upf">
						</form>
			      </div>
	   		</div>
   		</div>
		      <br>
			<div class="clear">
			<?php  
				$datos = array('10', '12');
				
				if(verificarArchivo())
					{ 
						$zip_arch = subirArchivo();
						$path_dbfs = 'uploads/dbfs/';
						if(descomprimirArch($zip_arch, $path_dbfs)){
							if(!$dbf_arch = buscarPrimerDBF($path_dbfs)){
								echo "No se puede encontrar en archivo .dbf en $zip_arch";
								exit;
							}
						$dbf_filas = contFilasDBF($dbf_arch);
						//$dbf_filas = '20';
						mostrarDBF($path_dbfs.$dbf_arch, $desde ='0', $hasta = '10');
			?>
						<div id="container">
							<div id="content">
								<h2>Importación de Agentes</h2>
								<div id="respond">
									<p>
									<div id="botImpAgentes">
										<input name="submit" type="submit" 
										id="botImpAgentes" value="Importar"
										onclick="importar()" />
									&nbsp;
									</div>
									<table>
										<tr>
											<th align="center">Archivo</th>
											<th align="center">Filas</th>
											<th align="center">Importación</th>
										</tr>
										<tr>
											<td><div id="dbf_arch" align="center"><?php echo "$dbf_arch"; ?></div></td>
											<td><div id="dbf_filas" align="center"><?php echo "$dbf_filas"; ?></div></td>
											<td>
												<div id="importacion">
													<table>
														<tbody>
															<tr>
																<th align="center">Estado</th>
																<th align="center">Fila</th>
																<th align="center">Agentes</th>
																<th align="center">Escuelas</th>
																<th align="center">Liquidaciones</th>
															</tr>
															<tr>
																<td align="center"><div id="imp_estado">Iniciar</div></td>
																<td align="center">0</td>
																<td><div><?php echo contarRegs('agentes'); ?> En la BD</div></td>
																<td><div><?php //echo contarRegs('escuelas'); ?> En la BD</div></td>
																<td><div><?php //echo contarRegs('liquidaciones'); ?> En la BD</div></td>
															</tr>
														</tbody>
													</table>
												</div>
											</td>
										</tr>
									</table>	
									<div id="botPru">
										<input name="submit" type="submit" 
										id="botImpAgentes" value="Pru"
										onclick="alert(document.getElementById('imp_estado').innerHTML);" />
									&nbsp;
									</div>

									</p>
		 							<?php  
										//$archivo = 'uploads/EDUC_PADSEP13.dbf';
										//mostrarDBF($archivo, '0', '10');
									?> 
								<br>
								<br>
								</div>
							</div>
						</div>
			<?php }} ?>
			<div class="clear">
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
						<li><a href="#">Praesent et eros</a></li>
						<li><a href="#">Praesent et eros</a></li>
						<li><a href="#">Lorem ipsum dolor</a></li>
						<li><a href="#">Suspendisse in neque</a></li>
						<li class="last"><a href="#">Praesent et eros</a></li>
					</ul>
				</div>
				<div class="footbox">
					<h2>
						Lacus interdum
					</h2>
					<ul>
						<li><a href="#">Praesent et eros</a></li>
						<li><a href="#">Praesent et eros</a></li>
						<li><a href="#">Lorem ipsum dolor</a></li>
						<li><a href="#">Suspendisse in neque</a></li>
						<li class="last"><a href="#">Praesent et eros</a></li>
					</ul>
				</div>
				<div class="footbox">
					<h2>
						Lacus interdum
					</h2>
					<ul>
						<li><a href="#">Praesent et eros</a></li>
						<li><a href="#">Praesent et eros</a></li>
						<li><a href="#">Lorem ipsum dolor</a></li>
						<li><a href="#">Suspendisse in neque</a></li>
						<li class="last"><a href="#">Praesent et eros</a></li>
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
   //var_dump($_FILES, $_POST);
   //exit;
   
   if(!isset($_POST['upf'])) return false;
   if($_FILES['userfile']['error'] > 0){
   	echo 'Error en archivo seleccionado !!!';
      return false;
   }
	$ext = strtolower(substr($_FILES['userfile']['name'],-4));
	$permitidos = array('.zip','.rar');
	if(!in_array($ext, $permitidos)){
		echo 'La extensión del archivo no corresponde, <br> recuerde que el DBF debe estar comprimido en un .ZIP o .RAR !!!'; 
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