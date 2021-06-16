<?php 
	require_once("reporte.php");
	require_once("../cnn.php");

	$obj = new clsConexion();
	$datos = $obj -> reporteFPDF();
	$datos1 = $obj -> reporteFPDF2();

	$pdf = new ClassPDF();

	$pdf -> AliasNbPages();
	$pdf -> AddPage();
	$pdf -> SetFillColor(230,232,232);
	$pdf -> SetFont('Arial', 'B', 12);

	
	$pdf -> Cell(50, 6, "Nombres", 1, 0, 'C', 1);
	$pdf -> Cell(50, 6, "Apellidos", 1, 0, 'C', 1);
	$pdf -> Cell(20, 6, "Producto", 1, 0, 'C', 1);
	$pdf -> Cell(20, 6, "Precio", 1, 0, 'C', 1);	
	$pdf -> Ln(10);

	$pdf -> SetFont('Arial', '', 11);
	while($fila=$datos->fetch_assoc()) 
	{
		$pdf -> Cell(50, 6, $fila["NOMBRES"], 1, 0, 'C');
		$pdf -> Cell(50, 6, $fila["APELLIDOS"], 1, 0, 'C');
			
			
	}

	$pdf -> output();


?>