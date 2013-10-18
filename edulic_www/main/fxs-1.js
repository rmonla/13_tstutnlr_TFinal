function buscarReg (tbl, col, id) {
	if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			//document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
			return xmlhttp.responseText;
		}
	}
	xmlhttp.open("POST", "main/buscarreg.php?tbl=" + tbl + "&col=" + col + "&id=" + id, true);
	xmlhttp.send();
}
function contarRegs (tbl, mostraren) {
	if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp_cont= new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp_cont= new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp_cont.readyState == 4 && xmlhttp_cont.status == 200) {
			document.getElementById(mostraren).innerHTML = xmlhttp_cont.responseText;
			document.getElementById("dbf_estado").innerHTML = 'Contado';
			importarDesdeDBF();
		};
	}
	xmlhttp_cont.open("GET", "main/contarregs.php?tbl=" + tbl, true);
	xmlhttp_cont.send();
}
function dbf_importarReg (tbl, dbf_fila) {
	var dbf_arch = document.getElementById("dbf_arch").innerHTML;
	if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("dbf_estado").innerHTML = xmlhttp.responseText;
			importarDesdeDBF();
		};
	}
	xmlhttp.open("GET", "main/dbf_importarreg.php?tbl=" + tbl + "&dbf_arch=" + dbf_arch + "&dbf_fila=" + dbf_fila, true);
	xmlhttp.send();
}
function importarDesdeDBF () {
	var estado = document.getElementById('dbf_estado').innerHTML
	var mostraren = '';
	if(estado != 'Iniciar') {
  		var fila = parseInt(document.getElementById("dbf_fila").innerHTML) + 1;
	} else var fila = 0;
	var dbf_filas = parseInt(document.getElementById("dbf_filas").innerHTML);
	if ( fila <= dbf_filas) {
		dbf_importarReg ('agentes', fila);
		switch(estado){
			case 'Importado':
				//contarRegs('agentes', 'cant_agentes');
	  			mostraren = "dbf_importado";
		  		break;
			case 'Encontrado':
		  		mostraren = "dbf_encontrado";
		  		break;
			//case 'Contado':
		  	//	mostraren = "deafult";
		  	//	break;
	  		//default:
		  	//	mostraren = "deafult";
		  		//break;
		}
		//if (mostraren != "deafult") {
		//};
		document.getElementById(mostraren).innerHTML  = parseInt(document.getElementById(mostraren).innerHTML) + 1;
		document.getElementById("dbf_fila").innerHTML = fila;
	}
}