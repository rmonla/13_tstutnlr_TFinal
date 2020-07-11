<?php  
	include_once '_main/fxs.php';
	
	/*<®> Modo Inicial <®>*/
		$lMod = "NoLogeado";

	session_start();

	function logOut(){
			session_unset();
			session_destroy();
	}
	
	$aModos = [
		"Cols"      => ["mTitu", "mDesc"],
		"Logeado"   => ["Bienvenido al sistema EduLiq", "Sistema Administrativo de Liquidaciones."],
		"NoLogeado" => ["Bienvenido al sistema EduLiq", "Sistema Administrativo de Liquidaciones."]
	];

	/*<®> Defino el Modo <®>*/
		/*<®> Modo Logeado <®>*/
			if ( isset($_SESSION['uIDE']) ) $lMod = "Logeado";
		/*<®> Modo Logear/DesLogear <®>*/
			if ( isset($_POST['login'] ) && $_POST['login'] == 'log-in'
				   && isset($_POST['usr']) && isset($_POST['pass'])	
				){
					if ($_POST['usr'] == '' || $_POST['usr'] == '' ) {
						$lMod = 'FaltaUsrPass';
						logOut();
					} else {
						/*<®> Verifico credenciales <®>*/
						/*<®> String Where <®>*/
							$usr   = $_POST['usr'];
							$pass  = md5($_POST['pass']);
							$tbl   = 'usuarios';
							$where = "usr='$usr' AND pass='$pass'";
						/*<®> Verifico los Datos <®>*/
							if(!contarRegs($tbl, $where))	$lModo  = 'NoVerifica';
							else {
								/*<®> Obtengo los datos de la base <®>*/
									$q  = "SELECT u.*, p.perfil 
													FROM $tbl u
													INNER JOIN perfiles p ON p.id = u.idperfil
													WHERE $where";
									$rg = mysqli_fetch_array(ejecutar($q));
								/*<®> Cargo los Datos <®>*/
									$uPerf = $rg['perfil'];
									$uLogi = $rg['usr']." ($uPerf)";
									$uNomb = utf8_encode($rg['nomb'].' '.strtoupper($rg['ape']));
									$uDocu = number_format($rg['docu'], '0', ",", ".");
									$uDire = utf8_encode($rg['dir']);
									$uTele = $rg['tel'];
									$uMail = $rg['email'];
								/*<®> Cargo la SESSION <®>*/
									$_SESSION['uIDE'] = $rg['id'];
								/*<®> Cargo el Modo <®>*/
									$lMod = 'Logeado';
								}
						}
				} else {
					$lMod = "DesLogear";
					logOut();
				}


	/*<®> Armo el Formulario <®>*/
		$hLabels = '';
		if ($lMod == 'Logeado') {
			$hLabels = <<<HTML
				<legend>Usuario en el Sistema</legend> 
				<label for="usr">Nombre y Apellido: 
					<h2><div style="text-align:right; font-style:italic">$uNomb</div></h2>
				</label> 
				<label for="usr">Usuario: 
					<div style="text-align:right">$uLogi</div>
				</label> 
				<label for="usr">Documento: 
					<div style="text-align:right">$uDocu</div>
				</label> 
				<label for="usr">Dirección: 
					<div style="text-align:right">$uDire</div>
				</label> 
				<label for="usr">Teléfono: 
					<div style="text-align:right">$uTele</div>
				</label> 
				<label for="usr">Mail: 
					<div style="text-align:right">$uMail</div>
				</label> 
				<p>
					<input type="submit" name="boton" value="Salir del Sistema">
					<input type="hidden" name="login" id="login" value="log-out">
				</p>
HTML;

		} else {
			$hLabels = <<<HTML
				<legend>Formulario de Login</legend> 
				<label for="usr">Usuario: 
					<input type="text" name="usr" id="usr" value="">
				</label> 
				<label for="pass">Contraseña: 
					<input type="password" name="pass" id="pass" value="">
				</label> 
				<p>
					<input type="submit" name="boton" value="Ingresar">
					<input type="hidden" name="login" id="login" value="log-in">
				</p>
HTML;

		}
	
		$hTIT = ($lMod == 'Logeado') ? 'Usuario en el Sistema' : 'Login del Sistema';

		$hLogin = <<<HTML
			<div id="formLogin">
				<h2>$hTIT</h2>
				<form action="#" method="post">
					<fieldset>
						$hLabels
					</fieldset>
				</form>
			</div>
HTML;

	echo $hLogin;

	// echo "<p>Modo = $lMod </p>";
?>

	<!-- largo script del msj 
	<script type="text/javascript">
		window.setTimeout(function(){
				$('.loginbutton').click();
			}, 1000);
	</script>
	-->

	<!-- 
	<input type="button" value="Cartel" class="loginbutton" data-type="zoomin"> 
	<div class="overlay-container" style="display: none;">
		<div class="msjlogin-container zoomin">
			<center>
				<h3>Título1</h3> 
				Mensaje Mensaje Mensaje Mensaje 
				<br>
				<br>
				<span class="loginclose" align="center">Cerrar</span>
			</center>
		</div>
	</div>
	-->
