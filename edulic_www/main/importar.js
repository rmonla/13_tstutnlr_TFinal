function buscarReg (sql, arch_php) {
	if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
			var a = parseInt(xmlhttp.responseText);
			importar(a);
		}
	}
	xmlhttp.open("GET", "importar_reg.php?id_reg=" + id_reg, true);
	xmlhttp.send();
}
}