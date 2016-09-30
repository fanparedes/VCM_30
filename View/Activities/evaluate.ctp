                <!--BREADCRUMB-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                           Registro de resultados</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="<?php echo $abs_base.'home/usuario';?>">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Charts</a>&nbsp;&nbsp;<i class="fa fa-tachometer"></i>&nbsp;&nbsp;</li>
                        <li class="active">Registro de resultados</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--BREADCRUMB-->
                <!--CONTENIDO-->
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">
                          <div class="col-lg-12">
                            <div class="panel income db mbm">
                              <div class="panel-body">
                                <div class="panel-body pan">
                                  <div class="form-group mbn">
                                    <div class="col-lg-9">
                                      <div class="panel panel-grey">
                                        <div class="panel-heading"> Cargar Datos</div>
                                        <div class="panel-body pan">
                                          <?php echo $this->Form->create('Review', array( 'id'=> 'form_actividad', 'enctype' => 'multipart/form-data')); ?>
                                          <input name="data[Review][activity_id]" value="<?php echo $activity['Activity']['id'];?>" type="hidden">

                                            <!--TERMINO BUSCAR ACTIVIDAD-->
                                            
                                            <div class="form-body pal">



<script>
    jQuery(document).ready(function () {
        
        $('.estrellas').rating({
              min: 0,
              max: 5,
              step: 1,
              size: 'lg',
              showClear: false
           });
           
        $('#puntuacionarea').on('rating.change', function() {
          $('#puntuacionarea-input').val($('#puntuacionarea').val())
        });

        $('#puntuacionplazo').on('rating.change', function() {
          $('#puntuacionplazo-input').val($('#puntuacionplazo').val())
        });

        $('#puntuacionobjetivo').on('rating.change', function() {
          $('#puntuacionobjetivo-input').val($('#puntuacionobjetivo').val())
        });

        $('#puntuacionprincipios').on('rating.change', function() {
          $('#puntuacionprincipios-input').val($('#puntuacionprincipios').val())
        });


        $('#relevancia').on('rating.change', function() {
          $('#relevancia-input').val($('#relevancia').val())
        });

        $('#pertinencia').on('rating.change', function() {
          $('#pertinencia-input').val($('#pertinencia').val())
        });

        $('#abordo').on('rating.change', function() {
          $('#abordo-input').val($('#abordo').val())
        });





    });
</script>

                                              <div class="form-group">
                                                <h4>�rea a la perteneci� la actividad (Sedes, Escuelas, �rea Central)</h4>
                                                <div class="rating">

<div class="pull-right">
  <input id="puntuacionarea" type="number" class="estrellas" value="1"/>
  <input type="hidden" id="puntuacionarea-input" value="1" value="" name="data[Review][puntuacionarea]" >
</div>


                                                  <p>Nivel de involucramiento del �rea inicialmente responsable en el desarrollo <br/>de la actividad</p>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <textarea rows="5" class="form-control" maxlength="200"  placeholder="Comente por qu�" name="data[Review][involucramientoarea]" id="involucramientoarea" ></textarea>
                                              </div>
                                              <!--FIN PERTERNECE-->
                                              <!--PLAZOS-->
                                              <div class="form-group">
                                                <h4>Plazos de la actividad</h4>
                                                <div class="rating">


<div class="pull-right">
  <input id="puntuacionplazo" type="number" class="estrellas" value="1"/>
  <input type="hidden" id="puntuacionplazo-input" value="1" value="" name="data[Review][puntuacionplazo]" >
</div>

                                                  <p>Cumpli� con los plazos indicados?</p>
                                             		</div>
                                              </div>
                                              <div class="form-group">
                                                <textarea rows="5" class="form-control" maxlength="200"  placeholder="Comente por qu�" name="data[Review][cumplimientoplazos]" id="cumplimientoplazos"></textarea>
                                              </div>
                                            <!--FIN PLAZOS-->
                                              <hr/>
                                           
                                          <!--OBJETIVOS-->
                                              <div class="form-group">
                                                <h4>Objetivos de la actividad</h4>
                                                <div class="rating">


															<div class="pull-right">
															  <input id="puntuacionobjetivo" type="number" class="estrellas" value="1"/>
															  <input type="hidden" id="puntuacionobjetivo-input" value="1" value="" name="data[Review][puntuacionobjetivo]" >
															</div>

                                                  
                                                  <p>Nivel de cumplimiento de los objetivos de la actividad</p>
                                                  
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <textarea  rows="5" class="form-control" maxlength="200" placeholder="Comente por qu�" name="data[Review][cumplimientoobjetivos]" id="cumplimientoobjetivos"></textarea>
                                              </div>
										
                                            <!--FIN OBJETIVOS-->
                        											<hr/>
                                            <!--PRINCIPIOS-->
                                              <div class="form-group">
                                                <h4>Cumpli� con el o los principios de la actividad</h4>
                                                <div class="rating">


