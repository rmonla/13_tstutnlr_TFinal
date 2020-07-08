<?php  

//$str = "rmonla";
//$encriptada = md5($str);
//echo $encriptada."<br>";
//echo strlen($encriptada);
//var_dump($encriptada);

?>


<div id="slidepanel" style="display: none;">
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
	<input type="button" value="Salir" class="loginbutton" data-type="zoomin">
	<div class="overlay-container" style="display: none;">
		<div class="msjlogin-container zoomin">
			<center>
				<div id="msjlogin">
					<h3>Bienvenido Ricardo MONLA</h3> 
					Ud. se ha logeado exitosamente en el sistema.<br>
					<br>
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
			<a id="slideit" href="#slidepanel" style="display: block;">rmonla</a>
			<a id="closeit" style="display: none;" href="#slidepanel">Cerrar Panel</a>
		</li>
	</ul>
</div><br class="clear">
