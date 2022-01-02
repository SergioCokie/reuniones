    <!--Main layout-->
    <main>
    	<div class="container-fluid">
    		<!--Section: Inputs-->
    		<section class="section card mb-5 text-center">
    			<div class="card-body">
    				<!--Section heading-->
    				<h1 class="text-center my-5 h1">Agregando Roles</h1>
    				<h5 class="pb-5">Llena los campos solicitados</h5>
    				<form action=" <?= base_url()?>Mantenimiento/Tipo_persona/agregando_tipo_persona" method="post"
    					id="frm_tipo_persona">
    					<!--Grid row-->
    					<div class="row d-flex justify-content-center">
    						<!--Grid column-->
    						<div class="col-md-4 mb-4">
    							<div class="md-form">
    								<input type="text" id="form1" class="form-control" name="tiper_nombre"
    									data-validetta="required,minLength[5]">
    								<label for="form1" class="">Nombre del tipo de persona</label>
    							</div>
    						</div>
    						<!--Grid column-->
    						<div class="col-md-4 mb-4">

    							<div class="md-form">
    								<input placeholder="Selected date" type="text" id="date-picker-example"
    									class="form-control datepicker" name="tiper_fecha_creacion"
    									data-validetta="required">
    								<label for="date-picker-example" class="active">Select date</label>
    							</div>
    						</div>
    					</div>
    					<!--Grid row-->
    					<!--Grid row-->
    					<div class="row d-flex justify-content-center">
    						<div class="col-md-4 mb-4">
    							<select class="mdb-select" name="tiper_estado" aria-placeholder="estado" id="estado"
    								data-validetta="required">
    								<option value="1">Activo</option>
    								<option value="0">Inactivo</option>
    							</select>
    							<label for="estado" class="active">Estado</label>
    						</div>
    						<!--Grid column-->
    						<div class="col-md-4 mb-4">

    							<div class="md-form">
    								<textarea type="text" id="form10" class="md-textarea form-control"
    									name="tiper_descripcion" rows="3"></textarea>
    								<label for="form10">Descripción</label>
    							</div>
    						</div>
    						<!--Grid column-->
    					</div>
    					<!--Grid row-->
    					<button type="submit" class="btn btn-outline-default waves-effect">Agregar</button>
    				</form>
    			</div>
    		</section>
    		<!--Section: Inputs-->
    	</div>
    </main>
    <!--Main layout-->
