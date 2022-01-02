<!--Main layout-->
<main>
	<div class="container-fluid">
		<!--Section: Inputs-->
		<section class="section card mb-5">
			<div class="card-body">
				<!--Section heading-->
				<h1 class="text-center my-5 h1">Cambia tu contraseña</h1>
				<h5 class="pb-5"></h5>
				<form action="<?=base_url()?>Seguridad/Password/validar_contra_actual" method="POST" id="changePass">
					<!--Grid row-->
					<div class="row d-flex justify-content-center">
						<!--Grid column-->
						<div class="col-md-4 mb-4">
							<div class="md-form">
								<input type="text" id="form1" class="form-control"
                                    data-validetta="required" name="per_contra_actual">
								<label for="form1" class="">Contraseña actual</label>
							</div>
						</div>
						<!--Grid column-->
					</div>
					<!--Grid row-->
					<!--Grid row-->
					<div class="row d-flex justify-content-center">
						<div class="col-md-3 mb-4">
							<!--Password validation-->
							<div class="md-form">
								<i class="fa fa-lock prefix"></i>
								<input type="password" autocomplete="on" id="form3" class="form-control" name="nuevaContra" data-validetta="required,minLength[5]" >
								<label for="form3" data-error="wrong" data-success="">Nueva Contraseña</label>
							</div>
						</div>
						<div class="col-md-3 mb-4">
							<!--Password validation-->
							<div class="md-form">
								<i class="fa fa-lock prefix"></i>
								<input type="password" autocomplete="on" id="form2" class="form-control validate" data-validetta="required,equalTo[nuevaContra]">
								<label for="form2" data-error="wrong" data-success="">Asegure Contraseña</label>
							</div>
						</div>
					</div>
                    <div class="row d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-default waves-effect">Agregar</button>
                    </div>
					<!--Grid row-->
				</form>
			</div>
		</section>
		<!--Section: Inputs-->
	</div>
</main>
<!--/Main layout-->


