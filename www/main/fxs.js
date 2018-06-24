$(document).ready(function() {
	
	$('.loginbutton').click(function() {
		
		type = $(this).attr('data-type');
		
		$('.overlay-container').fadeIn(function() {
			
			window.setTimeout(function(){
				$('.msjlogin-container.'+type).addClass('msjlogin-container-visible');
			}, 100);
			
		});
	});

	$('.ingresar').click(function() { ingresar() });
	
	$('.loginclose').click(function() {
		$('.overlay-container').fadeOut().end().find('.msjlogin-container').removeClass('msjlogin-container-visible');
	});
	
});

/*<®> fx mostrarMsjLogin <®>*/
	/**
	 * Función que muestra un mensaje de resultado del logín.
	 */
	function mostrarMsjLogin() {
		if (type === "undefined") var type = "zoomin";
		$('.overlay-container').fadeIn(function() {
			window.setTimeout(function() {
				$('.msjlogin-container.' +type).addClass('msjlogin-container-visible');
			}, 100);
		});
	};

/*<®> fx importarpadron <®>*/
	/**
	 * Función que lanza la importación desde la DBF a la BD.
	 */
function importarpadron() {
	var dbf = document.getElementById("dbf_arch").innerHTML;
	var dbf_filas = parseInt(document.getElementById("dbf_filas").innerHTML);
	var ult_fila = parseInt(document.getElementById("ult_fila").innerHTML);
	var timport = document.getElementById("idtimport").innerHTML;;

	if (ult_fila == 0) {
		var p = 1;
	};
	if (ult_fila > 0) {
		var p = (ult_fila / dbf_filas) * 100;
	};
	if (p < 100) {
		$('#progress_bar .ui-progress').animateProgress(p);
	};
	if (ult_fila < dbf_filas) {
		if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else { // code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("importacion").innerHTML = xmlhttp.responseText;
				importarpadron()
			};
		}
		xmlhttp.open("POST", "main/importarpadron.php");
		xmlhttp.setRequestHeader("Content-Type",
			"application/x-www-form-urlencoded");
		xmlhttp.send("dbf=" + dbf + "&ult_fila=" + ult_fila + "&timport=" + timport);
	} else {
		alert("Importación terminada");
		$('#progress_bar .ui-progress').animateProgress(100);
	};
}
/*<®> fx ingresar <®>*/
	/**
	 * Función que lanza la importación desde la DBF a la BD.
	 */
	function ingresar1(){
		var usr  = document.getElementById("usr").value;
		var pass = document.getElementById("pass").value;
		var vars = "usr=" +usr + "&pass=" +pass;
		//alert(vars);
		if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else { // code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("loginres").innerHTML = xmlhttp.responseText;
			};
		}
		
		xmlhttp.open("POST", "login.php");
		xmlhttp.setRequestHeader("Content-Type",
	                      "application/x-www-form-urlencoded");
		
		//alert(vars);
		xmlhttp.send(vars);
	}
/*<®> fx MsjLogin <®>*/
	/**
	 * Función que lanza la importación desde la DBF a la BD.
	 */
		function getMsjLogin() {
			if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else { // code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("msjLogin").innerHTML = xmlhttp.responseText;
				};
			}

			xmlhttp.open("GET", "login_msj.php", true);
			xmlhttp.send();
		}
/*<®> fx verEstado <®>*/
	/**
	 * Función que contrala el estado de importación hasta que termine.
	 */
	function verEstado(){
		var estado = document.getElementById('imp_estado').innerHTML;
		if (estado == "Importando") {
			importarpadron();
		};
	}
/*<®> fx importacion <®>*/
	/**
	 * Función que retorna el estado de la importación.
	 */
	function importacion(){
		if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else { // code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("importacion").innerHTML = xmlhttp.responseText;
				verEstado();
			};
		}
		xmlhttp.open("GET", "main/importacion.php", true);
		xmlhttp.send();
	}

/*<®> fx ingresar <®>*/
	/**
	 * Función que obtiene por ajax la info de login.
	 */
	function ingresar(){
		var usr  = document.getElementById("usr").value;
		var pass = document.getElementById("pass").value;
		var vars = "usr=" +usr + "&pass=" +pass;
		
		var fxs = function(){
						window.setTimeout(function(){
							$('.loginbutton').click();
							}, 1000);
						};
		ajx("login.php", "login_res", vars, fxs);
		
	}
/*<®> fx AJX a, b, c, d
	 * Función que blablabla...
	 */
	function ajx(pag, div, vars, met, fxs){
		if (pag === undefined) 
			{return ""};
		if (div === undefined) 
			{return ""};
		if (met === undefined) 
		 	{met = "GET"}
		 else
		 	{met = "POST"};
		
		if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else { // code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById(div).innerHTML = xmlhttp.responseText;
				if(fxs !== undefined) eval(fxs);
			};
		}
		
		switch (met) {
			case "POST":
				xmlhttp.open(met, pag);
				xmlhttp.setRequestHeader(
					"Content-Type", "application/x-www-form-urlencoded"
					);
				xmlhttp.send(vars);
				break;
			case "GET":
				if (vars === undefined) 
					{vars = ""} 
				else 
					{vars = "?"+vars};
				xmlhttp.open(met, pag+vars, true);
				xmlhttp.send();
				break;
		}
		pag = undefined;
	}