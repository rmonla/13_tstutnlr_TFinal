<?php  
	include_once '_main/fxs.php';
	
	function appSession($estado = 0){
		if (!$estado) {
			session_unset();
			session_destroy();
		} else session_start();
	}

	$lModo = 'NoLogeado';
	$mTitu = 'Bienvenido al sistema EduLiq';
	$mDesc = 'Sistema Administrativo de Liquidaciones.';
	

	// if (isset($_SESSION['uIDE'])) { /* Logeado */
		
	// 	$lModo = 'Logeado';
		
	// 	$uID  = $_SESSION['uIDE'];
		
	// 	/*<®> Obtengo los datos del usuario <®>*/
	// 		$q = "SELECT u.*, p.perfil 
	// 				FROM usuarios u
	// 				INNER JOIN perfiles p ON p.id = u.idperfil
	// 				WHERE u.id = $uID";
	// 		$rg = mysqli_fetch_array(ejecutar($q));

	// 	/*<®> Datos del usuario <®>*/
	// 		$uPerf = $rg['perfil'];
	// 		$uLogi = $rg['usr']." ($uPerf)";
	// 		$uNomb = utf8_encode($rg['nomb'].' '.strtoupper($rg['ape']));
	// 		$uDocu = number_format($rg['docu'], '0', ",", ".");
	// 		$uDire = utf8_encode($rg['dir']);
	// 		$uTele = $rg['tel'];
	// 		$uMail = $rg['email'];

	// 	/*<®> Cargo las Vars de SESSION <®>*/
	// 		$_SESSION['uIDE'] = $rg['id'];
	// 		$_SESSION['uUSR'] = $rg['usr'];
	// 		$_SESSION['uPER'] = $rg['idperfil'];
	
	// } else

	/* DesdeForm */


	/*<®> Deslogeado <®>*/
		//appSession(0);

	if (isset($_POST['login'])) {
		if (!$_POST['login'] == 'log-in') {
			$lModo  = 'Deslogear';
			appSession();
		} elseif ($_POST['usr'] = '' || $_POST['pass'] = '') {
			$lModo  = 'FaltanDatos';
		} else {
			$lModo  = 'Verificando';
			/*<®> String Where <®>*/
				$usr   = $_POST['usr'];
				$pass  = md5($_POST['pass']);
				$tbl   = 'ususrios';
				$where = "usr='$usr' AND pass='$pass'";
			/*<®> Verifico los Datos <®>*/
				if(!contarRegs($tbl, $where)){
					$lModo  = 'NoVerifica';
				} else {
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
						appSession(1);
						$_SESSION['uIDE'] = $rg['id'];
						$_SESSION['uUSR'] = $rg['usr'];
						$_SESSION['uPER'] = $rg['idperfil'];
					/*<®> Cargo el Modo <®>*/
						$lModo = 'Logeado';
						$mTitu = "Bienvenido $uNomb";
						$mDesc = 'Ud. se ha logeado exitosamente en el sistema.';
					}
			}
	} else {
		$lModo  = 'Deslogeado';
	}
	

	
	/* Logeandose */
	switch ($lModo) {
		case 'Logeado':
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
			break;
		
		default:
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
			break;
		}

	$hTIT = ($lModo == 'Logeado') ? 'Usuario en el Sistema' : 'Login del Sistema' ;

	$hLogin = <<<HTML
		<div id="formLogin">
			<h2>$hTIT</h2>
			<form action="#" method="post">
				<fieldset>
					$hLabels
				</fieldset>
			</form>
		</div>
		<!-- largo script del msj -->
		<script type="text/javascript">
			window.setTimeout(function(){
					$('.loginbutton').click();
				}, 1000);
			
		</script>
	<!-- <input type="button" value="Cartel" class="loginbutton" data-type="zoomin"> -->
	<div class="overlay-container" style="display: none;">
		<div class="msjlogin-container zoomin">
			<center>
				<h3>$mTitu</h3> 
				$mDesc
				<br>
				<br>
				<span class="loginclose" align="center">Cerrar</span>
			</center>
		</div>
	</div>

HTML;

	echo $hLogin;

?>
