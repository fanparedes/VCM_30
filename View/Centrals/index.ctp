                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Gesti�n de Areas Centrales</div> 
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="<?php echo $abs_base.'home/admin'; ?>">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                   
                        <li class="active"><i class="fa fa-file-o fa-fw"></i>Gesti�n Areas Centrales</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--BREADCRUMB-->
                <!-- COMIENZA Contenido-->
              <div class="page-content">
              <form class="form-horizontal">
                <div id="tab-general">
                        <div class="row mbl">

                            <div class="col-lg-12">
                                  
                              <div class="row">
                    <div class="col-md-12">

                        <div class="row mtl">

                             <!-- IMAGEN REFERENCIAL DE ACTIVIDAD-->
 							<!-- COMIENZA FORMULARIO-->
                            <div class="col-md-12">
                               
                                <div id="generalTabContent" class="tab-content">
                                    <div id="tab-edit" class="tab-pane fade in active">  
                                      <h3>Gesti�n Areas Centrales</h3>
                                      <a href="<?php echo $abs_base.'centrals/add'; ?>" class="btn btn-green pull-right"  style="margin-top:-47px;">Crear A. Central</a>
                                      <div class="clearfix"></div>
                                      <hr>
                                          <div class="form-group">
                                                  <div class="col-sm-12 controls">
                                                    <div class="row">

                                                        <div class="col-xs-12">
                                                          <table id="tabla_centrals">
                                                            <thead> 
																<tr>
																		<th>Nombre</th>
																		<th>Acciones</th>
																</tr>
                                                            </thead>
                                                            <tbody>
															<?php foreach ($centrals as $central): ?>
															<tr>
																<td><?php echo $central['Central']['nombre']; ?>&nbsp;</td>
																<td>
																	<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $central['Central']['id']), array('class' => 'btn btn-yellow')); ?>
																</td>
															</tr>
														<?php endforeach; ?>

                                                            </tbody>
                                                            </table>
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
                    </div>
                    </form>
                </div>
                <!--FIN CONTENIDO-->

<script>
  $(document).ready(function(){
      $('#tabla_centrals').DataTable();
  });
</script>
