<?php
	//header("Content-type: application/pdf"); 
	header('Content-Disposition: attachment; filename="ficha_'.date("d-m-Y").'.pdf"');
    

    //$pdf->AliasNbPages();
    //header
	//$pdf->SetAutoPageBreak(auto, 3);
    	if(is_array($actividades_evaluadas)){
    		$activity = $actividades_evaluadas;
    		//$contador = count($activity)
			for($i=$inicio_actividad; $i<=$fin_actividad; $i++) {
				$pertenece = '';
				if(is_array($activity[$i]['School'])){
					foreach($activity[$i]['School'] as $sede) {
						$pertenece .= $sede['nombre_escuela']." / ";
					}
				}
				if(is_array($activity[$i]['Headquarter'])){
					foreach($activity[$i]['Headquarter'] as $sede) {
						$pertenece .= $sede['nombre_sede']." / ";
	 				}
				}
				if(is_array($activity[$i]['Central'])){
					foreach($activity[$i]['Central'] as $sede) {
						$pertenece .= $sede['nombre']." / ";
					}
				}

				
				// Logo
				$fpdf->AddPage();
			    $fpdf->Image($abs_base.'images/logo_pdf.png',10,8,33);
			    // Arial bold 15
			    $fpdf->SetFont('Arial','B',15);
			    // Movernos a la derecha
			    $fpdf->Cell(80);
			    $fpdf->Ln(10);
			    // Título
			    $fpdf->MultiCell(0,5,$activity[$i]['Activity']['nombre'],0,'C');
			    // Salto de línea
			    $fpdf->Ln(5);

			    //imagenes
			    if(is_array($activity[$i]['Image']) && count($activity[$i]['Image'])>0){
			    	$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(40,5,utf8_decode('Imagenes:'));
			    	$fpdf->SetFont('Arial','',10);
			    	$fpdf->Cell(30);
			    	$fpdf->Ln(0);

	 				$img = 15;
	 				$c = 0;
	 				foreach($activity[$i]['Image'] as $image) {
	 					$nombre_imagen  = (string) $image['nombre'];
	 					if ($image['tipo'] == 1 && file_exists(WWW_ROOT.'uploads'.DS.$nombre_imagen)) {
						    //$fpdf->Image(str_replace(" ", "%20", ($abs_base.'uploads/'.$nombre_imagen)), $img, ($fpdf->GetY()+10), 35);
						    $imagen = str_replace(" ", "%20", ($abs_base.'uploads/'.$nombre_imagen));
						    //$pdf->Image($imagen, $pdf->GetX()+5, $pdf->GetY()+3, 35)
						    $fpdf->Cell( 40, 60, $fpdf->Image($imagen, $img, $fpdf->GetY()+10, 40,30), 0, 'L');
						    $img = $img+45;
							$c++;
						}
					}
					$fpdf->Ln(45);
	 			}
	 			//contenido
				$fpdf->SetFont('Arial','B',10);
		    	$fpdf->Cell(40,5,utf8_decode('Breve descripción:'));
		    	$fpdf->SetFont('Arial','',10);
		    	$fpdf->Cell(30);
		    	$fpdf->MultiCell(0,5,($activity[$i]['Activity']['descripcion_actividad']), 0, 'L');
		    	$fpdf->Ln(0);
		    	$fpdf->SetFont('Arial','B',10);
		    	$fpdf->Cell(40,5,'Pertenece:');
		    	$fpdf->SetFont('Arial','',10);
		    	$fpdf->Cell(30);
		    	$fpdf->MultiCell(0,5,($pertenece), 0, 'L');
		    	$fpdf->Ln(0);
		    	$fpdf->SetFont('Arial','B',10);
		    	$fpdf->Cell(40,5,utf8_decode('Proyecto en el qué se enmarca:'));
		    	$fpdf->SetFont('Arial','',10);
		    	$fpdf->Cell(30);
		    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['proyectoglobal'], 0, 'L');
		    	$fpdf->Ln(0);
		    	$fpdf->SetFont('Arial','B',10);
		    	$fpdf->Cell(40,5,'Fechas de la Actividad:');
		    	$fpdf->SetFont('Arial','',10);
		    	$fpdf->Cell(30);
		    	$fpdf->MultiCell(0,5,$this->Time->format($activity[$i]['Activity']['fechainicio_proyecto'], '%d-%m-%Y').' al '.$this->Time->format($activity[$i]['Activity']['fechafinal_proyecto'], '%d-%m-%Y'), 0, 'L');
		    	$fpdf->Ln(0);
		    	$fpdf->SetFont('Arial','B',10);
		    	$fpdf->Cell(40,5,'Nombre del responsable:');
		    	$fpdf->SetFont('Arial','',10);
		    	$fpdf->Cell(30);
		    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['responsable'], 0, 'L');
		    	$fpdf->Ln(0);
		    	$fpdf->SetFont('Arial','B',10);
		    	$fpdf->Cell(40,5,'Cargo:');
		    	$fpdf->SetFont('Arial','',10);
		    	$fpdf->Cell(30);
		    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['cargoresponsable'], 0, 'L');
		    	$fpdf->Ln(0);
		    	$fpdf->SetFont('Arial','B',10);
		    	$fpdf->Cell(40,5,'Email:');
		    	$fpdf->SetFont('Arial','',10);
		    	$fpdf->Cell(30);
		    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['mail_responsable'], 0, 'L');
		    	$fpdf->Ln(0);
		    	$fpdf->SetFont('Arial','B',10);
		    	$fpdf->Cell(40,5,utf8_decode('Pertenece algún convenio:'));
		    	$fpdf->SetFont('Arial','',10);
		    	$fpdf->Cell(30);
		    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['convenio_si_no'], 0, 'L');
		    	$fpdf->Ln(0);
		    	$fpdf->SetFont('Arial','B',10);
		    	$fpdf->Cell(40,5,'Entidades relacionadas son:');
		    	$fpdf->SetFont('Arial','',10);
		    	$fpdf->Cell(30);
		    	$fpdf->MultiCell(0,5,'', 0, 'L');
		    	$fpdf->Ln(0);
		    	if(is_array($activity[$i]['Entity'])){
					foreach($activity[$i]['Entity'] as $entidad) {
						$entidades = $entidad['entidades'];
						$fpdf->SetFont('Arial','B',10);
				    	$fpdf->Cell(40,5,'');
				    	$fpdf->SetFont('Arial','',10);
				    	$fpdf->Cell(30);
				    	$fpdf->MultiCell(0,5,$entidades, 0, 'L');
				    	$fpdf->Ln(0);
					}
				}
				$fpdf->Ln(0);
		    	$fpdf->SetFont('Arial','B',10);
		    	$fpdf->Cell(40,5,utf8_decode('Objetivo General y Específicos:'));
		    	$fpdf->SetFont('Arial','',10);
		    	$fpdf->Cell(30);
		    	$fpdf->MultiCell(0,5,'', 0, 'L');
		    	$fpdf->Ln(0);
		    	if(is_array($activity[$i]['Objetive'])){
					foreach($activity[$i]['Objetive'] as $objetivo) {
						$objetivo = $objetivo['objetivo'];
						$fpdf->SetFont('Arial','B',10);
				    	$fpdf->Cell(40,5,'');
				    	$fpdf->SetFont('Arial','',10);
				    	$fpdf->Cell(30);
				    	$fpdf->MultiCell(0,5,$objetivo, 0, 'L');
				    	$fpdf->Ln(0);
					}
				}
				$fpdf->Ln(0);
		    	$fpdf->SetFont('Arial','B',10);
		    	$fpdf->Cell(40,5,utf8_decode('Públicos abordados son:'));
		    	$fpdf->SetFont('Arial','',10);
		    	$fpdf->Cell(30);
		    	$fpdf->MultiCell(0,5,'', 0, 'L');
		    	$fpdf->Ln(0);
		    	if(is_array($activity[$i]['Internal'])){
					foreach($activity[$i]['Internal'] as $internal) {
						$internal = $internal['publico'];
						$fpdf->SetFont('Arial','B',10);
				    	$fpdf->Cell(40,5,'');
				    	$fpdf->SetFont('Arial','',10);
				    	$fpdf->Cell(30);
				    	$fpdf->MultiCell(0,5,$internal, 0, 'L');
				    	$fpdf->Ln(0);
					}
				}
						$fpdf->SetFont('Arial','B',10);
				    	$fpdf->Cell(40,5,'');
				    	$fpdf->SetFont('Arial','B',10);
				    	$fpdf->Cell(30);
				    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['numeroparticipantes'], 0, 'L');
				    	$fpdf->Ln(0);
		    	if(is_array($activity[$i]['External'])){
					foreach($activity[$i]['External'] as $external) {
						$external = $external['publicoexterno'];
						$fpdf->SetFont('Arial','B',10);
				    	$fpdf->Cell(40,5,'');
				    	$fpdf->SetFont('Arial','',10);
				    	$fpdf->Cell(30);
				    	$fpdf->MultiCell(0,5,$external, 0, 'L');
				    	$fpdf->Ln(0);
					}
				}
						$fpdf->SetFont('Arial','B',10);
				    	$fpdf->Cell(40,5,'');
				    	$fpdf->SetFont('Arial','B',10);
				    	$fpdf->Cell(30);
				    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['numeroexternos'], 0, 'L');
				    	$fpdf->Ln(0);

				$fpdf->SetFont('Arial','B',10);
		    	$fpdf->Cell(40,5,'Beneficiarios del proyecto:');
		    	$fpdf->SetFont('Arial','',10);
		    	$fpdf->Cell(30);
		    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['beneficiados'], 0, 'L');
		    	$fpdf->Ln(0);
		    	$fpdf->SetFont('Arial','B',10);
		    	$fpdf->Cell(40,5,'Principios comprendidos:');
		    	$fpdf->SetFont('Arial','',10);
		    	$fpdf->Cell(30);
		    	$fpdf->MultiCell(0,5,'', 0, 'L');
		    	$fpdf->Ln(0);
		    	if(is_array($activity[$i]['Beginning'])){
					foreach($activity[$i]['Beginning'] as $principio) {
						$principio = $principio['principio'];
						if($principio!=''){
							$fpdf->SetFont('Arial','B',10);
					    	$fpdf->Cell(40,5,'');
					    	$fpdf->SetFont('Arial','',10);
					    	$fpdf->Cell(30);
					    	$fpdf->MultiCell(0,5,$principio, 0, 'L');
					    	$fpdf->Ln(0);
						}
					}
				}
				if($activity[$i]['Activity']['justificacionprincipios']!=''){
					$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(40,5,'');
			    	$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(30);
			    	$fpdf->MultiCell(0,5,trim($activity[$i]['Activity']['justificacionprincipios']), 0, 'L');
			    	$fpdf->Ln(0);
				}
				$fpdf->Ln(0);
		    	$fpdf->SetFont('Arial','B',10);
		    	$fpdf->Cell(40,5,utf8_decode('Ámbito:'));
		    	$fpdf->SetFont('Arial','',10);
		    	$fpdf->Cell(30);
		    	$fpdf->MultiCell(0,5,'', 0, 'L');
		    	$fpdf->Ln(0);
		    	if(is_array($activity[$i]['Scope'])){
					foreach($activity[$i]['Scope'] as $ambito) {
						$ambito = $ambito['ambito'];
						$fpdf->SetFont('Arial','B',10);
				    	$fpdf->Cell(40,5,'');
				    	$fpdf->SetFont('Arial','',10);
				    	$fpdf->Cell(30);
				    	$fpdf->MultiCell(0,5,$ambito, 0, 'L');
				    	$fpdf->Ln(0);
					}
				}
				$fpdf->SetFont('Arial','B',10);
		    	$fpdf->Cell(40,5,'Monto estimado:');
		    	$fpdf->SetFont('Arial','',10);
		    	$fpdf->Cell(30);
		    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['costoactividad'], 0, 'L');
		    	$fpdf->Ln(0);
		    	$fpdf->SetFont('Arial','B',10);
		    	$fpdf->Cell(40,5,utf8_decode('Su fuente de recursos será:'));
		    	$fpdf->SetFont('Arial','',10);
		    	$fpdf->Cell(30);
		    	if ($activity[$i]['Activity']['financiamiento_i_e_m'] == 0){
					$fuente_fin = 'Interna';
				}elseif ($activity[$i]['Activity']['financiamiento_i_e_m'] == 1){
					$fuente_fin = 'Externa';
				}elseif ($activity[$i]['Activity']['financiamiento_i_e_m'] == 2){
					$fuente_fin = 'Mixta';
				}
				$fpdf->MultiCell(0,5,$fuente_fin, 0, 'L');
		    	$fpdf->Ln(0);
		    	if ($activity[$i]['Activity']['financiamiento_i_e_m'] == 0) {
					$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(40,5,utf8_decode('Dirección Central:'));
			    	$fpdf->SetFont('Arial','',10);
			    	$fpdf->Cell(30);
			    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['direccioncentral'].' %', 0, 'L');
			    	$fpdf->Ln(0);
			    	$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(40,5,'Sedes:');
			    	$fpdf->SetFont('Arial','',10);
			    	$fpdf->Cell(30);
			    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['sedesporcentaje'].' %', 0, 'L');
			    	$fpdf->Ln(0);
			    	$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(40,5,'Escuelas:');
			    	$fpdf->SetFont('Arial','',10);
			    	$fpdf->Cell(30);
			    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['escuelasporcentaje'].' %', 0, 'L');
			    	$fpdf->Ln(0);
	 			}
	 			if ($activity[$i]['Activity']['financiamiento_i_e_m'] == 2) {
	 				$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(40,5,utf8_decode('Dirección Central:'));
			    	$fpdf->SetFont('Arial','',10);
			    	$fpdf->Cell(30);
			    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['direccioncentral'].' %', 0, 'L');
			    	$fpdf->Ln(0);
			    	$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(40,5,'Sedes:');
			    	$fpdf->SetFont('Arial','',10);
			    	$fpdf->Cell(30);
			    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['sedesporcentaje'].' %', 0, 'L');
			    	$fpdf->Ln(0);
			    	$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(40,5,'Escuelas:');
			    	$fpdf->SetFont('Arial','',10);
			    	$fpdf->Cell(30);
			    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['escuelasporcentaje'].' %', 0, 'L');
			    	$fpdf->Ln(0);
			    	$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(40,5,'Fondos Concursables:');
			    	$fpdf->SetFont('Arial','',10);
			    	$fpdf->Cell(30);
			    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['fondoconcursable'].' %', 0, 'L');
			    	$fpdf->Ln(0);
			    	$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(40,5,'Entorno Productivo:');
			    	$fpdf->SetFont('Arial','',10);
			    	$fpdf->Cell(30);
			    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['entornoproductivo'].' %', 0, 'L');
			    	$fpdf->Ln(0);
			    	$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(40,5,utf8_decode('Entidades Académicas:'));
			    	$fpdf->SetFont('Arial','',10);
			    	$fpdf->Cell(30);
			    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['entidadesacademicas'].' %', 0, 'L');
			    	$fpdf->Ln(0);
			    	$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(40,5,'Donaciones:');
			    	$fpdf->SetFont('Arial','',10);
			    	$fpdf->Cell(30);
			    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['donacionesporcentaje'].' %', 0, 'L');
			    	$fpdf->Ln(0);
	 			}
				if ($activity[$i]['Activity']['financiamiento_i_e_m'] == 1) {
	 				$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(40,5,'Fondos Concursables:');
			    	$fpdf->SetFont('Arial','',10);
			    	$fpdf->Cell(30);
			    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['fondoconcursable'].' %', 0, 'L');
			    	$fpdf->Ln(0);
			    	$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(40,5,'Entorno Productivo:');
			    	$fpdf->SetFont('Arial','',10);
			    	$fpdf->Cell(30);
			    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['entornoproductivo'].' %', 0, 'L');
			    	$fpdf->Ln(0);
			    	$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(40,5,utf8_decode('Entidades Académicas:'));
			    	$fpdf->SetFont('Arial','',10);
			    	$fpdf->Cell(30);
			    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['entidadesacademicas'].' %', 0, 'L');
			    	$fpdf->Ln(0);
			    	$fpdf->SetFont('Arial','B',10);
			    	$fpdf->Cell(40,5,'Donaciones:');
			    	$fpdf->SetFont('Arial','',10);
			    	$fpdf->Cell(30);
			    	$fpdf->MultiCell(0,5,$activity[$i]['Activity']['donacionesporcentaje'].' %', 0, 'L');
			    	$fpdf->Ln(0);
	 			}
	 			
			}
		}
		

    $fpdf->Output();

    echo $content_for_layout;
?>