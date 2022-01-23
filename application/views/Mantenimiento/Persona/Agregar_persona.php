    <!--Main layout-->
    <main>
        <div class="container-fluid">
            <!--Section: Inputs-->
            <section class="section card mb-5 text-center">
                <div class="card-body">
                    <!--Section heading-->
                    <h1 class="text-center my-5 h1">Agregando Personas</h1>
                    <h5 class="pb-5">Llena los campos solicitados</h5>
                    <form action=" <?= base_url()?>Mantenimiento/persona/agregar_personas" method="post" id="frm_agregar_persona">
                        <!--Grid row-->
                        <div class="row d-flex justify-content-center">
                            <!--Grid column-->
                            <div class="col-md-4 mb-4">
                                <div class="md-form">
                                    <input type="text" id="per_username" class="form-control" name="per_username"
                                        data-validetta="required,minLength[5]">
                                    <label for="per_username" class="">Nombre de usuario</label>
                                </div>
                            </div>
                            <!--/Grid column-->

							<!--Grid column-->
                            <div class="col-md-4 mb-4">
                                <div class="md-form">
                                    <input type="text" id="per_alias" class="form-control" name="per_alias"
                                        data-validetta="required,minLength[5]">
                                    <label for="per_alias" class="">Alias de usuario</label>
                                </div>
                            </div>
                            <!--/Grid column-->

                        </div>
                        <!--Grid row-->

						<!--Grid row-->
						<div class="row d-flex justify-content-center">
                            <!--Grid column-->
                            <div class="col-md-4 mb-4">
                                <div class="md-form">
                                    <input type="text" id="per_firstNombre" class="form-control" name="per_firstNombre"
                                        data-validetta="required,minLength[5]">
                                    <label for="per_firstNombre" class="">Primer Nombre</label>
                                </div>
                            </div>
                            <!--/Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 mb-4">
                                <div class="md-form">
                                    <input type="text" id="per_lastName" class="form-control" name="per_lastName"
                                        data-validetta="required,minLength[5]">
                                    <label for="per_lastName" class="">Apellidos</label>
                                </div>
                            </div>
                            <!--/Grid column-->
                        </div>
                        <!--Grid row-->

						
                        <!--Grid row-->
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4 mb-4">
                                <select class="mdb-select" name="per_id_tipo_persona" aria-placeholder="Rol" id="per_id_tipo_persona" data-validetta="required">
                                    <option option value="">Seleccione rol</option>
                                    <?php
										foreach ($datos_tipo_persona as $key => $value) {									
									?>
                                    <option option value="<?=$value->tiper_id?>"><?=$value->tiper_nombre ?></option>
                                    <?php
										}
									?>

                                </select>
                                <label for="per_id_tipo_persona" class="active">Tipo de persona</label>
                            </div>

                            <!--Grid column-->
							<div class="col-md-4 mb-4">
                                <select class="mdb-select" name="per_estado" aria-placeholder="estado" id="estado"
                                    data-validetta="required">

                                    <option option value="">Estado del usuario actual</option>
                                    <option option value="1">Activo</option>
                                    <option option value="0" style="color:#ff0000">Inactivo</option>

                                </select>
                                <label for="estado" class="active">Estado</label>
                            </div>
                            <!--/Grid column-->
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
