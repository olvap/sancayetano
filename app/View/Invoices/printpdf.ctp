<?php
	// debug($invoice);

	App::import('Vendor', 'tcpdf/tcpdf');

	###############################################################
	# Seteo de parámetros
	###############################################################
	# Fecha de Impresión
	define('FECHA', date('d/m/Y'));
	
	# Tamaño de una Página A4 común y silvestre
	# ancho = 210 [mm]
	# alto 	= 297 [mm]
	
	# Ancho de celda (en milímetros)
	define('CELDA_ANCHO_TOTAL', 196);	# total si se le restan los márgenes a 210mm
	define('CELDA_ANCHO', 90);
	define('CELDA_ANCHO_CODIGO', 10);
	define('CELDA_ANCHO_DETALLE', 154);
	define('CELDA_ANCHO_PACK', 10);
	define('CELDA_ANCHO_UNIDAD', 10);
	define('CELDA_ANCHO_PRECIO', 12);
	
	# Alto de celda (en milímetros)
	define('CELDA_ALTO', 6);
	define('CELDA_ALTO_SUBTITULO', 4);
	
	// ###############################################################
	// # Seteo de Header y Footer
	// ###############################################################
	class MYPDF extends TCPDF {
	
	//     # Page header
	//     public function Header() {
	//         # Seteo de la fuente
	//         $this -> SetFont('freesans', 'B', 10);
			
 //            # Membrete
 //            $this -> Image(IMAGES.'pdf/membrete.jpg', 7, 2, 210-14);
			
	//         # Título
	//         $this -> setCellPaddings(2,0,2);
	//         $this -> Cell(196/3, 6, '', $border = 0, false, 'L', 0, '', 0, false, 'M', 'C');
	//         $this -> Cell(196/3, 6, 'Listado de Precios y Empaque', $border = 0, false, 'C', 0, '', 0, false, 'M', 'C');
	//         $this -> Cell(196/3, 6, '', $border = 0, 1, 'R', 0, '', 0, false, 'M', 'C');
			
	//         # Subtítulo
	//         $this -> SetFont('freesans', '', 7);
	//         $this -> Cell($w = 196, $h = 4, $txt = 'Precios y Empaques orientativos y sujetos a disponibilidad :: Pueden variar sin previo aviso.', 
	//            $border = 0, $ln = 1, $align = 'C', $fill = 0, $link = '', $stretch = 0, $ignore_min_height = false, 
	//            $calign = 'M', $valign = 'B');
			
	//         # Fecha
 //            $this -> SetFont('freesans', 'B', 7);
 //            $this -> setCellPaddings(2,0,5);
	//         $this -> Cell(196/3, $h = 4, 'Artículos para Ferreterías', $border = 0, false, 'L', 0, '', 0, false, $calign = 'T', $valign = 'M');
 //            $this -> Cell(196/3, $h = 4, '', $border = 0, false, 'C', 0, '', 0, false, $calign = 'T', $valign = 'M');
	//         $this -> Cell($w = 196/3, $h = 4, $txt = FECHA, $border = 0, $ln = 1, $align = 'R', $fill = 0, $link = '', $stretch = 0, 
	//            $ignore_min_height = false, $calign = 'T', $valign = 'M');
			
	// 		###############################################################
	// 		# Fila de títulos de columna
	// 		###############################################################
	// 			# Tamaño y Tipo de Letra
	// 			$this -> SetFont("freesans", "B", 9);
	// 			$this -> Cell(CELDA_ANCHO_CODIGO, CELDA_ALTO_SUBTITULO, 'Cód.', 1, 0, 'C');
	// 			$this -> Cell(CELDA_ANCHO_DETALLE, CELDA_ALTO_SUBTITULO, 'Detalle', 1, 0, 'C');
	// 			$this -> Cell(CELDA_ANCHO_UNIDAD, CELDA_ALTO_SUBTITULO, 'Unid.', 1, 0, 'C');
	// 			$this -> Cell(CELDA_ANCHO_PACK, CELDA_ALTO_SUBTITULO, 'Pack', 1, 0, 'C');
	// 			$this -> Cell(CELDA_ANCHO_PRECIO, CELDA_ALTO_SUBTITULO, 'Precio', 1, 1, 'C');
	//     }
	}
	
	// ###############################################################
	// # Seteo de Página
	// ###############################################################
	$tcpdf = new MYPDF();
	
	$textfont = 'freesans';
	$tcpdf -> SetCreator(PDF_CREATOR);
	$tcpdf -> SetAuthor("San Cayetano");
	$tcpdf -> SetTitle("Factura");
	$tcpdf -> SetSubject("Factura");
	$tcpdf -> SetKeywords("Factura");
	$tcpdf -> SetImageScale(PDF_IMAGE_SCALE_RATIO);
	$tcpdf -> AliasNbPages();
	
	# Márgenes de la página
	// $tcpdf -> SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	$tcpdf -> SetAutoPageBreak(TRUE, 7);
	// $tcpdf -> SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$tcpdf -> SetMargins(7, 20, 7);
	// $tcpdf->SetHeaderMargin(PDF_MARGIN_HEADER); en milímetros
	$tcpdf -> SetHeaderMargin(7);
	// $tcpdf->SetFooterMargin(PDF_MARGIN_FOOTER); en milímetros
	$tcpdf -> SetFooterMargin(7);
	
	// # Pie de Página
	// $tcpdf -> SetFooterFont(Array(
	// 		PDF_FONT_NAME_DATA,
	// 		'',
	// 		PDF_FONT_SIZE_DATA
	// ));
	// $tcpdf -> SetFooterMargin(7);
	
	##########################################################################
	# Factura
	##########################################################################
	# No se muestra el Header y Footer en la Carátula
	$tcpdf -> setPrintHeader(FALSE);
	$tcpdf -> setPrintFooter(FALSE);
	$tcpdf -> AddPage();
	
	# Todas las páginas
	$tcpdf -> SetTextColor(0, 0, 0, 255); # CMYK: Negro
	$tcpdf -> SetLineStyle($style=array('width'=>0.1, 'color' => array(0, 0, 0, 255)));

	$tcpdf -> Cell(CELDA_ANCHO_TOTAL, CELDA_ALTO, 'Señor/es: ' . $invoice['Invoice']["name"], array('B' => 1), 1, 'L');
	$tcpdf -> Cell(CELDA_ANCHO_TOTAL, CELDA_ALTO, 'Domicilio: ' . $invoice['Invoice']["address"], array('B' => 1), 1, 'L');
	$tcpdf -> Cell(CELDA_ANCHO_TOTAL, CELDA_ALTO, 'Nro. Ficha: ' . $invoice['Invoice']["ficha"], array('B' => 1), 1, 'L');
	$tcpdf -> Cell(CELDA_ANCHO_TOTAL, CELDA_ALTO, 'Subtotal: ' . $invoice['Invoice']["subtotal"], array('B' => 1), 1, 'L');
	$tcpdf -> Cell(CELDA_ANCHO_TOTAL, CELDA_ALTO, 'IVA: ' . $invoice['Invoice']["iva"], array('B' => 1), 1, 'L');
	$tcpdf -> Cell(CELDA_ANCHO_TOTAL, CELDA_ALTO, 'Total: ' . $invoice['Invoice']["total"], array('B' => 1), 1, 'L');

	if (isset($invoice['Check']) && sizeof($invoice['Check']) > 0) {
		$tcpdf -> Cell(CELDA_ANCHO_TOTAL, CELDA_ALTO, '', '', 1, 'L');
		$tcpdf -> Cell(CELDA_ANCHO_TOTAL, CELDA_ALTO, '', '', 1, 'L');
		$tcpdf -> Cell(CELDA_ANCHO_TOTAL, CELDA_ALTO, 'Cheques', array('B' => 1), 1, 'C');
		$tcpdf -> Cell(CELDA_ANCHO_TOTAL/3, CELDA_ALTO, 'Número', array('B' => 1), 0, 'C');
		$tcpdf -> Cell(CELDA_ANCHO_TOTAL/3, CELDA_ALTO, 'Banco', array('B' => 1), 0, 'C');
		$tcpdf -> Cell(CELDA_ANCHO_TOTAL/3, CELDA_ALTO, 'Monto', array('B' => 1), 1, 'C');
		
		foreach ($invoice['Check'] as $check) {
			$tcpdf -> Cell(CELDA_ANCHO_TOTAL/3, CELDA_ALTO, $check["number"], array('B' => 1), 0, 'C');
			$tcpdf -> Cell(CELDA_ANCHO_TOTAL/3, CELDA_ALTO, $check["bank"], array('B' => 1), 0, 'C');
			$tcpdf -> Cell(CELDA_ANCHO_TOTAL/3, CELDA_ALTO, '$ '.$check["amount"], array('B' => 1), 1, 'C');
		}
	}

	
	// ###################################################################################################
	// # Se arma el resumen de productos actualizados si existe al menos uno
	// ###################################################################################################
	// 	# Tamaño y Tipo de Letra
	// 	$tcpdf->SetFont($family='freesans', $style='B', $size=8); 
		
	// 	if(sizeof($articulos_actualizados) > 0) {
	// 		# Se agrega una página nueva para separar e iniciar el resumen de artículos actualizados
	// 		$tcpdf -> setPrintHeader(false);
 //    		$tcpdf -> setPrintFooter(false);
	// 		$tcpdf -> AddPage();
			
	// 		# Título
	// 		$celda_alto_subtitulo = 150;
	// 		$tcpdf->SetFont($family='freesans', $style='B', $size=18);
	// 		$fecha_normalizada = new DateTime($fecha);
	// 		$tcpdf->Cell(CELDA_ANCHO_TOTAL, $celda_alto_subtitulo, 'Resumen de artículos actualizados desde ' . date_format($fecha_normalizada, 'd/m/Y'), '', 1, 'C');
			
	// 		# Se habilitan los headers y footers, se setea la fuente
	// 		$tcpdf -> setPrintHeader(true);
 //    		$tcpdf -> setPrintFooter(true);
	// 		$tcpdf -> AddPage();
	// 		$tcpdf->SetFont($family='freesans', $style='B', $size=8); 
			
	// 		foreach ($articulos_actualizados as $articulo) {
	// 			$tcpdf -> Cell(CELDA_ANCHO_CODIGO, CELDA_ALTO, $articulo['Articulo']["id"], array('B' => 1), 0, 'C');
	// 			$tcpdf -> Cell(CELDA_ANCHO_DETALLE, CELDA_ALTO, $articulo['Articulo']["detalle"], array('B' => 1), 0, 'L');
	// 			$tcpdf -> Cell(CELDA_ANCHO_UNIDAD, CELDA_ALTO, $articulo['Articulo']["unidad"], array('B' => 1), 0, 'C');
	
	// 			# Se corrige el Pack si es Nulo
	// 			$pack = $articulo['Articulo']["pack"] == 0 ? 1 : $articulo['Articulo']["pack"];
	// 			$tcpdf -> Cell(CELDA_ANCHO_PACK, CELDA_ALTO, $pack, array('B' => 1), 0, 'C');
				
	// 			$tcpdf -> Cell(CELDA_ANCHO_PRECIO, CELDA_ALTO, sprintf('%.2f', $articulo['Articulo']["precio_venta"]), array('B' => 1), 1, 'C');
	// 		}
			
	// 		# Se agrega una página nueva para separar e iniciar la lista de todos los artículos
	// 		$tcpdf -> setPrintHeader(false);
 //    		$tcpdf -> setPrintFooter(false);
	// 		$tcpdf -> AddPage();
			
	// 		# Título
	// 		$tcpdf->SetFont($family='freesans', $style='B', $size=18); 
	// 		$tcpdf->Cell(CELDA_ANCHO_TOTAL, $celda_alto_subtitulo, 'Lista completa de productos', '', 1, 'C');
	// 	}
	
	// # Se habilita el Header y el Footer en las demás páginas
 //    $tcpdf -> setPrintHeader(TRUE);
 //    $tcpdf -> setPrintFooter(TRUE);
	// $tcpdf -> AddPage();
		
	// ###############################################################
	// # Armo la lista
	// ###############################################################
	// 	# Tamaño y Tipo de Letra
	// 	$tcpdf -> SetFont("freesans", "", 8);
		
	// 	foreach ($articulos as $articulo) {
	// 		if($articulo['Articulo']['actualizacion_articulos'] >= $fecha) {
	// 			$tcpdf->SetFont($family='freesans', $style='B', $size=8); 
	// 		} else {
	// 			$tcpdf->SetFont($family='freesans', $style='', $size=8); 
	// 		}
	// 		$tcpdf -> Cell(CELDA_ANCHO_CODIGO, CELDA_ALTO, $articulo['Articulo']["id"], array('B' => 1), 0, 'C');
	// 		$tcpdf -> Cell(CELDA_ANCHO_DETALLE, CELDA_ALTO, $articulo['Articulo']["detalle"], array('B' => 1), 0, 'L');
	// 		$tcpdf -> Cell(CELDA_ANCHO_UNIDAD, CELDA_ALTO, $articulo['Articulo']["unidad"], array('B' => 1), 0, 'C');

	// 		# Se corrige el Pack si es Nulo
	// 		$pack = $articulo['Articulo']["pack"] == 0 ? 1 : $articulo['Articulo']["pack"];
	// 		$tcpdf -> Cell(CELDA_ANCHO_PACK, CELDA_ALTO, $pack, array('B' => 1), 0, 'C');
			
	// 		$tcpdf -> Cell(CELDA_ANCHO_PRECIO, CELDA_ALTO, sprintf('%.2f', $articulo['Articulo']["precio_venta"]), array('B' => 1), 1, 'C');
	// 	}
		
		$tcpdf -> Output("San Cayetano.pdf", "I");
?>		