<?php 
	
	require_once("fpdf.php");

	class ClassPDF extends FPDF
	{
		
		function Header()
		{
			$this -> Image('imagen_reporte.png', 5, 5, 30);
			$this -> SetFont('Arial', 'B', 12);
			$this -> Cell(30);
			$this -> Cell(120, 10, 'Reporte de usuarios', 0, 0, 'C');
			$this -> Ln(20);


		}

		function Footer()
		{
			$this -> SetY(-15);
			$this -> SetFont('Arial', 'B', 12);
			$this -> Cell(0, 10, 'Derechos reservados', 0, 0, 'C');
		}	
	}

?>