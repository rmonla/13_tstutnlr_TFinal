<?php  
	include_once '_main/fxs.php';
	
	function appSession($estado = 0){
		if (!$estado) {
			session_unset();
			session_destroy();
		} else session_start();
	}

	$log_mod  = 'NoLogeado';
	$hTIT     = 'Login del Sistema';
	$msj_tit  = 'Bienvenido al sistema EduLiq';
	$msj_desc = 'Sistema Administrativo de Liquidaciones.';
	
	//var_dump($_POST['usr'] != '');
	//var_dump($_SESSION);

	//appSession(1);

	if (isset($_SESSION['uIDE'])) {
		
		$uID  = $_SESSION['uIDE'];
		
		$log_mod = 'Logeado';
		
		/*<®> Obtengo los datos del usuario <®>*/
			$q = "SELECT u.*, p.perfil 
					FROM usuarios u
					INNER JOIN perfiles p ON p.id = u.idperfil
					WHERE u.id = $uID";
			$rg = mysqli_fetch_array(ejecutar($q));

		/*<®> Datos del usuario <®>*/
			$uPerf = $rg['perfil'];
			$uLogi = $rg['usr']." ($uPerf)";
			$uNomb = utf8_encode($rg['nomb'].' '.strtoupper($rg['ape']));
			$uDocu = number_format($rg['docu'], '0', ",", ".");
			$uDire = utf8_encode($rg['dir']);
			$uTele = $rg['tel'];
			$uMail = $rg['email'];

		/*<®> Cargo las Vars de SESSION <®>*/
			$_SESSION['uIDE'] = $rg['id'];
			$_SESSION['uUSR'] = $rg['usr'];
			$_SESSION['uPER'] = $rg['idperfil'];
	}

	if(isset($_POST['usr'], $_POST['pass']) 
		and $_POST['usr'] != '' 
		and $_POST['pass'] != ''){

		/*<®> String Where <®>*/
			$usr   = $_POST['usr'];
			$pass  = md5($_POST['pass']);
			$tbl   = 'usuarios';
			$where = "usr='$usr' AND pass='$pass'";

		/*<®> Verifico el login <®>*/
			if(contarRegs($tbl, $where) > '0'){
				/*<®> Obtengo los datos del registro del usuario <®>*/
					$q  = "SELECT u.*, p.perfil 
							FROM usuarios u
							INNER JOIN perfiles p ON p.id = u.idperfil
							WHERE $where";
					$rg = mysqli_fetch_array(ejecutar($q));

				/*<®> Datos del usuario <®>*/
					$uPerf = $rg['perfil'];
					$uLogi = $rg['usr']." ($uPerf)";
					$uNomb = utf8_encode($rg['nomb'].' '.strtoupper($rg['ape']));
					$uDocu = number_format($rg['docu'], '0', ",", ".");
					$uDire = utf8_encode($rg['dir']);
					$uTele = $rg['tel'];
					$uMail = $rg['email'];

				/*<®> Cargo las Vars de SESSION <®>*/
					appSession(1);
					$_SESSION['uIDE'] = $rg['id'];
					$_SESSION['uUSR'] = $rg['usr'];
					$_SESSION['uPER'] = $rg['idperfil'];
					$log_mod  = 'Logeado';
					$hTIT     = 'Usuario en el Sistema';
					$msj_tit  = "Bienvenido $uNomb";
					$msj_desc = 'Ud. se ha logeado exitosamente en el sistema.';
			
			}
	}

	$dtsLog = [
		'cols' => [
			'hTIT', 
			'mTIT', 
			'mDESC'
			],
		'NoLogeado' => [
			'Login del Sistema', 
			'Bienvenido al sistema EduLiq', 
			'Sistema Administrativo de Liquidaciones.'
			],
		'Logeado' => [
			'Usuario en el Sistema ', 
			'Bienvenido al sistema ', 
			'Ud. se ha logeado exitosamente en el sistema.'
			]
		];

	switch ($log_mod) {
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
					<input type="submit" value="Salir del Sistema">
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
					<input type="submit" name="login" id="login" value="Ingresar"> &nbsp; 
					<input type="reset" name="reset" id="reset" value="Reiniciar">
				</p>
HTML;
			break;
		}


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
	<input type="button" value="Cartel" class="loginbutton" data-type="zoomin">
	<div class="overlay-container" style="display: none;">
		<div class="msjlogin-container zoomin">
			<center>
				<h3><?php echo $msj_tit; ?></h3> 
				<?php echo $msj_desc; ?>
				<br>
				<br>
				<span class="loginclose" align="center">Cerrar</span>
			</center>
		</div>
	</div>

HTML;

	echo $hLogin;

?>