<div class="pull-right">
  <input id="puntuacionprincipios" type="number" class="estrellas" value="1"/>
  <input type="hidden" id="puntuacionprincipios-input" value="1" value="" name="data[Review][puntuacionprincipios]" >
</div>


<?php
foreach ($activity['Beginning'] as $beginning) {

?>


                                                  <span class="label label-sm label-success"><?php echo $beginning['principio']; ?></span>

<?php } ?>

                                                  <!--Estos deben venir autocompletados seg�n lo escrito-->
                                                </div>
                                              </div>
                                              <br/>
                                              <br/>
                                              <div class="form-group">
                                                <textarea rows="5" class="form-control"  maxlength="200" placeholder="Comente por qu�" name="data[Review][cumplimientoprincipios]" id="cumplimientoprincipios"></textarea>
                                              </div>
                                            <!--FIN PRINCIPIOS-->
                                              <hr/>

                                            <!--PUBLICO-->
                                            
                                              <div class="form-group">
                                                <h4>P�blico de la actividad</h4>
                                                <p>El p�blico escogido fue el abordado: </p>
                                                <!--Estos deben venir autocompletados seg�n lo escrito por el usuario en la ficha-->
                                              </div>
                                              



<?php
foreach ($activity['Internal'] as $internal) {

?>

                                              <div class="form-group">
                                                <div class="rating">

                                                  <div class="pull-right">
                                                    <input id="int_puntuacion_<?php echo $internal['id']; ?>" type="number" class="estrellas" value="1"/>
                                                    <input type="hidden" id="int_puntuacion_<?php echo $internal['id']; ?>-input" value="1" value="" name="data[Internal][<?php echo $internal['id']; ?>][puntuacion]" >
                                                  </div>

                                                  <?php echo $internal['publico']; ?>
                                                </div>

                                                <!--Estos deben venir autocompletados seg�n lo escrito por el usuario en la ficha-->
                                              </div>
                                              <div class="form-group">
                                                <textarea rows="5" class="form-control"  maxlength="200" placeholder="Si su calificaci�n fue menor o igual a 2, favor justificar" name="data[Internal][<?php echo $internal['id']; ?>][comentario]; ?>]" id="<?php echo $internal['id']; ?>"></textarea>
                                              </div>



<?php } ?>

<script>
    jQuery(document).ready(function () {
        
      <?php 
      foreach ($activity['Internal'] as $internal) { ?>
        $('#int_puntuacion_<?php echo $internal['id']; ?>').on('rating.change', function() {
          $('#int_puntuacion_<?php echo $internal['id']; ?>-input').val($('#int_puntuacion_<?php echo $internal['id']; ?>').val())
        });


      <?php } ?>


    });
</script>

<?php
foreach ($activity['External'] as $external) {

?>

                                              <div class="form-group">
                                                <div class="rating">

                                                  <div class="pull-right">
                                                    <input id="ext_puntuacion_<?php echo $external['id']; ?>" type="number" class="estrellas" value="1"/>
                                                    <input type="hidden" id="ext_puntuacion_<?php echo $external['id']; ?>-input" value="1" value="" name="data[External][<?php echo $external['id']; ?>][puntuacion]" >
                                                  </div>

                                                  <?php echo $external['publicoexterno']; ?>
                                                </div>

                                                <!--Estos deben venir autocompletados seg�n lo escrito por el usuario en la ficha-->
                                              </div>
                                              <div class="form-group">
                                                <textarea rows="5" class="form-control" maxlength="200" placeholder="Si su calificaci�n fue menor o igual a 2, favor justificar" name="data[External][<?php echo $external['id']; ?>][comentario]" id="<?php echo $external['id']; ?>"></textarea>
                                              </div>




<?php } ?>


