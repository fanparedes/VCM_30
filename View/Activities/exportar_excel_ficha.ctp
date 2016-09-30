<?php
	$userAgent = $_SERVER[HTTP_USER_AGENT];
	$userAgent = strtolower ($userAgent);

	if (strpos($userAgent, "windows")):
?>
<html>
<head>
</head>

<body>
	<table border="1">
		<thead>
			<tr>
			<th><?php echo  ('ID actividad'); ?></th>
			<th><?php echo  ('Nombre de usuario'); ?></th>
			<th><?php echo  ('Nombre de Actividad'); ?></th>
			<th><?php echo  ('Actividad Hito'); ?></th>
			<th><?php echo  ('Origen de proyecto'); ?></th>
			<th><?php echo  ('Breve descripci�n de la Actividad'); ?></th>
			<th><?php echo  ('Pertenece'); ?></th>
			<th><?php echo  ('Escuelas a las que pertenece'); ?></th>
			<th><?php echo  ('Sedes a las que pertenece'); ?></th>
			<th><?php echo  ('�reas centrales a las que pertenece'); ?></th>
			<th><?php echo  ('Nombre del proyecto en el qu� se enmarca'); ?></th>
			<th><?php echo  ('Ingresar Fechas'); ?></th>
			<th><?php echo  ('Nombre del responsable de la actividad'); ?></th>
			<th><?php echo  ('Cargo'); ?></th>
			<th><?php echo  ('Mail'); ?></th>
			<th><?php echo  ('Convenio al que pertenece la actividad'); ?></th>
			<th><?php echo  ('Vigencia del convenio'); ?></th>
			<th><?php echo  ('Breve descripci�n del convenio'); ?></th>
			<th><?php echo  ('Objetivo General de la actividad'); ?></th>
			<th><?php echo  ('Objetivos espec�ficos'); ?></th>
			<th><?php echo  ('Principios de la pol�tica que aborda'); ?></th>
			<th><?php echo  ('Justificaci�n de principios abordados'); ?></th>
			<th><?php echo  ('P�blico abordado Interno'); ?></th>
			<th><?php echo  ('N�mero de participantes aprox.'); ?></th>
			<th><?php echo  ('P�blico abordado Externo'); ?></th>
			<th><?php echo  ('N�mero de participantes aprox.'); ?></th>
			<th><?php echo  ('Beneficiados de la implementaci�n del proyecto'); ?></th>
			<th><?php echo  ('�mbitos de acci�n en los que se enmarca la actividad'); ?></th>
			<th><?php echo  ('Asocie el �rea a la que m�s se asimile su actividad (elija una)'); ?></th>
			<th><?php echo  ('Entidades Relacionadas'); ?></th>
			<th><?php echo  ('Detalle Entidades'); ?></th>
			<th><?php echo  ('Nombre de la entidad con la que se relaciona'); ?></th>
			<th><?php echo  ('Cargo'); ?></th>
			<th><?php echo  ('Detalle datos de contacto'); ?></th>
			<th><?php echo  ('Costo de la actividad'); ?></th>
			<th><?php echo  ('Fuentes de financiamiento'); ?></th>
			<th><?php echo  ('Fuente de financiamiento Interno'); ?></th>
			<th><?php echo  ('Fuente de financiamiento Externo'); ?></th>
			<th><?php echo  ('Fuente de financiamiento Mixto'); ?></th>
			<th><?php echo  ('Detalle de presupuesto'); ?></th>
			<th><?php echo  ('Principales hitos de la actividad'); ?></th>
			<th><?php echo  ('Incidencias de la actividad'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php
				echo '<tr>';
					echo '<td>'.$activity['Activity']['id'].'</td>';
					echo '<td>';
					if(is_array($activity['Activity']['Usuario'])){
						foreach ($activity['Activity']['Usuario'] as $row) {
							echo $row['nombre'].' '.$row['apellidos'];
						}
					}
					echo '</td>';
					echo '<td>'.$activity['Activity']['nombre'].'</td>';
					echo '<td>';
					if($activity['Activity']['actividad_hito']<>1){
						echo 'No';
					}else{
						echo 'Si';
					}
					echo '</td>';
					echo '<td>';
					if($activity['Activity']['origen_del_proyecto']=='1'){
						echo 'Demanda Externa';
					}else{
						echo 'Demanda Interna';
					}
					echo '</td>';
					echo '<td>'.$activity['Activity']['descripcion_actividad'].'</td>';
					echo '<td>';
					if(is_array($activity['Headquarter']) && count($activity['Headquarter'])>0){
						if(count($activity['School'])>0 || count($activity['Central'])>0){
							echo 'Sede - ';
						}else{
							echo 'Sede';
						}
						
					}
					if(is_array($activity['School']) && count($activity['School'])>0){
						if(count($activity['Headquarter'])>0 || count($activity['Central'])>0){
							echo 'Escuela - ';
						}else{
							echo 'Escuela';
						}
					}
					if(is_array($activity['Central']) && count($activity['Central'])>0){
						if(count($activity['Headquarter'])>0 || count($activity['School'])>0){
							echo '�reas Centrales - ';
						}else{
							echo '�reas Centrales';
						}
					}
					echo '</td>';
					echo '<td>';
					if(is_array($activity['School'])){
						$i=0;
						foreach($activity['School'] as $sede) {
							$i++;
							if(count($activity['School'])==$i){
								echo $sede['nombre_escuela'];
							}else{
								echo $sede['nombre_escuela']." - ";
							}
						}
					}
					echo '</td>';
					echo '<td>';
					if(is_array($activity['Headquarter'])){
						$i=0;
						foreach($activity['Headquarter'] as $sede) {
							$i++;
							if(count($activity['Headquarter'])==$i){
								echo $sede['nombre_sede'];
							}else{
								echo $sede['nombre_sede']." - ";
							}
		 				}	
					}
					echo '</td>';
					
					echo '<td>';
					if(is_array($activity['Central'])){
						$i=0;
						foreach($activity['Central'] as $sede) {
							$i++;
							if(count($activity['Central'])==$i){
								echo $sede['nombre'];
							}else{
								echo $sede['nombre']." - ";
							}
						}
					}
					echo '</td>';
					echo '<td>'.$activity['Activity']['proyectoglobal'].'</td>';
					echo '<td>'.$this->Time->format($activity['Activity']['fechainicio_proyecto'], '%d-%m-%Y').' al '.$this->Time->format($activity['Activity']['fechafinal_proyecto'], '%d-%m-%Y').'</td>';
					echo '<td>'.$activity['Activity']['responsable'].'</td>';
					echo '<td>'.$activity['Activity']['cargoresponsable'].'</td>';
					echo '<td><a href="mailto:'.$activity['Activity']['mail_responsable'].'" target="_blank">'.$activity['Activity']['mail_responsable'].'</td>';
					echo '<td>'.$activity['Activity']['convenio_si_no'].'</td>';
					echo '<td>';
					if($activity['Activity']['convenioindefinido']=='1'){
						echo $this->Time->format($activity['Activity']['convenioinicio'], '%d-%m-%Y').' - Indefinido';
					}elseif($activity['Activity']['convenio_si_no']!=''){
						echo $this->Time->format($activity['Activity']['convenioinicio'], '%d-%m-%Y').' al '.$this->Time->format($activity['Activity']['conveniofin'], '%d-%m-%Y');
					}
					echo '</td>';
					echo '<td>'.$activity['Activity']['descripcionconvenio'].'</td>';
					echo '<td>'.$activity['Activity']['objetivo_general'].'</td>';
					echo '<td>';
					if(is_array($activity['Objetive'])){
						$i=0;
						foreach($activity['Objetive'] as $objetivo) {
							$i++;
							if(count($activity['Objetive'])==$i){
								echo $objetivo['objetivo'];
							}else{
								echo $objetivo['objetivo']." - ";
							}

		 			   	}
					}
	 			   	echo '</td>';
					echo '<td>';
					if(is_array($activity['Beginning'])){
						$i=0;
						foreach($activity['Beginning'] as $principio) {
							$i++;
							if(count($activity['Beginning'])==$i){
								echo $principio['principio'];
							}else{
								echo $principio['principio']." - ";
							}
						}
					}
					echo '</td>';
					echo '<td>'.$activity['Activity']['justificacionprincipios'].'</td>';
					echo '<td>';
					if(is_array($activity['Internal'])){
						$i=0;
						foreach($activity['Internal'] as $internal) {
							$i++;
							if(count($activity['Internal'])==$i){
								echo $internal['publico'];
							}else{
								echo $internal['publico']." - ";
							}
			 			}
			 			
					}
					echo '</td>';
					echo '<td>'.$activity['Activity']['numeroparticipantes'].'</td>';
					echo '<td>';
		 			if(is_array($activity['External'])){
		 				$i=0;
		 				foreach($activity['External'] as $external) {
		 					$i++;
		 					if(count($activity['External'])==$i){
		 						echo $external['publicoexterno'];
		 					}else{
		 						echo $external['publicoexterno']." - ";
		 					}
		 				}
		 			}
					echo '</td>';
					echo '<td>'.$activity['Activity']['numeroexternos'].'</td>';
					echo '<td>'.$activity['Activity']['beneficiados'].'</td>';
					echo '<td>';
					if(is_array($activity['Scope'])){
						$i=0;
						foreach($activity['Scope'] as $ambito) {
							$i++;
							if(count($activity['Scope'])==$i){
								echo $ambito['ambito'];	
							}else{
								echo $ambito['ambito']." - ";
							}
							
						}
					}
					echo '</td>';
					echo '<td>';
					if(is_array($activity['Area'])){
						$i=0;
						foreach($activity['Area'] as $entidad) {
							$i++;
							if(count($activity['Area'])==$i){
								echo $entidad['area'];
							}else{
								echo $entidad['area']." - ";
							}
						}
					}
					echo '</td>';
					echo '<td>';
					if(is_array($activity['Entity'])){
						$i=0;
						foreach($activity['Entity'] as $entidad) {
							$i++;
							if(count($activity['Entity'])==$i){
								echo $entidad['entidades'];
							}else{
								echo $entidad['entidades']." - ";
							}
						}
					}
					echo '</td>';
					echo '<td>'.$activity['Activity']['detalleentidades'].'</td>';

					echo '<td>';
					if(is_array($activity['ActivityInstitution'])){
						$i=0;
						foreach($activity['ActivityInstitution'] as $institution) {
							$i++;
							if(count($activity['ActivityInstitution'])==$i){
								echo $institution['nombre'];
							}else{
								echo $institution['nombre']." - ";
							}
		 					
		 			   	}
					}
					echo '</td>';
					echo '<td>';
					if(is_array($activity['ActivityInstitution'])){
						$i=0;
						foreach($activity['ActivityInstitution'] as $institution) {
							$i++;
							if(count($activity['ActivityInstitution'])==$i){
								echo $institution['cargo'];
							}else{
								echo $institution['cargo']." - ";
							}
		 			   	}
					}
					echo '</td>';
					echo '<td>';
					if(is_array($activity['ActivityInstitution'])){
						$i=0;
						foreach($activity['ActivityInstitution'] as $institution) {
							$i++;
							if(count($activity['ActivityInstitution'])==$i){
								echo $institution['contacto'];
							}else{
								echo $institution['contacto']." - ";
							}
		 			   	}
					}
					echo '</td>';

					echo '<td>'.$activity['Activity']['costoactividad'].'</td>';
					echo '<td>';
					if ($activity['Activity']['financiamiento_i_e_m'] == 0){
						echo 'Interna';
					}elseif ($activity['Activity']['financiamiento_i_e_m'] == 1){
						echo 'Externa';
					}elseif ($activity['Activity']['financiamiento_i_e_m'] == 2){
						echo 'Mixta';
					}

					echo '</td>';
					echo '<td>';
					if ($activity['Activity']['financiamiento_i_e_m'] == 0) {
						echo utf8_decode(' <b>Direcci�n Central:').' </b>'.$activity['Activity']['direccioncentral'].'% -';
		 				echo ' <b>Sedes: </b>'.$activity['Activity']['sedesporcentaje'].'% -';
		 				echo ' <b>Escuelas: </b>'.$activity['Activity']['escuelasporcentaje'].'% ';
		 			}
		 			
					echo '</td>';
					echo '<td>';
					if ($activity['Activity']['financiamiento_i_e_m'] == 1) {
		 				echo ' <b>Fondos Concursables: </b>'.$activity['Activity']['fondoconcursable'].'% - ';
		 				echo ' <b>Entorno Productivo: </b>'.$activity['Activity']['entornoproductivo'].'% - ';
		 				echo '<b>'.utf8_decode('Entidades Acad�micas').': </b>'.$activity['Activity']['entidadesacademicas'].'% - ';
		 				echo ' <b>Donaciones: </b>'.$activity['Activity']['donacionesporcentaje'].'% ';
		 			}
		 			echo '</td>';
					echo '<td>';
		 			if ($activity['Activity']['financiamiento_i_e_m'] == 2) {
		 				echo utf8_decode(' <b>Direcci�n Central:').' </b>'.$activity['Activity']['direccioncentral'].'% -';
		 				echo ' <b>Sedes: </b>'.$activity['Activity']['sedesporcentaje'].'% -';
		 				echo ' <b>Escuelas: </b>'.$activity['Activity']['escuelasporcentaje'].'% ';
		 				echo ' <b>Fondos Concursables: </b>'.$activity['Activity']['fondoconcursable'].'% - ';
		 				echo ' <b>Entorno Productivo: </b>'.$activity['Activity']['entornoproductivo'].'% - ';
		 				echo ' <b>Entidades Acad�micas: </b>'.$activity['Activity']['entidadesacademicas'].'% - ';
		 				echo ' <b>Donaciones: </b>'.$activity['Activity']['donacionesporcentaje'].'% ';
		 			}
					echo '</td>';
					echo '<td>'.$activity['Activity']['detallepresupuesto'].'</td>';
					echo '<td>';
					if(is_array($activity['Milestone'])){
						$i=0;
						foreach($activity['Milestone'] as $institution) {
							$i++;
							if(count($activity['Milestone'])==$i){
								echo $institution['objetivo'];
							}else{
								echo $institution['objetivo']." - ";
							}
		 			   	}
					}
					echo '</td>';
					echo '<td>';
					if($activity['Activity']['in_activosocial']=='1'){
						echo utf8_decode('Fortalece a la instituci�n como un actor social relevante <br>');
					}
					if($activity['Activity']['in_desarrolloacademico']=='1'){
						echo utf8_decode('Aporta al desarrollo acad�mico profesional y formaci�n de los estudiantes <br>');
					}
					if($activity['Activity']['in_empleabilidad']=='1'){
						echo utf8_decode('Aumenta las posibilidades de empleabilidad de los titulados <br>');
					}
					echo '</td>';
					echo '</tr>';
				
			?>
		</tbody>
	</table>
</body></html>
<?php else: ?>
	<html>
<head>
   <meta http-equiv="content-type" content="text/html; ISO-8859-1">
</head>

<body>
	<table border="1">
		<thead>
			<tr>
			<th><?php echo  mb_convert_encoding('ID actividad','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Nombre de usuario','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Nombre de Actividad','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Actividad Hito','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Origen de proyecto','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Breve descripci�n de la Actividad','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Pertenece','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Escuelas a las que pertenece','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Sedes a las que pertenece','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('�reas centrales a las que pertenece','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Nombre del proyecto en el qu� se enmarca','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Ingresar Fechas','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Nombre del responsable de la actividad','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Cargo','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Mail','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Convenio al que pertenece la actividad','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Vigencia del convenio','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Breve descripci�n del convenio','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Objetivo General de la actividad','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Objetivos espec�ficos','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Principios de la pol�tica que aborda','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Justificaci�n de principios abordados','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('P�blico abordado Interno','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('N�mero de participantes aprox.','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('P�blico abordado Externo','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('N�mero de participantes aprox.','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Beneficiados de la implementaci�n del proyecto','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('�mbitos de acci�n en los que se enmarca la actividad','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Asocie el �rea a la que m�s se asimile su actividad (elija una)','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Entidades Relacionadas','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Detalle Entidades','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Nombre de la entidad con la que se relaciona','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Cargo','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Detalle datos de contacto','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Costo de la actividad','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Fuentes de financiamiento','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Fuente de financiamiento Interno','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Fuente de financiamiento Externo','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Fuente de financiamiento Mixto','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Detalle de presupuesto','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Principales hitos de la actividad','UTF-8', 'ISO-8859-1'); ?></th>
			<th><?php echo  mb_convert_encoding('Incidencias de la actividad','UTF-8', 'ISO-8859-1'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php
				echo '<tr>';
					echo '<td>'.$activity['Activity']['id'].'</td>';
					echo '<td>';
					if(is_array($activity['Activity']['Usuario'])){
						foreach ($activity['Activity']['Usuario'] as $row) {
							echo $row['nombre'].' '.$row['apellidos'];
						}
					}
					echo '</td>';
					echo '<td>'.mb_convert_encoding($activity['Activity']['nombre'],'UTF-8', 'ISO-8859-1').'</td>';
					echo '<td>';
					if($activity['Activity']['actividad_hito']<>1){
						echo 'No';
					}else{
						echo 'Si';
					}
					echo '</td>';
					echo '<td>';
					if($activity['Activity']['origen_del_proyecto']=='1'){
						echo 'Demanda Externa';
					}else{
						echo 'Demanda Interna';
					}
					echo '</td>';
					echo '<td>'.mb_convert_encoding($activity['Activity']['descripcion_actividad'],'UTF-8', 'ISO-8859-1').'</td>';
					echo '<td>';
					
					if(is_array($activity['Headquarter']) && count($activity['Headquarter'])>0){
						if(count($activity['School'])>0 || count($activity['Central'])>0){
							echo 'Sede - ';
						}else{
							echo 'Sede';
						}
						
					}
					if(is_array($activity['School']) && count($activity['School'])>0){
						if(count($activity['Headquarter'])>0 || count($activity['Central'])>0){
							echo 'Escuela - ';
						}else{
							echo 'Escuela';
						}
					}
					if(is_array($activity['Central']) && count($activity['Central'])>0){
						if(count($activity['Headquarter'])>0 || count($activity['School'])>0){
							echo '�reas Centrales - ';
						}else{
							echo '�reas Centrales';
						}
					}

					echo '</td>';
					echo '<td>';
					if(is_array($activity['School'])){
						$i=0;
						foreach($activity['School'] as $sede) {
							$i++;
							if(count($activity['School']) == $i){
								echo mb_convert_encoding($sede['nombre_escuela'],'UTF-8', 'ISO-8859-1');
							}else{
								echo mb_convert_encoding($sede['nombre_escuela'],'UTF-8', 'ISO-8859-1')." - ";
							}
						}
					}
					echo '</td>';
					echo '<td>';
					if(is_array($activity['Headquarter'])){
						$i=0;
						foreach($activity['Headquarter'] as $sede) {
							$i++;
							if(count($activity['Headquarter'])==$i){
								echo mb_convert_encoding($sede['nombre_sede'],'UTF-8', 'ISO-8859-1');
							}else{
								echo mb_convert_encoding($sede['nombre_sede'],'UTF-8', 'ISO-8859-1')." - ";
							}
		 				}
					}
					echo '</td>';
					
					echo '<td>';
					if(is_array($activity['Central'])){
						$i=0;
						foreach($activity['Central'] as $sede) {
							$i++;
							if(count($activity['Central'])==$i){
								echo mb_convert_encoding($sede['nombre'],'UTF-8', 'ISO-8859-1');
							}else{
								echo mb_convert_encoding($sede['nombre'],'UTF-8', 'ISO-8859-1')." - ";
							}
						}
					}
					echo '</td>';
					echo '<td>'.mb_convert_encoding($activity['Activity']['proyectoglobal'],'UTF-8', 'ISO-8859-1').'</td>';
					echo '<td>'.$this->Time->format($activity['Activity']['fechainicio_proyecto'], '%d-%m-%Y').' al '.$this->Time->format($activity['Activity']['fechafinal_proyecto'], '%d-%m-%Y').'</td>';
					echo '<td>'.mb_convert_encoding($activity['Activity']['responsable'],'UTF-8', 'ISO-8859-1').'</td>';
					echo '<td>'.mb_convert_encoding($activity['Activity']['cargoresponsable'],'UTF-8', 'ISO-8859-1').'</td>';
					echo '<td><a href="mailto:'.$activity['Activity']['mail_responsable'].'" target="_blank">'.$activity['Activity']['mail_responsable'].'</td>';
					echo '<td>'.mb_convert_encoding($activity['Activity']['convenio_si_no'],'UTF-8', 'ISO-8859-1').'</td>';
					echo '<td>';
					if($activity['Activity']['convenioindefinido']=='1'){
						echo $this->Time->format($activity['Activity']['convenioinicio'], '%d-%m-%Y').' - Indefinido';
					}elseif($activity['Activity']['convenio_si_no']!=''){
						echo $this->Time->format($activity['Activity']['convenioinicio'], '%d-%m-%Y').' al '.$this->Time->format($activity['Activity']['conveniofin'], '%d-%m-%Y');
					}
					echo '</td>';
					echo '<td>'.mb_convert_encoding($activity['Activity']['descripcionconvenio'],'UTF-8', 'ISO-8859-1').'</td>';
					echo '<td>'.mb_convert_encoding($activity['Activity']['objetivo_general'],'UTF-8', 'ISO-8859-1').'</td>';
					echo '<td>';
					if(is_array($activity['Objetive'])){
						foreach($activity['Objetive'] as $objetivo) {
		 					echo $objetivo['objetivo']." - ";

		 			   	}
					}
	 			   	echo '</td>';
					echo '<td>';
					if(is_array($activity['Beginning'])){
						$i=0;
						foreach($activity['Beginning'] as $principio) {
							$i++;
							if(count($activity['Beginning'])==$i){
								echo mb_convert_encoding($principio['principio'],'UTF-8', 'ISO-8859-1');
							}else{
								echo mb_convert_encoding($principio['principio'],'UTF-8', 'ISO-8859-1')." - ";
							}
						}
					}
					echo '</td>';
					echo '<td>'.mb_convert_encoding($activity['Activity']['justificacionprincipios'],'UTF-8', 'ISO-8859-1').'</td>';
					echo '<td>';
					if(is_array($activity['Internal'])){
						$i=0;
						foreach($activity['Internal'] as $internal) {
							$i++;
							if(count($activity['Internal'])==$i){
								echo mb_convert_encoding($internal['publico'],'UTF-8', 'ISO-8859-1');
							}else{
								echo mb_convert_encoding($internal['publico'],'UTF-8', 'ISO-8859-1')." - ";
							}
			 			}
			 			
					}
					echo '</td>';
					echo '<td>'.mb_convert_encoding($activity['Activity']['numeroparticipantes'],'UTF-8', 'ISO-8859-1').'</td>';
					echo '<td>';
		 			if(is_array($activity['External'])){
		 				$i=0;
		 				foreach($activity['External'] as $external) {
		 					$i++;
		 					if(count($activity['External'])==$i){
		 						echo mb_convert_encoding($external['publicoexterno'],'UTF-8', 'ISO-8859-1');
		 					}else{
		 						echo mb_convert_encoding($external['publicoexterno'],'UTF-8', 'ISO-8859-1')." - ";
		 					}
		 				}
		 			}
					echo '</td>';
					echo '<td>'.mb_convert_encoding($activity['Activity']['numeroexternos'],'UTF-8', 'ISO-8859-1').'</td>';
					echo '<td>'.mb_convert_encoding($activity['Activity']['beneficiados'],'UTF-8', 'ISO-8859-1').'</td>';
					echo '<td>';
					if(is_array($activity['Scope'])){
						$i=0;
						foreach($activity['Scope'] as $ambito) {
							$i++;
							if(count($activity['Scope'])==$i){
								echo mb_convert_encoding($ambito['ambito'],'UTF-8', 'ISO-8859-1');
							}else{
								echo mb_convert_encoding($ambito['ambito'],'UTF-8', 'ISO-8859-1')." - ";
							}
						}
					}
					echo '</td>';
					echo '<td>';
					if(is_array($activity['Area'])){
						$i=0;
						foreach($activity['Area'] as $entidad) {
							$i++;
							if(count($activity['Area'])==$i){
								echo mb_convert_encoding($entidad['area'],'UTF-8', 'ISO-8859-1');
							}else{
								echo mb_convert_encoding($entidad['area'],'UTF-8', 'ISO-8859-1')." - ";
							}
						}
					}
					echo '</td>';
					echo '<td>';
					if(is_array($activity['Entity'])){
						$i=0;
						foreach($activity['Entity'] as $entidad) {
							$i++;
							if(count($activity['Entity'])==$i){
								echo mb_convert_encoding($entidad['entidades'],'UTF-8', 'ISO-8859-1');
							}else{
								echo mb_convert_encoding($entidad['entidades'],'UTF-8', 'ISO-8859-1')." - ";
							}
						}
					}
					echo '</td>';
					echo '<td>'.mb_convert_encoding($activity['Activity']['detalleentidades'],'UTF-8', 'ISO-8859-1').'</td>';

					echo '<td>';
					if(is_array($activity['ActivityInstitution'])){
						$i=0;
						foreach($activity['ActivityInstitution'] as $institution) {
							$i++;
							if(count($activity['ActivityInstitution'])==$i){
								echo mb_convert_encoding($institution['nombre'],'UTF-8', 'ISO-8859-1');
							}else{
								echo mb_convert_encoding($institution['nombre'],'UTF-8', 'ISO-8859-1')." - ";
							}
		 			   	}
					}
					echo '</td>';
					echo '<td>';
					if(is_array($activity['ActivityInstitution'])){
						$i=0;
						foreach($activity['ActivityInstitution'] as $institution) {
							$i++;
							if(count($activity['ActivityInstitution'])==$i){
								echo mb_convert_encoding($institution['cargo'],'UTF-8', 'ISO-8859-1');
							}else{
								echo mb_convert_encoding($institution['cargo'],'UTF-8', 'ISO-8859-1')." - ";
							}
		 			   	}
					}
					echo '</td>';
					echo '<td>';
					if(is_array($activity['ActivityInstitution'])){
						$i=0;
						foreach($activity['ActivityInstitution'] as $institution) {
							$i++;
							if(count($activity['ActivityInstitution'])==$i){
								echo mb_convert_encoding($institution['contacto'],'UTF-8', 'ISO-8859-1');
							}else{
								echo mb_convert_encoding($institution['contacto'],'UTF-8', 'ISO-8859-1')." - ";
							}
		 			   	}
					}
					echo '</td>';

					echo '<td>'.mb_convert_encoding($activity['Activity']['costoactividad'],'UTF-8', 'ISO-8859-1').'</td>';
					echo '<td>';
					if ($activity['Activity']['financiamiento_i_e_m'] == 0){
						echo 'Interna';
					}elseif ($activity['Activity']['financiamiento_i_e_m'] == 1){
						echo 'Externa';
					}elseif ($activity['Activity']['financiamiento_i_e_m'] == 2){
						echo 'Mixta';
					}

					echo '</td>';
					echo '<td>';
					if ($activity['Activity']['financiamiento_i_e_m'] == 0) {
						echo ' <b>Direcci�n Central: </b>'.mb_convert_encoding($activity['Activity']['direccioncentral'],'UTF-8', 'ISO-8859-1').'%  - ';
		 				echo ' <b>Sedes: </b>'.mb_convert_encoding($activity['Activity']['sedesporcentaje'],'UTF-8', 'ISO-8859-1').'%  - ';
		 				echo ' <b>Escuelas: </b>'.mb_convert_encoding($activity['Activity']['escuelasporcentaje'],'UTF-8', 'ISO-8859-1').'% ';
		 			}
		 			
					echo '</td>';
					echo '<td>';
					if ($activity['Activity']['financiamiento_i_e_m'] == 1) {
		 				echo ' <b>Fondos Concursables: </b>'.mb_convert_encoding($activity['Activity']['fondoconcursable'],'UTF-8', 'ISO-8859-1').'% ;';
		 				echo ' <b>Entorno Productivo: </b>'.mb_convert_encoding($activity['Activity']['entornoproductivo'],'UTF-8', 'ISO-8859-1').'% ;';
		 				echo ' <b>Entidades Acad�micas: </b>'.mb_convert_encoding($activity['Activity']['entidadesacademicas'],'UTF-8', 'ISO-8859-1').'% -';
		 				echo ' <b>Donaciones: </b>'.mb_convert_encoding($activity['Activity']['donacionesporcentaje'],'UTF-8', 'ISO-8859-1').'% ';
		 			}
					echo '</td>';
					echo '<td>';
					if ($activity['Activity']['financiamiento_i_e_m'] == 2) {
		 				echo ' <b>Direcci�n Central: </b>'.mb_convert_encoding($activity['Activity']['direccioncentral'],'UTF-8', 'ISO-8859-1').'% ;';
		 				echo ' <b>Sedes: </b>'.mb_convert_encoding($activity['Activity']['sedesporcentaje'],'UTF-8', 'ISO-8859-1').'% ;';
		 				echo ' <b>Escuelas: </b>'.mb_convert_encoding($activity['Activity']['escuelasporcentaje'],'UTF-8', 'ISO-8859-1').'% -';
		 				echo ' <b>Fondos Concursables: </b>'.mb_convert_encoding($activity['Activity']['fondoconcursable'],'UTF-8', 'ISO-8859-1').'% ';
		 				echo ' <b>Entorno Productivo: </b>'.mb_convert_encoding($activity['Activity']['entornoproductivo'],'UTF-8', 'ISO-8859-1').'% ';
		 				echo ' <b>Entidades Acad�micas: </b>'.mb_convert_encoding($activity['Activity']['entidadesacademicas'],'UTF-8', 'ISO-8859-1').'% ';
		 				echo ' <b>Donaciones: </b>'.mb_convert_encoding($activity['Activity']['donacionesporcentaje'],'UTF-8', 'ISO-8859-1').'% ';
		 			}
					echo '</td>';
					echo '<td>'.mb_convert_encoding($activity['Activity']['detallepresupuesto'],'UTF-8', 'ISO-8859-1').'</td>';
					echo '<td>';
					if(is_array($activity['Milestone'])){
						$i=0;
						foreach($activity['Milestone'] as $institution) {
							$i++;
							if(count($activity['Milestone'])==$i){
								echo mb_convert_encoding($institution['objetivo']." - ",'UTF-8', 'ISO-8859-1');
							}else{
								echo mb_convert_encoding($institution['objetivo']." - ",'UTF-8', 'ISO-8859-1')." - ";
							}
		 			   	}
					}
					echo '</td>';
					echo '<td>';
					if($activity['Activity']['in_activosocial']=='1'){
						echo 'Fortalece a la instituci�n como un actor social relevante <br>';
					}
					if($activity['Activity']['in_desarrolloacademico']=='1'){
						echo 'Aporta al desarrollo acad�mico profesional y formaci�n de los estudiantes <br> ';
					}
					if($activity['Activity']['in_empleabilidad']=='1'){
						echo 'Aumenta las posibilidades de empleabilidad de los titulados <br> ';
					}
					echo '</td>';
					echo '</tr>';
				
			?>
		</tbody>
	</table>
</body></html>
<?php endif;?>