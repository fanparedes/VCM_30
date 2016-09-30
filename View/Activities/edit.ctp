                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Nueva Actividad</div> 
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="<?php echo $this->webroot.'home/usuario'; ?>">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                   
                        <li class="active"><i class="fa fa-file-o fa-fw"></i>Registra una nueva actividad</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--BREADCRUMB-->
                <!-- COMIENZA Contenido-->
              <div class="page-content">
              <?php echo $this->Form->create('Activity', array('id'=> 'form_actividad', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
                <div id="tab-general">
                        <div class="row mbl">

                            <div class="col-lg-12">
                                  
                              <div class="row">
                    <div class="col-md-12">

                        <div class="row mtl">
                            <div class="col-md-3">
                            <!--CARGAR IMAGEN REFERENCIAL DE ACTIVIDAD-->
                                <div class="form-group">
                                 
                                
                                    <div class="text-center mbl thumbnail">
                                    <?php 									
                                    if (isset($this->request->data['Image']['0'])) { ?>
                                      <img src="<?php echo $abs_base;?>uploads/<?php echo $this->request->data['Image'][0]['nombre']; ?>"/>
                                    <?php }  else { ?>
                                      <img src="<?php echo $abs_base;?>images/imagen_default_vcm.jpg"/>
                                    <?php } ?>


                                    </div>
                                    <div class="text-center mbl cargaArchivos">

                                        <input name="data[Activity][imagen]" id="Activity_imagen" size="350" type="file" name="pic" class="btn btn-green" style="margin-left: 10px;" >

                                    </div><!-- ESTA IMAGEN SER� OPTATIVA, SINO SE CARGAR� UN thumbnail-->
                                </div>
           
                            </div>
                             <!-- IMAGEN REFERENCIAL DE ACTIVIDAD-->
 							<!-- COMIENZA FORMULARIO-->
                            <div class="col-md-9">
                               
                                <div id="generalTabContent" class="tab-content">
                                    <div id="tab-edit" class="tab-pane fade in active">  <h3>Cargar actividad</h3>

                                            
                                   <a href="<?php echo $abs_base.'activities/delete/'.$this->request->data['Activity']['id']; ?>" class="btn btn-red pull-right"  style="margin-top:-47px;">Eliminar Ficha</a><!-- MIENTRAS LA FICHA SE GUARDA, DEBE APARECER ESTE BOT�N-->


										<!--NOMBRE-->
                                    
                                        
                                            
                                          <hr/>
                                            

                                          <div class="form-group">
                                            <label class="col-sm-3 control-label">Nombre de Actividad</label> 

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-8">
														<input maxlength="110" name="data[Activity][nombre]" type="text" placeholder="" class="form-control" value="<?php echo $this->data['Activity']['nombre']; ?>"/>
                                                        </div>
                                                        <div class="col-xs-4">
                                                                <label>

                                                                    <input name="data[Activity][actividad_hito]" tabindex="5" type="checkbox" 
                                                                    <?php
                                                                    if ($this->data['Activity']['actividad_hito'] == 1) {
                                                                        echo 'checked="checked"';
                                                                      } ?>
                                                                    />


                                                                    <input name="data[Activity][id]" tabindex="5" type="hidden" value="<?php echo $id_activity; ?>"/>
                                                                    &nbsp; Actividad Hito </label>&nbsp;<span data-toggle="tooltip" title="Actividad de car�cter estrat�gico y clave para el desarrollo de los objetivos del �rea e institucionales" class="badge badge-info pull-right" style="font-size:10px;margin-right: 10px;">?</span></div>
                                                    </div>
                                                </div>
                                          </div>

                                                        
                                           <div class="form-group">
                                            <label class="col-sm-3 control-label">Origen de proyecto<br> </label>
                                                 <div class="col-sm-9 controls">
                                                    <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="checkbox">
                                                                <label><!-- esta opci�n siempre debe estar marcada-->
                                                                    <input name="data[Activity][demanda_interna]" id="demanda_interna" tabindex="5" type="checkbox"
                                                                    <?php if ($this->data['Activity']['origen_del_proyecto'] == '0') { ?>
                                                                    checked="checked"
                                                                    <?php } ?>
                                                                    />
                                                                    &nbsp;Demanda Interna</label></div>
                                                    </div> 
                                                    <div class="col-xs-5">
                                                        <div class="checkbox">
                                                                <label>
                                                                    <input name="data[Activity][demanda_externa]" id="demanda_externa" tabindex="5" type="checkbox" 
                                                                    <?php if ($this->data['Activity']['origen_del_proyecto'] == '1') { ?>
                                                                    checked="checked"
                                                                    <?php } ?>

                                                                    />
                                                                    &nbsp;Demanda Externa </label>&nbsp;<span data-toggle="tooltip" title="Proyecto enmarcado para ser capaz de ser medido y gestionado en sus resultados" class="badge badge-info pull-right" style="font-size:10px;margin-right: 10px;">?</span></div>
                                                    </div> 
                                                                  
                                                    </div>
                                                </div>
                                          </div>
<script>

$('#demanda_interna').on('ifChecked', function(event){
  $('#demanda_externa').iCheck('uncheck');
});

$('#demanda_externa').on('ifChecked', function(event){
  $('#demanda_interna').iCheck('uncheck');
});



</script>
                                            <div class="form-group">
                                            <label class="col-sm-3 control-label">Breve descripci�n de la Actividad</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><textarea maxlength="600" name="data[Activity][descripcion_actividad]" rows="3" class="form-control" placeholder="M�ximo 200 car�cteres"><?php echo $this->data['Activity']['descripcion_actividad']; ?></textarea></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                           
                                           <!--PERTENECE-->
                                           <div class="form-group">
                                            <label class="col-sm-3 control-label">Pertenece<br> </label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="checkbox">
                                                        <!--SEGUN LA OPCI�N MARCADA, SE DEBER� DESPLEGAR EL MEN� DE ESCUELAS, SEDES O �REAS PARA SELECCIONAR-->
                                                                <label>
                                                                    <input  id="si_sedes" tabindex="5" type="checkbox" 
                                                                    <?php if ($this->data['Headquarter']) { ?>
                                                                    checked="checked"
                                                                    <?php } ?>
                                                                    />
                                                                    &nbsp; Sedes</label></div></div> 
                                           <div class="col-xs-3">
                                                        <div class="checkbox">
                                                                <label>
                                                                    <input  id="si_escuelas" tabindex="3" type="checkbox" 
                                                                    <?php if ($this->data['School']) { ?>
                                                                    checked="checked"
                                                                    <?php } ?>

                                                                    />
                                                                    &nbsp; Escuelas</label></div></div> 
                                                      <div class="col-xs-4">
                                                        <div class="checkbox">
                                                                <label>
                                                                    <input  id="si_areas" tabindex="3" type="checkbox" 
                                                                    <?php if ($this->data['Central']) { ?>
                                                                    checked="checked"
                                                                    <?php } ?>

                                                                    />
                                                                    &nbsp; �reas Centrales</label></div></div> 
                                                     
                                                    </div>
                                                </div>
                                            </div>

<script>

$('#si_sedes').on('ifChecked', function(event){
  $('#sedes').fadeIn(500);
});

$('#si_sedes').on('ifUnchecked', function(event){
  $('#sedes').fadeOut(500);
  $('.sedes').iCheck('uncheck');
});

$('#si_escuelas').on('ifChecked', function(event){
  $('#escuelas').fadeIn(500);
});

$('#si_escuelas').on('ifUnchecked', function(event){
  $('#escuelas').fadeOut(500);
  $('.escuelas').iCheck('uncheck');
});

$('#si_areas').on('ifChecked', function(event){
  $('#areas').fadeIn(500);
});

$('#si_areas').on('ifUnchecked', function(event){
  $('#areas').fadeOut(500);
  $('.areas').iCheck('uncheck');
});





</script>                                         

                                    <!--areas-->
                                           <!-- DEBER� DESPLEGAR ESTE MEN� SI SELECCION� areas centrales--> 
                                            <div id="areas" 
                                                                    <?php if (!$this->data['Central']) { ?>
                                                                    style="display: none;"
                                                                    <?php } ?>
                                              class="form-group">
                                            <label class="col-sm-3 control-label">Escoja las �reas centrales a las que pertenece<br> </label> 

                                                <div class="col-sm-9 controls">
                                                    <div class="row">

                                                    <?php
                                                    $cont = 0;
                                                    foreach($centrals as $key_central => $central) {  

                                                        if (($cont % 2) == 0) {?>
                                                          <div class="col-xs-6" style="clear: left;">
                                                                <div class="checkbox">
                                                                        <label style="text-transform: uppercase">
                                                                            <input name="data[Activity][centrales][<?php echo $key_central;?>]" class="areas" tabindex="5" type="checkbox" 
                                                                            <?php
                                                                            if (in_array($key_central, $listado_central)) { 
                                                                                echo 'checked = "checked"';
                                                                            } ?>

                                                                            />
                                                                            &nbsp; <?php echo $central; ?></label>
                                                                </div>
                                                            </div> 
                                                        <?php } else { ?>
                                                          <div class="col-xs-4" style="clear: right;">
                                                            <div class="checkbox">
                                                                      <label style="text-transform: uppercase">
                                                                          <input name="data[Activity][centrales][<?php echo $key_central;?>]" class="areas" tabindex="5" type="checkbox" 
                                                                            <?php
                                                                            if (in_array($key_central, $listado_central)) { 
                                                                                echo 'checked = "checked"';
                                                                            } ?>

                                                                          />
                                                                          &nbsp; <?php echo $central; ?></label>
                                                            </div>
                                                          </div>
                                                        <?php } ?>

                                                    <?php 
                                                    $cont++;
                                                    } ?>

                                                    
                                                    </div>
                                                </div>
                                            </div>
                                         <!--TERMINO Areas-->

                                         <!--ESCUELAS-->
                                             <div id="escuelas" 
                                                                    <?php if (!$this->data['School']) { ?>
                                                                    style="display: none;"
                                                                    <?php } ?>

                                             class="form-group">
                                            <label class="col-sm-3 control-label">Marque las escuelas a las que pertenece<br> </label> <!-- DEBER� DESPLEGAR ESTE MEN� SI SELECCION� ESCUELAS-->

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                    <?php
                                                    $cont = 0;
                                                    foreach($schools as $key_school => $school) {  

                                                        if (($cont % 2) == 0) {?>
                                                          <div class="col-xs-6" style="clear: left;">
                                                                <div class="checkbox">
                                                                        <label style="text-transform: uppercase">
                                                                            <input name="data[Activity][escuelas][<?php echo $key_school;?>]" class="escuelas" tabindex="5" type="checkbox" 
                                                                            <?php
                                                                            if (in_array($key_school, $listado_escuelas)) { 
                                                                                echo 'checked = "checked"';
                                                                            } ?>

                                                                            />
                                                                            &nbsp; <?php echo (mb_strtoupper($school)); ?></label>
                                                                </div>
                                                            </div> 
                                                        <?php } else { ?>
                                                          <div class="col-xs-4" style="clear: right;">
                                                            <div class="checkbox">
                                                                      <label style="text-transform: uppercase">
                                                                          <input name="data[Activity][escuelas][<?php echo $key_school;?>]" class="escuelas" tabindex="5" type="checkbox" 
                                                                            <?php
                                                                            if (in_array($key_school, $listado_escuelas)) { 
                                                                                echo 'checked = "checked"';
                                                                            } ?>
                                                                          />
                                                                          &nbsp; <?php echo (mb_strtoupper($school)); ?></label>
                                                            </div>
                                                          </div>
                                                        <?php } ?>

                                                    <?php 
                                                    $cont++;
                                                    } ?>


                                                    </div>
                                                </div>
                                            </div>
                                         <!--TERMINO ESCUELAS-->
                                         <!--SEDES-->
                                           <!-- DEBER� DESPLEGAR ESTE MEN� SI SELECCION� sedes--> 
                                           <div id="sedes" 
                                                                    <?php if (!$this->data['Headquarter']) { ?>
                                                                    style="display: none;"
                                                                    <?php } ?>

                                           class="form-group">
                                            <label class="col-sm-3 control-label">Escoja las Sedes a las que pertenece<br> </label> 
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                    <?php
                                                    $cont = 0;
                                                    foreach($headquarters as $key_headquarter => $headquarter) {  

                                                        if (($cont % 2) == 0) {?>
                                                          <div class="col-xs-6" style="clear: left;">
                                                                <div class="checkbox">
                                                                        <label style="text-transform: uppercase">
                                                                            <input name="data[Activity][sedes][<?php echo $key_headquarter;?>]" class="sedes" tabindex="5" type="checkbox" 
                                                                            <?php
                                                                            if (in_array($key_headquarter, $listado_sedes)) { 
                                                                                echo 'checked = "checked"';
                                                                            } ?>
                                                                            />
                                                                            &nbsp; <?php echo (mb_strtoupper($headquarter)); ?></label>
                                                                </div>
                                                            </div> 
                                                        <?php } else { ?>
                                                          <div class="col-xs-4" style="clear: right;">
                                                            <div class="checkbox">
                                                                      <label style="text-transform: uppercase">
                                                                          <input name="data[Activity][sedes][<?php echo $key_headquarter;?>]" class="sedes" tabindex="5" type="checkbox" 
                                                                            <?php
                                                                            if (in_array($key_headquarter, $listado_sedes)) { 
                                                                                echo 'checked = "checked"';
                                                                            } ?>

                                                                          />
                                                                          &nbsp; <?php echo (mb_strtoupper($headquarter)); ?></label>
                                                            </div>
                                                          </div>
                                                        <?php } ?>

                                                    <?php 
                                                    $cont++;
                                                    } ?>
                                                    </div>
                                                </div>
                                            </div>
                                         <!--TERMINO SEDES-->
                                         
                                          <!--enmarca-->
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label">Nombre del proyecto en el qu� se enmarca</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9">
                                                        <input maxlength="110" name="data[Activity][proyectoglobal]" type="text" placeholder="Si se enmarca en un proyecto global" class="form-control" value="<?php echo $this->data['Activity']['proyectoglobal']; ?>"/></div>
                                                    </div>
                                                </div>
                                          </div>
                                          <!--fin de enmarca-->
                                          <!--fechas-->
                                         
                                           <div class="form-group"><label class="col-sm-3 control-label">Ingresar Fechas</label>

                                                <div class="col-sm-9 controls">
                               <!-- al pinchar se deber� desplegar un calendario para elegir fechas-->            
                                                      <div class="row">
                                                        <div class="col-xs-4">
                                                                <div class="input-icon right">                                                                    
                                                                    <input name="data[Activity][fechainicio_proyecto]" id="inicio_proyecto" type="text" placeholder="Fecha de Inicio" class="form-control data_picker calendarcss"  value="<?php 
                                                                    $fecha_inicio = date('j-m-Y',strtotime($this->data['Activity']['fechainicio_proyecto']));
                                                                    echo $fecha_inicio; ?>"/>
                                                                </div>
                                                        </div>
                                                            
                                                        <div class="col-xs-4">
                                                                <div class="input-icon right">                                                                    
                                                                    <input name="data[Activity][fechafinal_proyecto]" id="fin_proyecto" type="text" placeholder="Fecha de Termino" class="form-control data_picker calendarcss"  value="<?php 
                                                                    $fecha_final = date('j-m-Y',strtotime($this->data['Activity']['fechafinal_proyecto']));
                                                                    echo $fecha_final; ?>"/>
                                                                </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                          <div class="checkbox">
                                                                <label>
                                                                    <input name="data[Activity][proyecto_anual]" id="proyecto_anual" tabindex="5" type="checkbox" />
                                                                    &nbsp; Anual</label></div>
                                                          </div> 
                                                        </div>
                                                </div>
                                          </div>


  <script>
  $(function() {
    $( "#inicio_proyecto" ).datepicker({
      dateFormat: "dd-mm-yy"
    });
    $( "#fin_proyecto" ).datepicker({
      dateFormat: "dd-mm-yy"
    });
  });

    $('#proyecto_anual').on('ifChecked', function(event){
        var inicio = $('#inicio_proyecto').val();
        if (inicio == '') {
          $("#Modal_fechas_proyectos").modal();
        } else {
          var fecha = $('#inicio_proyecto').val();
          fecha = fecha.split('-');
          fecha = fecha[1] + '/' + fecha[0] + '/' + fecha[2]
          var date = new Date(fecha);
          date.setMonth(date.getMonth() + 12);
          var day = String(date.getDate());
          if (day.length == 1) {
            day = '0' + day;
          }
          var monthIndex = String(date.getMonth() + 1);
          if (monthIndex.length == 1) {
            monthIndex = '0' + monthIndex;
          }
          var rr = monthIndex.length;
          var year = date.getFullYear();
          fecha_mas_anno = day + '-' + monthIndex + '-' + year;
          $('#fin_proyecto').val(fecha_mas_anno);
        }

    });

    $( "#inicio_proyecto, #fin_proyecto" ).change(function(event) {
      if ($('#proyecto_anual').is(':checked')) {
        var inicio = $('#inicio_proyecto').val();
        //console.log('hola'+inicio);
        if (inicio == '') {
          $("#Modal_fechas_proyectos").modal();
          
        } else {
          var fecha = $('#inicio_proyecto').val();
          fecha = fecha.split('-');
          fecha = fecha[1] + '/' + fecha[0] + '/' + fecha[2]
          var date = new Date(fecha);
          date.setMonth(date.getMonth() + 12);
          var day = String(date.getDate());
          if (day.length == 1) {
            day = '0' + day;
          }
          var monthIndex = String(date.getMonth() + 1);
          if (monthIndex.length == 1) {
            monthIndex = '0' + monthIndex;
          }
          var rr = monthIndex.length;
          var year = date.getFullYear();
          fecha_mas_anno = day + '-' + monthIndex + '-' + year;
          $('#fin_proyecto').val(fecha_mas_anno);
        }
      };
    });

  </script>          

                               
                                              <!--fin fechas-->     
                                           <!--�rea responsable--> 
                                         
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label">Nombre del responsable de la actividad </label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input maxlength="110" name="data[Activity][responsable]" type="text" placeholder="" class="form-control" value="<?php echo $this->data['Activity']['responsable']; ?>"/></div>
                                                    </div>
                                                </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label">Cargo </label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input maxlength="110" name="data[Activity][cargoresponsable]" type="text" placeholder="" class="form-control" value="<?php echo $this->data['Activity']['cargoresponsable']; ?>"/></div>
                                                    </div>
                                                </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label">Mail</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input maxlength="110" name="data[Activity][mail_responsable]" type="email" id="mail_responsable" placeholder="duoc@duoc.cl" class="form-control mail" value="<?php echo $this->data['Activity']['mail_responsable']; ?>"/></div>
                                                    </div>
                                                </div>
                                          </div>
                                          <!--convenio-->
                                          <div class="form-group"> <!--si rellena este input se despliegan los datos de vigencia y alcance-->
                                            <label class="col-sm-3 control-label">�La Actividad pertenece a un convenio?</label>

                                                 <div class="col-sm-9 controls">
                                                    <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="checkbox">
                                                                <label><!-- esta opci�n siempre debe estar marcada-->
                                                                    <input name="data[Activity][no_convenio]" id="no_pertenece" tabindex="5" type="checkbox" name="no_pertenece"

                                                                    <?php if ($this->data['Activity']['convenio_si_no'] == null) { ?>
                                                                    checked="checked"
                                                                    <?php } ?>

                                                                    />
                                                                    &nbsp;No pertenece</label>
                                                        </div>
                                                    </div> 
                                                    <div class="col-xs-4">
                                                        <div class="checkbox">
                                                                <label>
                                                                    <input name="data[Activity][si_convenio]" id="si_pertenece" tabindex="5" type="checkbox"  name="si_pertenece" 
                                                                    <?php if ($this->data['Activity']['convenio_si_no'] <> null) { ?>
                                                                    checked="checked"
                                                                    <?php } ?>

                                                                    />
                                                                    &nbsp;Si pertenece </label>
                                                        </div>
                                                    </div> 
                                                                  
                                                    </div>
                                                </div>

                                          </div>

<script>
$('#no_pertenece').on('ifChecked', function(event){
  $('#si_pertenece').iCheck('uncheck');
  $('#box_si_pertenece1').fadeOut(500);
  $('#box_si_pertenece2').fadeOut(500);
  $('#box_si_pertenece3').fadeOut(500);
  $('#nombre_convenio').val('');
  $('#inicio_convenio').val('');
  $('#fin_convenio').val('');
  $('#detalle_convenio').val('');
});

$('#si_pertenece').on('ifChecked', function(event){
  $('#no_pertenece').iCheck('uncheck');
  $('#box_si_pertenece1').fadeIn(500);
  $('#box_si_pertenece2').fadeIn(500);
  $('#box_si_pertenece3').fadeIn(500);
});
$(".mail").change(function(){
  if($(this).val().indexOf('@', 0) == -1 || $(this).val().indexOf('.', 0) == -1) {
        alert('El correo electr�nico introducido no es correcto.');
        return false;
    }
});

</script>                                          

                                          <div id="box_si_pertenece1" class="form-group" 
                                                                    <?php if ($this->data['Activity']['convenio_si_no'] == null) { ?>
                                                                    style="display: none;"
                                                                    <?php } ?>
                                          > <!--si rellena este input se despliegan los datos de vigencia y alcance-->
                                            <label class="col-sm-3 control-label">Convenio al que pertenece la actividad</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input maxlength="110" id="nombre_convenio" name="data[Activity][convenio_si_no]" type="text" class="form-control" value="<?php echo $this->data['Activity']['convenio_si_no']; ?>"/></div>
                                                    </div>
                                                </div>
                                          </div>
                                           <div id="box_si_pertenece2" class="form-group"
                                                                    <?php if ($this->data['Activity']['convenio_si_no'] == null) { ?>
                                                                    style="display: none;"
                                                                    <?php } ?>

                                           ><label class="col-sm-3 control-label">Vigencia del convenio</label>

                                                <div class="col-sm-9 controls">
                               <!-- al pinchar se deber� desplegar un calendario para elegir fechas--> 
                                                   <div class="row">
                                                        <div class="col-xs-4">
                                                                <div class="input-icon right">                                                                    
                                                                    <input name="data[Activity][convenioinicio]" id="inicio_vigencia" type="text" placeholder="Fecha de Inicio" class="form-control calendarcss"  value="<?php 
                                                                    $fecha_inicio_conv = date('j-m-Y',strtotime($this->data['Activity']['convenioinicio']));
                                                                    echo $fecha_inicio_conv; ?>" />
                                                                </div>
                                                        </div>
                                                            
                                                        <div class="col-xs-4">
                                                                <div class="input-icon right">                                                                    
                                                                    <input name="data[Activity][conveniofin]" id="fin_vigencia" type="text" placeholder="Fecha de Termino" class="form-control calendarcss" value="<?php 
                                                                    $fecha_final_conv = date('j-m-Y',strtotime($this->data['Activity']['conveniofin']));
                                                                    echo $fecha_final_conv; ?>" />
                                                                </div>
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input name="data[Activity][convenioindefinido]" id="termino_indefinido" tabindex="5" type="checkbox" />
                                                                    &nbsp; T�rmino indefinido</label>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                          </div>
                                            

  <script>
  $(function() {
    $( "#inicio_vigencia" ).datepicker({
      dateFormat: "dd-mm-yy"
    });
    $( "#fin_vigencia" ).datepicker({
      dateFormat: "dd-mm-yy"
    });
  });

    $('#termino_indefinido').on('ifChecked', function(event){
      $( "#fin_vigencia" ).val('');
    });

  </script>                                                
                                          <div id="box_si_pertenece3" class="form-group"
                                                                    <?php if ($this->data['Activity']['convenio_si_no'] == null) { ?>
                                                                    style="display: none;"
                                                                    <?php } ?>

                                          >
                                            <label class="col-sm-3 control-label">Breve descripci�n del convenio</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><textarea  maxlength="200" id="detalle_convenio" name="data[Activity][descripcionconvenio]" rows="3" class="form-control" placeholder="M�ximo 200 car�cteres"><?php echo $this->data['Activity']['descripcionconvenio']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                          </div>
                                            <!--fin �rea responsable-->
                                            <hr/>
                                           <!--Objetivos-->
                                          <div class="form-group">
                                                <label class="col-sm-3 control-label">Objetivo General de la actividad</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><textarea maxlength="599" name="data[Activity][objetivo_general]" rows="3" class="form-control" placeholder="M�ximo 600 caracteres"><?php echo trim($this->data['Activity']['objetivo_general']); ?></textarea></div>
                                                    </div>
                                                </div>
                                          </div>


                                          <!-- Lista de objetivos agregados-->
                                          <div class="form-group" id="lista_objetivos_especificos">

                                          <label class="col-sm-3 control-label">Objetivos Especificos Agregados</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="table-responsive">
                                                          
                                                        <table class="table-bordered table" style="width: 80%;">
                                                          <tr>
                                                            <th>N�MERO
                                                            </th>
                                                            <th>OBJETIVO
                                                            </th>
                                                            <th>
                                                            ELIMINAR
                                                            </th>

                                                          </tr>
                                                          <?php
                                                          $cont =1;
                                                          foreach($listado_objetivos as $key => $objetive) { ?>
                                                          <tr>
                                                            <td>
                                                            <?php echo $cont; ?>
                                                            </td>
                                                            <td>
                                                            <?php echo $objetive; ?>
                                                            </td>
                                                            <td> 
                                                            <a style="cursor: pointer;" onclick="elimina_objetivo('<?php echo $objetive['id']; ?>');"><i class="fa fa-trash-o"></i>&nbsp;</a>
                                                            </td>

                                                          </tr>

                                                          <?php 
                                                          $cont++;
                                                          } ?>
                                                        </table>



                                                        </div>
                                                    </div>
                                                </div>
                                          </div>


                                          <div class="form-group">
                                            <label class="col-sm-3 control-label">Objetivos especificos</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9">
                                                          <input maxlength="110" id="objetivo_especifico" type="text" placeholder="" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                          </div>





                                          <button type="button" class="btn btn-default" style="margin-left:195px;" onClick="envia_objetivo_especifico();">Agregar objetivos</button>
                                        &nbsp; <!--fin Objetivos-->
                                        <hr/>


<script>

  function envia_objetivo_especifico() {
            url = siteurl + 'activities/agrega_obj_esp';
			var ia = <?php echo $id_activity; ?>;
            var objetivo = $('#objetivo_especifico').val();
			var id_activity;
			if(ia > 0)
			{
				id_activity = <?php echo $id_activity; ?>;
			}
			else
			{
			id_activity = 0;
			}
            if(objetivo==''){
              alert('Debe agregar un objetivo');
              return false;
            }
			
            $.ajax({
                url: url,
                type: "POST",
                data: { objetivo: objetivo,  id_activity: id_activity},
                success: function(result) {
                    $('#objetivo_especifico').val('');
                    $('#lista_objetivos_especificos').html(result);
                    $('#lista_objetivos_especificos').fadeIn(500);
                } // <-- add this
            });   
  }

  function elimina_objetivo(id_objetivo) {
            url = siteurl + 'objetives/delete_ajax';
            var id_objetivo = id_objetivo;
            var id_activity = <?php echo $id_activity; ?>;
            $.ajax({
                url: url,
                type: "POST",
                data: { id_objetivo: id_objetivo,  id_activity: id_activity},
                success: function(result) {
                    $('#lista_objetivos_especificos').html(result);
                    $('#lista_objetivos_especificos').fadeIn(500);
                } // <-- add this
            });   
  }    
</script>

                                            <!--principios-->
                                            <div class="form-group">
                                                  <label class="col-sm-3 control-label">Principios de la pol�tica que aborda<br> </label>
                                                 <div class="col-sm-9 controls">
                                                    <div class="row">
                                                      <?php
                                                      foreach($beginnings as $key_begin => $beginning) { ?>

                                                          <div class="col-sm-5">
                                                              <div class="checkbox">
                                                                      <label>
                                                                          <input name="data[Activity][principios][<?php echo $beginning['Beginning']['id']; ?>]" tabindex="5" type="checkbox" 
                                                                            <?php
                                                                            if (in_array($beginning['Beginning']['id'], $listado_principios)) { 
                                                                                echo 'checked = "checked"';
                                                                            } ?>

                                                                          />
                                                                          &nbsp;<?php echo $beginning['Beginning']['principio']; ?></label>&nbsp;<span data-toggle="tooltip" title="<?php echo $beginning['Beginning']['descripcion']; ?>" class="badge badge-info pull-right" style="font-size:10px;">?</span>
                                                              </div>
                                                          </div> 
                                                      <?php } ?>

                                                    </div>
                                                </div>
                                            </div>
                                         
                                            
                                          <div class="form-group">
                                                <label class="col-sm-3 control-label">Justificaci�n de principios abordados</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><textarea maxlength="400" name="data[Activity][justificacionprincipios]" rows="3" class="form-control"  placeholder="Justifique brevemente en 600 caracteres"><?php echo $this->data['Activity']['justificacionprincipios']; ?></textarea></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!--FIN PRINCIPIOS-->
                                            <hr/>
                                            <!--publico objetivo-->
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label">P�blico abordado Interno<br> </label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">

                                                      <?php
                                                      foreach($internals as $key_internal => $internal) { ?>

                                                          <div class="col-xs-4">
                                                              <div class="checkbox">
                                                                      <label>
                                                                          <input name="data[Activity][internal][<?php echo $internal['Internal']['id']; ?>]" tabindex="5" type="checkbox" 
                                                                            <?php
                                                                            if (in_array($internal['Internal']['id'], $listado_internals)) { 
                                                                                echo 'checked = "checked"';
                                                                            } ?>

                                                                          />
                                                                          &nbsp; <?php echo $internal['Internal']['publico']; ?></label>
                                                              </div>
                                                          </div> 

                                                      <?php } ?>
                                                    </div>
                                                </div>
                                          </div>
                                          <div class="form-group"><label class="col-sm-3 control-label">N�mero de participantes aprox.</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-4"><select name="data[Activity][numeroparticipantes]" class="form-control">
                                                          <option><?php echo $this->data['Activity']['numeroparticipantes']; ?></option>
                                                            <option>1-20</option>
                                                            <option>21-50</option>
                                                            <option>51-100</option>
                                                            <option>150 y m�s</option>
                                                          </select>
                                                        </div>
                                                    </div>
                                                </div>
                                          </div>


                                            <div class="form-group">
                                              <label class="col-sm-3 control-label">P�blico abordado Externo<br> </label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">

                                                      <?php
                                                      foreach($externals as $key_external => $external) { ?>

                                                          <div class="col-xs-4">
                                                              <div class="checkbox">
                                                                      <label>
                                                                          <input name="data[Activity][external][<?php echo $external['External']['id']; ?>]" tabindex="5" type="checkbox"
                                                                            <?php
                                                                            if (in_array($external['External']['id'], $listado_externals)) { 
                                                                                echo 'checked = "checked"';
                                                                            } ?>

                                                                          />
                                                                          &nbsp; <?php echo $external['External']['publicoexterno']; ?></label>
                                                              </div>
                                                          </div> 

                                                      <?php } ?>


                                                    </div>
                                                </div>
                                            </div>

                                             <div class="form-group"><label class="col-sm-3 control-label">N�mero de participantes aprox.</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                          <select name="data[Activity][numeroexternos]" class="form-control" >
                                                            <option><?php echo $this->data['Activity']['numeroexternos']; ?></option>
                                                            <option>1-20</option>
                                                            <option>21-50</option>
                                                            <option>51-100</option>
                                                            <option>150 y m�s</option>
                                                          </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Beneficiados de la implementaci�n del proyecto</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9">
                                                          <textarea maxlength="600" name="data[Activity][beneficiados]" rows="3" class="form-control" placeholder="Beneficiados externos: Todos quienes no son parte de Duoc UC. Beneficiados Internos: Alumnos, docentes o personas pertenecientes a la comunidad Duoc UC."><?php echo $this->data['Activity']['beneficiados']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                         <!--fin publicos-->
                                               	<hr/>
                                                <!--AMBITOS-->
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">�mbitos de acci�n en los que se enmarca la actividad<br> </label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">

                                                      <?php
                                                      foreach($scopes as $key_scope => $scope) { ?>
                                                          <div class="col-xs-4">
                                                              <div class="checkbox">
                                                                      <label>
                                                                          <input name="data[Activity][ambitos][<?php echo $scope['Scope']['id']; ?>]" type="checkbox" 
                                                                            <?php
                                                                            if (in_array($scope['Scope']['id'], $listado_ambitos)) { 
                                                                                echo 'checked = "checked"';
                                                                            } ?>

                                                                          />
                                                                          &nbsp;<?php echo $scope['Scope']['ambito']; ?></label>
                                                              </div>
                                                          </div> 
                                                      <?php } ?>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Asocie el �rea a la que m�s se asimile su actividad<br/> (elija una)</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                          <select name="data[Activity][area]" class="form-control">

                                                            <?php 
                                                            foreach($areas as $area) { ?>
                                                                <option value="<?php echo $area['Area']['id']; ?>"
                                                                            <?php
                                                                            if (in_array($area['Area']['id'], $listado_areas)) { 
                                                                                echo 'selected = "selected"';
                                                                            } ?>

                                                                ><?php echo $area['Area']['area']; ?></option>
                                                            <?php } ?>

                                                          </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         <!--FIN AMBITOS-->
                                               	<hr/>
							
                                          <!-- entidades-->
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Entidades Relacionadas<br> </label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">

                                                      <?php 
                                                      foreach($entities as $key_entity => $entity) { ?>


                                                          <div class="col-xs-6">
                                                              <div class="checkbox">
                                                                      <label>
                                                                          <input name="data[Activity][entidades][<?php echo $entity['Entity']['id']; ?>]" type="checkbox" 
                                                                            <?php
                                                                            if (in_array($entity['Entity']['id'], $listado_entidades)) { 
                                                                                echo 'checked = "checked"';
                                                                            } ?>

                                                                          />
                                                                          &nbsp; <?php echo $entity['Entity']['entidades']; ?></label>
                                                              </div>
                                                          </div> 

                                                      <?php } ?>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Detalle Entidades</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9">
                                                          <textarea maxlength="600" name="data[Activity][detalleentidades]" rows="3" class="form-control" placeholder="M&aacute;ximo 600 Caracteres"><?php echo $this->data['Activity']['detalleentidades']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                            <div class="row" style="border-top: 1px dashed #666666; border-bottom: 1px dashed #666666; padding: 10px;">

                                             <div class="form-group" id="lista_entidades">



                                            <label class="col-sm-3 control-label">Entidades Relacionadas</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="table-responsive">
                                                          
                                                        <table class="table-bordered table" style="width: 80%;">
                                                          <tr>
                                                          
                                                          <th>N�MERO</th>
                                                            <th>ENTIDAD
                                                            </th>
                                                            <th>CONTACTO
                                                            </th>
                                                            <th>
                                                            CARGO
                                                            </th>
                                                            <th>
                                                            ELIMINAR
                                                            </th>

                                                          </tr>
                                                          <?php
                                                          $cont =1;
                                                          foreach($listado_cont_entidades as $key => $entity1) { ?>
                                                          <tr>
                                                            <td>
                                                            <?php echo $cont; ?>
                                                            </td>
                                                            <td>
                                                            <?php echo $entity1['ActivityInstitution']['nombre']; ?>
                                                            </td>
                                                            <td>
                                                            <?php echo $entity1['ActivityInstitution']['contacto']; ?>
                                                            </td>
                                                            <td>
                                                            <?php echo $entity1['ActivityInstitution']['cargo']; ?>
                                                            </td>
                                                            <td> 
                                                            <a style="cursor: pointer;" onclick="elimina_entidad('<?php echo $entity1['ActivityInstitution']['id']; ?>');"><i class="fa fa-trash-o"></i>&nbsp;</a>
                                                            </td>

                                                          </tr>

                                                          <?php 
                                                          $cont++;
                                                          } ?>
                                                        </table>



                                                        </div>
                                                    </div>
                                                </div>






                                          </div>

                                              <div class="form-group">
                                                <label class="col-sm-3 control-label">Nombre de la entidad con la que se relaciona
                                                </label>

                                                <div class="col-sm-9 controls">
                                                      <div class="row">
                                                          <div class="col-xs-9"><input maxlength="40" id="ent1" name="data[Activity][nombreentidad1]" type="text" placeholder="" class="form-control"/>
                                                          </div>
                                                      </div>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-sm-3 control-label">Cargo </label>

                                                  <div class="col-sm-9 controls">
                                                      <div class="row">
                                                          <div class="col-xs-9">
                                                            <input maxlength="199" id="ent2" name="data[Activity][cargoentidad1]" type="text" placeholder="" class="form-control"/>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-sm-3 control-label">Detalle datos de contacto</label>

                                                  <div class="col-sm-9 controls">
                                                      <div class="row">
                                                          <div class="col-xs-9">
                                                            <textarea maxlength="110" id="ent3" name="data[Activity][detallecontacto1]" rows="3" class="form-control" placeholder="Tel�fono y mail"></textarea>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <div class="col-sm-9 controls">
                                                      <div class="row">
                                                          <div class="col-xs-9">   
                                                            <button class="btn btn-default" type="button" style="margin-left:195px; margin-top:15px;" onClick="envia_entidad();">Agregar Entidad</button>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>                                              
                                            </div>



<script>

/*   function envia_entidad() {
            url = siteurl + 'activities/agrega_entidad';
            var nombre = $('#ent1').val();
            var cargo = $('#ent2').val();
            var contacto = $('#ent3').val();
            var id_activity = <?php echo $id_activity; ?>;
            $.ajax({
                url: url,
                type: "POST",
                data: { nombre: nombre, cargo: cargo, contacto: contacto,  id_activity: id_activity},
                success: function(result) {
                    $('#ent1').val('');
                    $('#ent2').val('');
                    $('#ent3').val('');
                    $('#lista_entidades').html(result);
                    $('#lista_entidades').fadeIn(500);
                } // <-- add this
            });   
  } */
  
  
    function envia_entidad() {
			if ( ($("#ent1").val() ==  '') || ($("#ent2").val() == '') || ($("#ent3").val() == '') ) {
				alert('Debe completar todos los campos');
			}
			else{				
				url = siteurl + 'activities/agrega_entidad';
				var nombre = $('#ent1').val();
				var cargo = $('#ent2').val();
				var contacto = $('#ent3').val();
				var id_activity = <?php echo $id_activity; ?>;
				$.ajax({
					url: url,
					type: "POST",
					data: { nombre: nombre, cargo: cargo, contacto: contacto,  id_activity: id_activity},
					success: function(result) {
						$('#ent1').val('');
						$('#ent2').val('');
						$('#ent3').val('');
						$('#lista_entidades').html(result);
						$('#lista_entidades').fadeIn(500);
					} // <-- add this
				}); 
				
			}
  }


  function elimina_entidad(id_entidad) {
            url = siteurl + 'activities/delete_ent_ajax';
            var id_entidad = id_entidad;
            var id_activity = <?php echo $id_activity; ?>;
            $.ajax({
                url: url,
                type: "POST",
                data: { id_entidad: id_entidad,  id_activity: id_activity},
                success: function(result) {
                    $('#lista_entidades').html(result);
                    $('#lista_entidades').fadeIn(500);
                } // <-- add this
            });   
  }  
</script>                                             <!--fin entidades-->
                                          	<hr/>
			
                                        
                                        <!--PRESUPUESTO-->
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Costo de la actividad</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9">
                                                          <input name="data[Activity][costoactividad]" type="number" placeholder="$" class="form-control solo-numero" value="<?php echo $this->data['Activity']['costoactividad']; ?>"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                          
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Fuentes de financiamiento<br> </label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                      <div class="col-xs-4">
                                                          <div class="checkbox">
                                                                  <label>
                                                                      <input name="data[Activity][por_interno]" id="interno_100" tabindex="5" type="checkbox" 
                                                                    <?php if ($this->data['Activity']['financiamiento_i_e_m'] == '0') { ?>
                                                                    checked="checked"
                                                                    <?php } ?>

                                                                      />
                                                                      &nbsp; Interno 100%</label>
                                                          </div>
                                                      </div> 
                                                      <div class="col-xs-4">
                                                          <div class="checkbox">
                                                                  <label>
                                                                      <input name="data[Activity][por_externo]" id="externo_100" tabindex="5" type="checkbox" 
                                                                    <?php if ($this->data['Activity']['financiamiento_i_e_m'] == '1') { ?>
                                                                    checked="checked"
                                                                    <?php } ?>

                                                                      />
                                                                      &nbsp;Externo 100%</label>
                                                          </div>
                                                      </div> 
                                                      <div class="col-xs-4">
                                                          <div class="checkbox">
                                                                  <label>
                                                                      <input name="data[Activity][por_mixto]" id="mixto_100" tabindex="5" type="checkbox" 
                                                                    <?php if ($this->data['Activity']['financiamiento_i_e_m'] == '2') { ?>
                                                                    checked="checked"
                                                                    <?php } ?>

                                                                      />
                                                                      &nbsp; Mixto</label>
                                                                     <br/> <br/>
                                                       <!-- esto debe desplegar s�lo al pinchar mixto-->   
                                                            <div id="p_interno" class="col-xs-6"

                                                            <?php if ($this->data['Activity']['financiamiento_i_e_m'] <> '2') { ?>
                                                                    style="display: none"
                                                            <?php } ?>

                                                            >Interno
                                                              <input name="data[Activity][financiamientointerno]" id="tot_interno" type="number" placeholder="%" class="form-control porcentaje" maxlength="3"  value="<?php echo $this->data['Activity']['financiamientointerno']; ?>"/>
                                                            </div>
                                                            <div   id="p_externo" class="col-xs-6"
                                                            <?php if ($this->data['Activity']['financiamiento_i_e_m'] <> '2') { ?>
                                                                    style="display: none"
                                                            <?php } ?>

                                                            >Externo
                                                              <input name="data[Activity][financiamientoexterno]" id="tot_externo" type="number" placeholder="%" class="form-control porcentaje" maxlength="3"  value="<?php echo $this->data['Activity']['financiamientoexterno']; ?>"/>
                                                            </div>
                                                          </div>
                                                      </div>
                                                    </div> 
                                                </div>
                                            </div>
											
											
											
											
											
											
											
                                            

  <script>
    $('#interno_100').on('ifChecked', function(event){
      $('#externo_100').iCheck('uncheck');
      $('#mixto_100').iCheck('uncheck');
      $('#box_financiamiento_interno').fadeIn(500);

    });

    $('#interno_100').on('ifUnchecked', function(event){
      $('#box_financiamiento_interno').fadeOut(500);
    });

    $('#externo_100').on('ifChecked', function(event){
      $('#interno_100').iCheck('uncheck');
      $('#mixto_100').iCheck('uncheck');
      $('#box_financiamiento_externo').fadeIn(500);
    });

    $('#externo_100').on('ifUnchecked', function(event){
      $('#box_financiamiento_externo').fadeOut(500);
    });

    $('#mixto_100').on('ifChecked', function(event){
      $('#externo_100').iCheck('uncheck');
      $('#interno_100').iCheck('uncheck');
      $('#box_financiamiento_interno').fadeIn(500);
      $('#box_financiamiento_externo').fadeIn(500);
      $('#p_externo').fadeIn(500);
      $('#p_interno').fadeIn(500);
    });

    $('#mixto_100').on('ifUnchecked', function(event){
      $('#box_financiamiento_interno').fadeOut(500);
      $('#box_financiamiento_externo').fadeOut(500);
      $('#p_externo').fadeOut(500);
      $('#p_interno').fadeOut(500);

    });


$(function() {

    $("#Activity_imagen").change(function(){
        var fileExtension = ['jpeg', 'jpg', 'png'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            $(this).val('');
            alert("Formatos de imagen permitidos : "+fileExtension.join(', '));
        }
        var sizeByte = this.files[0].size;
        var siezekiloByte = parseInt(sizeByte / 1024);
        if(siezekiloByte > $(this).attr('size')){
           alert('El tama�o supera el limite permitido (350 kb)');
           $(this).val('');
        }
    })

     $('.porcentaje').keyup(function (){
          if(parseInt($(this).val().length)>3){
            this.value = (this.value + '').replace(/[^0-9]/g, '').substring(0,3);
          }else{
            this.value = (this.value + '').replace(/[^0-9]/g, '');
          }
        });

        $('.solo-numero').keyup(function (){
          this.value = (this.value + '').replace(/[^0-9]/g, '');
        });

  $('#det_presupuesto').focus(function() {
        if($("#interno_100").is(':checked')) {  
           var val_int_1 = $('#int_dir_central').val(); 
           var val_int_2 = $('#int_sedes').val(); 
           var val_int_3 = $('#int_escuelas').val(); 
           var val_int = parseInt(val_int_1) + parseInt(val_int_2) + parseInt(val_int_3); 
           if (val_int != 100) {
            $('#Modal_porcentaje_financiamiento').modal();
          }
        }  

        if($("#externo_100").is(':checked')) {  
           var val_int_1 = $('#ext_fon').val(); 
           var val_int_2 = $('#ext_ento').val(); 
           var val_int_3 = $('#ext_enti').val(); 
           var val_int_4 = $('#ext_don').val(); 
           var val_int = parseInt(val_int_1) + parseInt(val_int_2) + parseInt(val_int_3) + parseInt(val_int_4); 
           if (val_int != 100) {
            $('#Modal_porcentaje_financiamiento').modal();
          }
        }  

        if($("#mixto_100").is(':checked')) {  

           var val_int_1 = $('#int_dir_central').val(); 
           var val_int_2 = $('#int_sedes').val(); 
           var val_int_3 = $('#int_escuelas').val(); 
           var val_int = parseInt(val_int_1) + parseInt(val_int_2) + parseInt(val_int_3); 
           var val_tot_int = parseInt($('#tot_interno').val()); 


           var val_ext_1 = $('#ext_fon').val(); 
           var val_ext_2 = $('#ext_ento').val(); 
           var val_ext_3 = $('#ext_enti').val(); 
           var val_ext_4 = $('#ext_don').val(); 
           var val_ext = parseInt(val_ext_1) + parseInt(val_ext_2) + parseInt(val_ext_3) + parseInt(val_ext_4); 
           var val_tot_ext = parseInt($('#tot_externo').val()); 
           if ((val_ext != 100) || (val_int != 100) || ((val_tot_ext + val_tot_int) != 100)) {
            $('#Modal_porcentaje_financiamiento').modal();
            }            

            if ((val_tot_int == 0) || (val_tot_ext == 0)) {
              $('#Modal_porcentaje_financiamiento').modal();
            }

        }  
  });

})
  
  </script>                                             



                                            <div id="box_financiamiento_interno" class="form-group" 
                                                                    <?php if (($this->data['Activity']['financiamiento_i_e_m'] == '0') or (($this->data['Activity']['financiamiento_i_e_m'] == '2'))) { ?>
                                                                    
                                                                    <?php }  else { ?>
                                                                        style="display: none"
                                                                    
                                                                    <?php } ?>                        
                                            >
                                                <label class="col-sm-3 control-label">Fuente de financiamiento Interno<br> </label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                      <div class="col-xs-4">
                                                          <div class="checkbox">
                                                                  <label>
                                                                      &nbsp; Direcci�n Central (%)</label>
                                                          </div>
                                                      </div> 
                                                      <div class="col-xs-4">
                                                          <div class="checkbox">
                                                                  <label>
                                                                      &nbsp;Sedes (%)</label>
                                                          </div>
                                                      </div> 
                                                      <div class="col-xs-4">
                                                          <div class="checkbox">
                                                                  <label>
                                                                      &nbsp; Escuelas (%)</label>
                                                          </div>
                                                      </div> 
                                                      <br/><br/>
                                                      <!-- esto debe desplegar s�lo al pinchar mixto-->   
                                                      <div class="col-xs-4">
                                                          <input name="data[Activity][direccioncentral]" id="int_dir_central" type="number" class="form-control porcentaje" maxlength="3"  value="<?php echo $this->data['Activity']['direccioncentral']; ?>"/>
                                                      </div>
                                                      <div class="col-xs-4">
                                                          <input name="data[Activity][sedesporcentaje]" id="int_sedes" type="number" placeholder="%" class="form-control porcentaje" maxlength="3"  value="<?php echo $this->data['Activity']['sedesporcentaje']; ?>"/>
                                                      </div> 
                                                      <div class="col-xs-4">
                                                          <input name="data[Activity][escuelasporcentaje]" id="int_escuelas" type="number" placeholder="%" class="form-control porcentaje" maxlength="3"  value="<?php echo $this->data['Activity']['escuelasporcentaje']; ?>"/>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>

						                                <div id="box_financiamiento_externo" class="form-group"
                                                                    <?php if (($this->data['Activity']['financiamiento_i_e_m'] == '1') or (($this->data['Activity']['financiamiento_i_e_m'] == '2'))) { ?>
                                                                    
                                                                    <?php }  else { ?>
                                                                        style="display: none"
                                                                    
                                                                    <?php } ?>                        

                                            >
                                                  <label class="col-sm-3 control-label">Fuente de financiamiento Externo<br> </label>
                                                  <!-- esto debe desplegar s�lo al pinchar interna-->  
                                                  <div class="col-sm-9 controls">
                                                    <div class="row">
                                                      <div class="col-xs-4">
                                                          <div class="checkbox">
                                                                  <label>
                                                                      &nbsp; Fondos concusables (%)</label>
                                                          </div>
                                                      </div> 
                                                      <div class="col-xs-4">
                                                          <div class="checkbox">
                                                                  <label>
                                                                      &nbsp; Entorno productivo (%)</label>
                                                          </div>
                                                      </div> 
                                                      <div class="col-xs-4">
                                                          <div class="checkbox">
                                                                  <label>
                                                                      &nbsp; Entidades acad�micas (%)</label>
                                                          </div>
                                                      </div> 
                                                      <br/><br/>
                                                      <!-- esto debe desplegar s�lo al pinchar externa-->   
                                                      <div class="col-xs-4">
                                                                <input name="data[Activity][fondoconcursable]" id="ext_fon" type="number" placeholder="%" class="form-control porcentaje" maxlength="3"  value="<?php echo $this->data['Activity']['fondoconcursable']; ?>"/>
                                                      </div>
                                                      <div class="col-xs-4">
                                                                <input name="data[Activity][entornoproductivo]" id="ext_ento" type="number" placeholder="%" class="form-control porcentaje" maxlength="3"  value="<?php echo $this->data['Activity']['entornoproductivo']; ?>"/>
                                                      </div>
                                                      <div class="col-xs-4">
                                                                <input name="data[Activity][entidadesacademicas]" id="ext_enti" type="number" placeholder="%" class="form-control porcentaje" maxlength="3"  value="<?php echo $this->data['Activity']['entidadesacademicas']; ?>"/>
                                                      </div>
                                                      <br/><br/><br/>
                                                      <div class="col-xs-4">
                                                          	<div class="checkbox">
                                                                  <label>
                                                                      &nbsp; Donaciones (%)</label>
                                                            </div>
                                                      </div> 
                                                      <br/><br/>
                                                      <div class="col-xs-5">
                                                                <input name="data[Activity][donacionesporcentaje]" id="ext_don" type="number" placeholder="%" class="form-control porcentaje" maxlength="3"  value="<?php echo $this->data['Activity']['donacionesporcentaje']; ?>"/>
                                                      </div>
                                                      <br/><br/><br/><br/>
                                                    </div>
                                                  </div>
                                            </div>


                                            <!--  -->
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Detalle de presupuesto</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><textarea maxlength="600" name="data[Activity][detallepresupuesto]" id="det_presupuesto" rows="3" class="form-control" style="margin-bottom:25px;" placeholder="M&aacute;ximo 600 Caracteres"><?php echo $this->data['Activity']['detallepresupuesto']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                            <br/><br/>
                                            <!--FIN PRESUPUESTO-->
                                            <hr/>
                                            <!-- Lista de objetivos agregados-->
                                          <div class="form-group" id="lista_hitos">


                                            <label class="col-sm-3 control-label">Objetivos Espec�ficos Agregados</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="table-responsive">
                                                          
                                                        <table class="table-bordered table" style="width: 80%;">
                                                          <tr>
                                                            <th>N�
                                                            </th>
                                                            <th>HITO
                                                            </th>
                                                            <th>
                                                            ELIMINAR
                                                            </th>

                                                          </tr>
														  <?php //echo var_dump($listado_hitos); ?>
                                                          <?php
                                                          $cont =1;
														  foreach($listado_hitos as $key => $milestone) { ?>
														 
                                                          <tr>
                                                            <td>
                                                            <?php echo $cont; ?>
                                                            </td>
                                                            <td>															
                                                            <?php echo $milestone; ?>
                                                            </td>
                                                            <td> 
                                                            <a style="cursor: pointer;" onclick="elimina_hito('<?php echo $milestone['id']; ?>');"><i class="fa fa-trash-o"></i>&nbsp;</a>
                                                            </td>

                                                          </tr>

                                                          <?php 
                                                          $cont++;
                                                          } ?>
                                                        </table>



                                                        </div>
                                                    </div>
                                                </div>

                                            


                                          </div>
                                              <!--HITOS-->
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Principales hitos de la actividad</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input  maxlength="200" id="hito" type="text" placeholder="" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9">   
                                                          <button class="btn btn-default" type="button" style="margin-left:195px; margin-top:15px;" onClick="envia_hito();">Agregar Hito</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


<script>

  function envia_hito() {
            url = siteurl + 'activities/agrega_hito';
            var hito = $('#hito').val();
            var id_activity = <?php echo $id_activity; ?>;
            if(hito==''){
              alert('Debe ingresar un hito!');
              return false;
            }
            $.ajax({
                url: url,
                type: "POST",
                data: { hito: hito, id_activity: id_activity },
                success: function(result) {
                    $('#hito').val('');
                    $('#lista_hitos').html(result);
                    $('#lista_hitos').fadeIn(500);
                } // <-- add this
            });   
  }

  function elimina_hito(id_hito) {
            url = siteurl + 'milestones/delete_ajax';
            var id_hito = id_hito;
            var id_activity = <?php echo $id_activity; ?>;
            $.ajax({
                url: url,
                type: "POST",
                data: { id_hito: id_hito,  id_activity: id_activity},
                success: function(result) {
                    $('#lista_hitos').html(result);
                    $('#lista_hitos').fadeIn(500);
                } // <-- add this
            });   
  }    

</script>


                                            <!--FIN HITOS-->
                      										  <hr/>
                      										  <div class="form-group">
                                                <label class="col-sm-3 control-label">Incidencias de la actividad <br> </label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                      <div class="col-xs-12">
                                                        <div class="checkbox">
                                                                <label>
                                                                    <input name="data[Activity][in_activosocial]" tabindex="5" type="checkbox" 
                                                                    <?php if ($this->data['Activity']['in_activosocial'] == '1') { ?>
                                                                        checked="checked"
                                                                    <?php } ?>                        

                                                                    />
                                                                    &nbsp; Fortalece a la instituci�n como un actor social relevante</label>
                                                        </div>
                                                      </div> 
                                                      <div class="col-xs-12">
                                                        <div class="checkbox">
                                                                <label>
                                                                    <input name="data[Activity][in_desarrolloacademico]" tabindex="5" type="checkbox" 
                                                                    <?php if ($this->data['Activity']['in_desarrolloacademico'] == '1') { ?>
                                                                        checked="checked"
                                                                    <?php } ?>                        

                                                                    />
                                                                    &nbsp;Aporta al desarrollo acad�mico profesional y formaci�n de los estudiantes</label>
                                                        </div>
                                                      </div> 
                                                      <div class="col-xs-12">
                                                        <div class="checkbox">
                                                                <label>
                                                                    <input name="data[Activity][in_empleabilidad]" tabindex="5" type="checkbox" 
                                                                    <?php if ($this->data['Activity']['in_empleabilidad'] == '1') { ?>
                                                                        checked="checked"
                                                                    <?php } ?>                        

                                                                    />
                                                                    <input name="data[Activity][guardar]" id="guardar" tabindex="5" type="hidden" value=""/>
                                                                    &nbsp; Aumenta las posibilidades de empleabilidad de los titulados</label>
                                                                </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                      										  <hr/>
                      										  <br/><br/> <br/><br/>
                                            <p>
                                              <button value="1" name="cuardar" type="button" class="btn btn-green" data-toggle="tooltip" title="Al marcar guardar, podr�s volver a editar la actividad"  onclick="envia_formulario();">Guardar ficha</button> &nbsp; &nbsp;  Recuerda que la actividad no queda terminada hasta que se carguen los resultados.
                                            </p>
                                          <br/><br/>
                                                         <button value="1" name="enviar" type="button" class="btn btn-red btn-block" data-toggle="tooltip" title="Al marcar enviar, la actividad queda en disponibilidad para todo usuario y no se podr� volver a modificar." onclick="valida_formulario();">Enviar ficha</button>
                                        
                                    </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                              
                              </div>
                                
                            
                     
                            
                        </div>
                    </div>
                    </form>
                </div>
                <!--FIN CONTENIDO-->


  <!-- Modal FECHAS EJECUCION PROYECTO-->
<div id="Modal_fechas_proyectos" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">FECHAS EJECUCION PROYECTOS</h4>
      </div>
      <div class="modal-body">
        <p>Si el proyecto es anual, primero se debe ingresar la fecha de inicio.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div> 


  <!-- Modal PORCENTAJES FINANCIAMIENTO-->
<div id="Modal_porcentaje_financiamiento" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PORCENTAJES DE FINANCIAMIENTO</h4>
      </div>
      <div class="modal-body">
        <p>Estimado Usuario.</p>
        <p>Aseg�rese que el desglose de los porcentajes ingresados sumen un total de 100%.</p>
        <p>Si alguna casilla contiene un valor vac�o, favor de ingresar 0.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div> 

<script type="text/javascript">
    

    function envia_formulario() {

      var error = [];
	  
      if ($("input[name='data[Activity][nombre]']").val() == '') {
        error.push('Nombre de Actividad');
      }


      if ($("textarea[name='data[Activity][descripcion_actividad]']").val() == '') {
        error.push('Breve descripci�n de la Actividad');
      }


      if (error.length == 0) {
        jQuery(window).unbind("beforeunload");
        jQuery(window).unbind("unload");
         $('#guardar').val('1');
        document.forms['form_actividad'].submit();
      } else {
        var listado = error.join("<div class='clearfix'></div>");
        $("#lista_errores").html(listado);
        $("#Modal_validacion").modal();
        return;
      }


    }  

    function valida_formulario() {
      var error = [];

      if ($("input[name='data[Activity][nombre]']").val() == '') {
        error.push('Nombre de Actividad');
      }


      if ($("textarea[name='data[Activity][descripcion_actividad]']").val() == '') {
        error.push('Breve descripci�n de la Actividad');
      }

      if ($("input[name='data[Activity][proyectoglobal]']").val() == '') {
        error.push('Nombre del proyecto en el qu� se enmarca');
      }

      if ($("input[name='data[Activity][fechainicio_proyecto]']").val() == '') {
        error.push('Fecha Inicio Proyecto');
      }

      if ($("input[name='data[Activity][fechafinal_proyecto]']").val() == '') {
        error.push('Fecha Final Proyecto');
      }

      if ($("input[name='data[Activity][responsable]']").val() == '') {
        error.push('Responsable Proyecto');
      }

      if ($("input[name='data[Activity][cargoresponsable]']").val() == '') {
        error.push('Cargo Responsable Proyecto');
      }

    // Expresion regular para validar el correo
    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

	if ($('#mail_responsable').val() == '') {		
        error.push('Mail Responsable Proyecto');
    } 
	else {
        if (regex.test($('#mail_responsable').val().trim())) {
        } else {
            error.push('La direcc�n de correo no es valida');
        }
     }

      if ($("textarea[name='data[Activity][objetivo_general]']").val() == '') {
        error.push('Objetivo General de la actividad');
      }


      if ($("textarea[name='data[Activity][justificacionprincipios]']").val() == '') {
        error.push('Justificaci�n de principios abordados');
      }


      if ($("textarea[name='data[Activity][beneficiados]']").val() == '') {
        error.push('Beneficiados de la implementaci�n del proyecto');
      }

      if ($("textarea[name='data[Activity][detalleentidades]']").val() == '') {
        error.push('Detalle Entidades');
      }

      if ($("input[name='data[Activity][nombreentidad]']").val() == '') {
        error.push('Nombre de la entidad con la que se relaciona ');
      }

      if ($("input[name='data[Activity][cargoentidad]']").val() == '') {
        error.push('Cargo');
      }

      if ($("textarea[name='data[Activity][detallecontacto]']").val() == '') {
        error.push('Detalle datos de contacto');
      }

      if ($("input[name='data[Activity][costoactividad]']").val() == '') {
        error.push('Costo de la actividad');
      }

      if ($("textarea[name='data[Activity][detallepresupuesto]']").val() == '') {
        error.push('Detalle de presupuesto');
      }


      //origen de proyecto

      if (($("#demanda_interna").is(':checked')) || ($("#demanda_externa").is(':checked'))) {
      } else {
        error.push('Origen del Proyecto');
      }

      // pertenece

      if (($("#si_sedes").is(':checked')) || ($("#si_escuelas").is(':checked')) || ($("#si_areas").is(':checked'))) {
      } else {
        error.push('Pertenece a:');
      }

      // convenio

      if ($("#si_pertenece").is(':checked')) {
        if ($("input[name='data[Activity][convenio_si_no]']").val() == '') {
        error.push('Nombre Convenio');
        }
        if ($("input[name='data[Activity][convenioinicio]']").val() == '') {
        error.push('Inicio Convenio');
        }
        if ($("textarea[name='data[Activity][descripcionconvenio]']").val() == '') {
        error.push('Breve descripci�n del convenio');
        }

      }

      // incidencias

      if (($("input[name='data[Activity][in_activosocial]']").is(':checked')) || ($("input[name='data[Activity][in_desarrolloacademico]']").is(':checked')) || ($("input[name='data[Activity][in_empleabilidad]']").is(':checked'))) {
      } else {
        error.push('Incidencias');
      }

      // principios

      if ($("input[name^='data[Activity][principios]']").is(':checked'))  {
         } else {
        error.push('Principios de la pol�tica que aborda');
      }      


      // publico interno o externo

      if ($("input[name^='data[Activity][internal]']").is(':checked') || $("input[name^='data[Activity][external]']").is(':checked'))  {
         } else {
        error.push('Publico Interno o Externo');
      }      

      // ambitos

      if ($("input[name^='data[Activity][ambitos]']").is(':checked'))  {
         } else {
        error.push('�mbitos de acci�n en los que se enmarca la actividad');
      }      


      // entidades

      if ($("input[name^='data[Activity][entidades]']").is(':checked'))  {
         } else {
         error.push('Entidades Relacionadas');
      }      

      if (error.length == 0) {
        document.forms['form_actividad'].submit();
      } else {
        var listado = error.join("<div class='clearfix'></div>");
        $("#lista_errores").html(listado);
        $("#Modal_validacion").modal();
        return;
      }

    }

</script>

  <!-- Modal PORCENTAJES FINANCIAMIENTO-->
<div id="Modal_validacion" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">VALIDACION DEL FORMULARIO</h4>
      </div>
      <div class="modal-body">
        <p>Estimado Usuario.</p>
        <p>Para realizar el env�o de la actividad todos los campos deben ser completados.</p>
        <p>Los campos faltantes son: </p>
        <div id="lista_errores">
        </div>
        <div class="clearfix"></div>
        <br>
        <p>Si tiene alguna duda al respecto, favor de comunicarse con la mesa de ayuda.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div> 

<script>
$( document ).ready(function() {
  var inicio_proyecto = $('#inicio_proyecto').val();
  var fin_proyecto = $('#fin_proyecto').val();
  var inicio_convenio = $('#inicio_convenio').val();
  var fin_convenio = $('#fin_convenio').val();
  if (inicio_proyecto == '1-01-1970'){
	  $('#inicio_proyecto').val('');
  }
  if (fin_proyecto == '1-01-1970'){
	  $('#fin_proyecto').val('');
  }
  if (fin_proyecto == '1-01-1970'){
	  $('#inicio_vigencia').val('');
  }
  if (fin_proyecto == '1-01-1970'){
	  $('#fin_vigencia').val('');
  }  
  
  
});
</script>