<script>
    jQuery(document).ready(function () {
        
<?php
foreach ($activity['External'] as $external) {

?>        
        $('#ext_puntuacion_<?php echo $external['id']; ?>').on('rating.change', function() {
          $('#ext_puntuacion_<?php echo $external['id']; ?>-input').val($('#ext_puntuacion_<?php echo $external['id']; ?>').val())
        });

<?php } ?>

    });
</script>

                                            <!--FIN PUBLICO-->
                                              <hr/>
                                              <!--AMBITOS-->
                                              <div class="form-group">
                                                <h4> �mbitos de la actividad</h4>
                                              </div>


<?php
foreach ($activity['Scope'] as $scope) {

?>


                                              <div class="form-group">
                                                <div class="rating">

                                                  <div class="pull-right">
                                                    <input id="sc_puntuacion_<?php echo $scope['id']; ?>" type="number" class="estrellas" value="1"/>
                                                    <input type="hidden" id="sc_puntuacion_<?php echo $scope['id']; ?>-input" value="1" value="" name="data[Scope][<?php echo $scope['id']; ?>][puntuacion]" >
                                                  </div>

                                                  <?php echo $scope['ambito']; ?>
                                                </div>
                                                  <!--Estos deben venir autocompletados seg�n lo escrito por el usuario-->
                                                </div>



<?php } ?>


<script>
    jQuery(document).ready(function () {
        
<?php
foreach ($activity['Scope'] as $scope) {

?>       
        $('#sc_puntuacion_<?php echo $scope['id']; ?>').on('rating.change', function() {
          $('#sc_puntuacion_<?php echo $scope['id']; ?>-input').val($('#sc_puntuacion_<?php echo $scope['id']; ?>').val())
        });

<?php } ?>

    });
</script>


                                              <br/>
                                              <br/>
                                              <div class="form-group">
                                                <textarea rows="5" class="form-control" maxlength="200" placeholder="Justifique los resultados de sus �mbitos" name="data[Review][extensionaprendizaje]" id="extensionaprendizaje"></textarea>
                                              </div>
                                              <!--FIN AMBITOS-->
                                              <hr/>
                                               <!--ENTIDADES-->
                                              <div class="form-group">
                                                <h4>Entidades relacionadas</h4>
                                                  <p>La entidades relacionadas fueron las correctas ?</p>
                                                  <ul id="generalTab" class="nav nav-tabs responsive" >
                                                    <li class="active"><a href="#" class="logrado" data-toggle="tab"  onclick="$('#entidadesrelacionadas').val('1');">Logrado</a></li>
                                                    <li><a href="#" data-toggle="tab" onclick="$('#entidadesrelacionadas').val('0');">No logrado</a></li>
                                                    <input type="hidden" name="data[Review][entidadesrelacionadas]" id="entidadesrelacionadas" value="1">
                                                  </ul>
                                              </div>
                                              <div class="form-group">
                                                <textarea rows="5" class="form-control" maxlength="200" placeholder="Comente por qu�" name="data[Review][entidades]" id="entidades"></textarea>
                                              </div>

                                              <!--FIN ENTIDADES-->
                                              
                                              
                                              <hr/>
                                              <!--PRESUPUESTO-->
                                              <div class="form-group">
                                                  <h4>Presupuesto
                                                    <!--Estos deben venir autocompletados seg�n lo escrito-->
                                                  </h4>
                                                  <ul id="generalTab" class="nav nav-tabs responsive" >
                                                    <li class="active"><a href="#" class="logrado" data-toggle="tab"  onclick="$('#presupuesto').val('1');">Logrado</a></li>
                                                    <li><a href="#" data-toggle="tab"  onclick="$('#presupuesto').val('0');">No logrado</a></li>
                                                    <input type="hidden" name="data[Review][presupuesto]" id="presupuesto" value="1">
                                                  </ul>
                                              </div>
                                             
                                              <div class="form-group">
                                                <label class="col-sm-3 control-label">Contrataci�n de equipo humano ext.</label>
                                                <div class="col-sm-9 controls">
                                                  <div class="row">
                                                    <div class="col-xs-9">
                                                      <input type="text" placeholder="$" class="form-control solo-numero" name="data[Review][contratacionequipohumano]" />
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <br/><br/><br/>
                                              <div class="form-group">
                                                <label class="col-sm-3 control-label">Instalaciones, Insumos y Equipamientos</label>
                                                <div class="col-sm-9 controls">
                                                  <div class="row">
                                                    <div class="col-xs-9">
                                                      <input type="text" placeholder="$" class="form-control solo-numero" name="data[Review][instalacion]" />
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <br/><br/>
                                              <div class="form-group">
                                                <label class="col-sm-3 control-label">Otros Gastos involucrados </label>
                                                <div class="col-sm-9 controls">
                                                  <div class="row">
                                                    <div class="col-xs-9">
                                                      <input type="text" placeholder="$" class="form-control solo-numero" name="data[Review][otrosgastos]" />
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <!--FIN PRESUPUESTO-->
                                              <hr/>
                                              <br/><br/>
                                              <!--HITOS-->
                        											<div class="form-group">
                          											<h4>Hitos m�s relevantes de la actividad</h4>
                         											</div>





