/*<®> fx importar <®>*/
	/**
	 * Función que evalua si inicia la importación.
	 */
	function importar(){
		//document.getElementById("importacion").innerHTML = resultado;
		var estado = document.getElementById('imp_estado').innerHTML;
		if (estado != "Terminado") {
			importarpadron();
		};
	}
/*<®> fx importarpadron <®>*/
	/**
	 * Función que lanza la importación desde la DBF a la BD.
	 */
	function importarpadron(){
		var dbf = document.getElementById("dbf_arch").innerHTML;
		if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else { // code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("importacion").innerHTML = xmlhttp.responseText;
				importar();
			};
		}
		xmlhttp.open("GET", "main/importarpadron.php?dbf=" + dbf, true);
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