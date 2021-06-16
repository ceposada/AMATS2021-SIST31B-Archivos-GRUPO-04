<?php 
	require_once("reporte.php");
	require_once("../cnn.php");

	$obj = new clsConexion();
	$datos = $obj -> reporteFPDF();

	$pdf = new ClassPDF();

	$pdf -> AliasNbPages();
	$pdf -> AddPage();
	$pdf -> SetFillColor(230,232,232);
	$pdf -> SetFont('Arial', 'B', 12);

	
	$pdf -> Cell(50, 6, "Nombres", 1, 0, 'C', 1);
	$pdf -> Cell(50, 6, "Apellidos", 1, 0, 'C', 1);
	$pdf -> Cell(20, 6, "Edad", 1, 0, 'C', 1);
	$pdf -> Cell(20, 6, "Sexo", 1, 0, 'C', 1);	
	$pdf -> Ln(10);

	$pdf -> SetFont('Arial', '', 11);
	while($fila=$datos->fetch_assoc()) 
	{
		$pdf -> Cell(50, 6, $fila["NOMBRES"], 1, 0, 'C');
		$pdf -> Cell(50, 6, $fila["APELLIDOS"], 1, 0, 'C');
		$pdf -> Cell(20, 6, $fila["EDAD"], 1, 0, 'C');
		$pdf -> Cell(20, 6, $fila["SEXO"], 1, 0, 'C');	
		$pdf -> Ln(10);		
	}

	$pdf -> output();


?>