<?php
foreach ($activity['Milestone'] as $milestone) {

?>



                                              <div class="form-group">
                                                <p><?php echo $milestone['objetivo']; ?></p><!--Estos deben venir autocompletados seg�n lo escrito por el usuario-->
                                                <ul id="generalTab" class="nav nav-tabs responsive" >
                                                  <li class="active"><a href="#" class="logrado" data-toggle="tab" onclick="$('#mil_puntuacion_<?php echo $milestone['id'];?>').val('1');">Logrado</a></li>
                                                  <li><a href="#" class="nologrado" data-toggle="tab" onclick="$('#mil_puntuacion_<?php echo $milestone['id'];?>').val('0');">No logrado</a></li>
                                                   <input type="hidden" name="data[Milestone][<?php echo $milestone['id'];?>][puntuacion]" id="mil_puntuacion_<?php echo $milestone['id'];?>" value="1">
                                                </ul>
                                              </div>
                                         
<?php } ?>                                            








                                        
                                              <div class="form-group">
                                                <textarea rows="5" class="form-control"  maxlength="200" placeholder="Justifique" name="data[Review][justificacionhitos]" id="justificacionhitos"></textarea>
                                              </div>
                                              <!--FIN HITOS-->
                                          
                                              <hr/>
                                          
                                              <br/>
                                              <br/>
                                             <!--COMENTARIOS-->
                                              <div class="form-group">
                                                <textarea rows="5" class="form-control" maxlength="200" placeholder="Comentarios de la actividad" name="data[Review][comentariosactividad]" id="comentariosactividad" ></textarea>
                                              </div>
                                              <!--FIN COMENTARIOS-->
                                               <hr/>
                                             <!--EVIDENCIA-->
                                              <div class="form-body pal">
                                                <div class="form-group">
                                                  <h4>Cargar evidencias de la actividad</h4>
                                                  <p>M�ximo 4 im�genes de peso 350 kb</p>
                                                </div>

                                                <div class="form-group">
                                                  <input id="imagen1" type="file" size="350" placeholder="Inlcude some file" name="data[Image][imagen1]"  style=" display: inline;"/>
                                                  <a style="cursor: pointer;" onclick="$('#imagen1').val('');" class="btn-sm"><i class="fa fa-trash-o"></i>&nbsp;</a>
                                                </div>

                                                <div class="form-group" id="imagen2">
                                                  <input id="imagen2_id" type="file" size="350" placeholder="Inlcude some file" name="data[Image][imagen2]" style=" display: inline;"/>
                                                  <a style="cursor: pointer;" onclick="$('#imagen2_id').val('');" class="btn-sm"><i class="fa fa-trash-o"></i>&nbsp;</a>
                                                </div>


                                                <div class="form-group" id="imagen3">
                                                  <input id="imagen3_id" type="file" size="350" placeholder="Inlcude some file" name="data[Image][imagen3]" style=" display: inline;"/>
                                                  <a style="cursor: pointer;" onclick="$('#imagen3_id').val('');" class="btn-sm"><i class="fa fa-trash-o"></i>&nbsp;</a>

                                                </div>

                                                <div class="form-group" id="imagen4">
                                                  <input id="imagen4_id" type="file" size="350" placeholder="Inlcude some file" name="data[Image][imagen4]"  style=" display: inline;"/>
                                                  <a style="cursor: pointer;" onclick="$('#imagen4_id').val('');" class="btn-sm"><i class="fa fa-trash-o"></i>&nbsp;</a>

                                                </div>


                                              </div>
                                            <!--EVIDENCIA-->
<!--evaluaci�n de la actividad-->
                                              <div class="form-body pal">
                                                <div class="form-group">
                                                <h4><b> Percepci�n de la actividad</b></h4>
                                                  <div class="rating">

