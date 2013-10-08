<?php

require_once("conectar.php");
require_once("class.ezpdf.php");

$pdf =& new Cezpdf('a3');

//seleccionamos la fuente
$pdf->selectFont('fonts/Helvetica.afm');

//seteamos la información del documento que se creará
$datacreator = array (
					'Title'=>'Reporte PDF',
					'Author'=>'Gastón Francisco',
					'Subject'=>'Reporte Dinámico con PHP y Mysql Exportado a PDF',
					'Creator'=>'fragaston@gmail.com	',
					'Producer'=>'Gaston Francisco'
					);
$pdf->addInfo($datacreator);

//VER COMO CARGO LA SITUACION DE REVISTA
$data[]=array
	(
		"nov"=>utf8_decode($reg[$i]["titulo"]),
		"tipo"=>utf8_decode($reg[$i]["detalle"]),
		"docu"=>Conectar::invierte_fecha($reg[$i]["fecha"]),
		"sexo"=>utf8_decode($reg[$i]["nombre"]),
		"trab"=>$reg[$i]["correo"],
		"nomb"=>utf8_decode($reg[$i]["pais"]),
		"valor"=>utf8_decode($reg[$i]["empresa"]),
		"codigo"=>utf8_decode($reg[$i]["empresa"]),
		"desde"=>utf8_decode($reg[$i]["empresa"]),
		"hasta"=>utf8_decode($reg[$i]["empresa"]),
		"area"=>utf8_decode($reg[$i]["empresa"]),
		"escu"=>utf8_decode($reg[$i]["empresa"]),
		"observacion"=>utf8_decode($reg[$i]["empresa"]),
		"usuario"=>utf8_decode($reg[$i]["empresa"]),
	);
}//fin for
	$titles=array
	(
		"nov"=>utf8_decode($reg[$i]["titulo"]),
		"tipo"=>utf8_decode($reg[$i]["detalle"]),
		"docu"=>Conectar::invierte_fecha($reg[$i]["fecha"]),
		"sexo"=>utf8_decode($reg[$i]["nombre"]),
		"trab"=>$reg[$i]["correo"],
		"nomb"=>utf8_decode($reg[$i]["pais"]),
		"valor"=>utf8_decode($reg[$i]["empresa"]),
		"codigo"=>utf8_decode($reg[$i]["empresa"]),
		"desde"=>utf8_decode($reg[$i]["empresa"]),
		"hasta"=>utf8_decode($reg[$i]["empresa"]),
		"area"=>utf8_decode($reg[$i]["empresa"]),
		"escu"=>utf8_decode($reg[$i]["empresa"]),
		"observacion"=>utf8_decode($reg[$i]["empresa"]),
		"usuario"=>utf8_decode($reg[$i]["empresa"])
	);

$options = array(
              'shadeCol'=>array(0.9,0.9,0.9),//Color de las Celdas.
              'xOrientation'=>'center',//El reporte aparecerá Centrado.
              'width'=>700//Ancho de la Tabla.
            );

$pdf->ezText("<b>Situación de Revista</b>\n",16);

$pdf->ezTable($data,$titles,'',$options );

$pdf->ezStream();	

?>