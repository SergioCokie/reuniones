    <!--Main layout-->
    <main>
    	<div class="container-fluid">

    		<!--Section: Inputs-->
    		<section class="section card mb-5 text-center">

    			<div class="card-body">

    				<!--Section heading-->
    				<h1 class="text-center my-5 h1">Editar tipos de persona</h1>

    				<h5 class="pb-5">Llena los campos solicitados</h5>
    				<form action="<?= base_url() ?>Mantenimiento/Tipo_persona/editar_tiper_persona" method="POST" id="frm_editar_tiper_persona">

    					<!--Grid row-->
    					<div class="row d-flex justify-content-center">

    						<!--Grid column-->
    						<div class="col-md-4 mb-4">

    							<div class="md-form">
    								<input type="text" id="form1" class="form-control" name="tiper_id" readonly style="color: red; font-size: larger; font-weight: bold; " data-validetta="required" value="<?php echo ($tipo_persona != null) ? $tipo_persona[0]->tiper_id : ' '; ?>">
    								<label for="form1" class="disabled">Codigo del tipo de persona</label>
    							</div>
    						</div>
    						<!--Grid column-->
    						<div class="col-md-4 mb-4">
    						</div>
    					</div>
    					<!--Grid row-->
    					<!--Grid row-->
    					<div class="row d-flex justify-content-center">

    						<!--Grid column-->
    						<div class="col-md-4 mb-4">

    							<div class="md-form">
    								<input type="text" id="tiper_nombre" class="form-control" name="tiper_nombre" data-validetta="required" value="<?php echo ($tipo_persona != null) ? $tipo_persona[0]->tiper_nombre : ' '; ?>">
    								<label for="tiper_nombre" class="">Nombre del tipo de persona</label>
    							</div>

    						</div>
    						<!--Grid column-->

    						<div class="col-md-4 mb-4">

    							<div class="md-form">
    								<input placeholder="Fecha Actualizacion" type="text" id="tiper_fecha_creacion" class="form-control datepicker" name="tiper_fecha_creacion" data-validetta="required">
    								<label for="tiper_fecha_creacion" class="active">Seleccione Fecha</label>
    							</div>

    						</div>
    						<?php
							foreach ($tipo_persona as $key => $value) {
								$estatus = $value->tiper_estado;
							}
							?>
    						<script>
    							var estatus = <?= $estatus ?>
    						</script>

    					</div>
    					<!--Grid row-->
    					<!--Grid row-->
    					<div class="row d-flex justify-content-center">
    						<div class="col-md-4 mb-4">
    							<select class="mdb-select" name="tiper_estado" aria-placeholder="estado" id="estado" data-validetta="required">
    								<option value="1">Activo</option>
    								<option value="0">Inactivo</option>
    							</select>
    							<label for="estado" class="active">Estado</label>
    						</div>
    						<!--Grid column-->
    						<div class="col-md-4 mb-4">
    							<div class="md-form">
    								<textarea type="text" id="tiper_descripcion" class="md-textarea form-control" name="tiper_descripcion" rows="3">
										<?php echo ($tipo_persona != null) ? $tipo_persona[0]->tiper_descripcion : ' '; ?>
									</textarea>
    								<label for="tiper_descripcion">Descripción</label>
    							</div>
    						</div>
    						<!--Grid column-->
    					</div>
    					<!--Grid row-->
    					<button type="submit" class="btn btn-outline-default waves-effect">Editar</button>
    				</form>
    			</div>
    		</section>
    		<!--Section: Inputs-->
    	</div>
    </main>
    <!--Main layout-->