<div class="pull-right">
  <input id="relevancia" type="number" class="estrellas" value="1"/>
  <input type="hidden" id="relevancia-input" value="1" value="" name="data[Review][relevancia]" >
</div>


                                                    <p>Relevancia del proyecto</p>
                                                  
                                                  </div>
                                                  <div class="rating">


<div class="pull-right">
  <input id="pertinencia" type="number" class="estrellas" value="1"/>
  <input type="hidden" id="pertinencia-input" value="1" value="" name="data[Review][pertinencia]" >
</div>

                                                    <p>Pertinencia de la implementaci�n del proyecto</p>
                                                    
                                                  </div>
                                                  <div class="rating">



<div class="pull-right">
  <input id="abordo" type="number" class="estrellas" value="1"/>
  <input type="hidden" id="abordo-input" value="1" value="" name="data[Review][abordo]" >
</div>

                                                    <p>Proyecto planteado por la entidad relacionada abord� o no una necesidad</p>
                                                   
                                                  </div>
                                                </div>
                                                <!-- fin de evaluaci�n de la actividad-->
                                              </div>
                                              <div class="form-actions text-right pal">
                                              <button type="button" class="btn btn-primary" data-toggle="tooltip" title="Al enviar ya no se podr� modificar los datos."  onclick="valida_formulario();">Enviar resultados</button>
                                              </div>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>

                <!--fin CONTENIDO-->



<script>

    $(document).ready(function (){
          $("#imagen1, #imagen2_id, #imagen3_id, #imagen4_id").change(function(){
              var fileExtension = ['jpeg', 'jpg', 'png'];
              if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                  alert("Formatos de imagen permitidos : "+fileExtension.join(', '));
                  $(this).val('');
              }
              var sizeByte = this.files[0].size;
              var siezekiloByte = parseInt(sizeByte / 1024);
              if(siezekiloByte > $(this).attr('size')){
                 alert('El tama�o supera el limite permitido (350 kb)');
                 $(this).val('');
             }
          });

          $('.solo-numero').keyup(function (){
              this.value = (this.value + '').replace(/[^0-9]/g, '');
            });
      });


    function valida_formulario() {

      var error = [];
       var tipo  ='';
       var rating = '';
     $("textarea").each(function(){
          var text = $(this).attr("id");
          var value_text = $(this).val();
          if(value_text=='' && (text=='21' || text=='41')){
            
            if(text=='21'){
              rating = $("#int_puntuacion_"+text).val();
              tipo = 'Alumnos';
            }
            if(text=='41'){
              rating = $("#ext_puntuacion_"+text).val();
              tipo = 'Exalumnos';
            }
            if(parseInt(rating)<=2){
              error.push('Debe ingresar una justificaci�n en '+tipo);
            }
          }else if(value_text==''){
            if(text=='involucramientoarea'){
              error.push('Debe ingresar un comentario en �rea a la perteneci� la actividad.');
            }
            if(text=='cumplimientoplazos'){
              error.push('Debe ingresar un comentario en Plazos de la actividad.');
            }
            if(text=='cumplimientoobjetivos'){
              error.push('Debe ingresar un comentario en Objetivos de la actividad.');
            }
            if(text=='cumplimientoprincipios'){
              error.push('Debe ingresar un comentario en Cumpli� con el o los principios de la actividad.');
            }
            if(text=='extensionaprendizaje'){
              error.push('Debe ingresar un comentario en �mbitos de la actividad.');
            }
            if(text=='entidades'){
              error.push('Debe ingresar un comentario en Entidades relacionadas.');
            }
            if(text=='justificacionhitos'){
              error.push('Debe ingresar un comentario en Hitos m�s relevantes de la actividad.');
            }
            if(text=='comentariosactividad'){
              error.push('Debe ingresar un comentario en Comentarios de la actividad.');
            }
          }

          console.log(text);
      });

if ((document.getElementById("imagen1").files.length == 0 ) && (document.getElementById("imagen2_id").files.length == 0 ) && (document.getElementById("imagen3_id").files.length == 0 ) && (document.getElementById("imagen4_id").files.length == 0 )) {
    error.push('Se necesita como m�nimo un archivo de imagen.');
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
        <p>Para realizar el env�o de la evaluaci�n todos los campos deben ser completados.</p>
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