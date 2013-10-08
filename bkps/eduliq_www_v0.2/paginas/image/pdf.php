<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
<body>
<?
	require("fpdf.php");
	
	class PDF extends FPDF
		{
			//cabecera de la pagina
			function header()
				{
					//logo ministerio
					$this->image('LOGO MISTERIO DE EDUC4x4.jpg',10,8,22);
					//Arial
					$this->SetFont('Arial','B','14');
					//movernos a la derecha
					$this->Cell(80);
					//Titulo
					$this->Cell(30,10,'MINISTERIO DE EDUCACION', 1,0,'C');
					//salto de linea
					$this->Ln(20);
				}
			
			//Pie de pagina
			function Footer()
				{
					//posicion a 1,5 del final
					$this->SetY(-15);
					//Arial italic 8 
					$this->SetFont('Arial','I','8');
					//numeros de paginas
					$this->Cell(0,10,'Pagina: '.$this->PageNº().'/(nb)',0,0,'C');
				}
		}
				
	
	$pdf = new FPDF();
	$pdf->AliasNoPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B','14');
	$pdf->Cell(40,10,'Hola mundo');
	$pdf->Output();
?>
</body>
</html>
