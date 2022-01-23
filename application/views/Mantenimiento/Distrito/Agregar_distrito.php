    <!--Main layout-->
    <main>
        <div class="container-fluid">
            <!--Section: Inputs-->
            <section class="section card mb-5 text-center">
                <div class="card-body">
                    <!--Section heading-->
                    <h1 class="text-center my-5 h1">Agregar distritos</h1>
                    <h5 class="pb-5">Llena los campos solicitados</h5>
                    <form action=" <?= base_url()?>Mantenimiento/Distrito/agregar_distrito" method="POST" id="frm_agregar_distrito">
                        <!--Grid row-->
                        <div class="row d-flex justify-content-center">
                            <!--Grid column-->
                            <div class="col-md-4 mb-4">
                                <div class="md-form">
                                <label for="dis_codigo" class="active"></label>
    
                                    <input type="text" value="dasdas" id="dis_codigo" class="form-control" name="dis_codigo"
                                        data-validetta="required,minLength[5]">
                                </div>
                            </div>
                            <!--/Grid column-->

							<!--Grid column-->
                            <div class="col-md-4 mb-4">
                                <select class="mdb-select" name="dis_pastor" aria-placeholder="Rol" id="dis_pastor" data-validetta="required">
                                    <option option value="">Pastor</option>
                                    <?php foreach ($persona as $key => $value) {?>
                                    <option option value="<?=$value->per_id?>"><?=$value->per_firstNombre ?> <?=$value->per_lastName ?></option>
                                    <?php }?>
                                </select>
                                <label for="dis_pastor" class="active">Pastor</label>
                            </div>
                            <!--/Grid column-->
                            
                        </div>
                        <!--Grid row-->

						<!--Grid row-->
						<div class="row d-flex justify-content-center">
                            <!--Grid column-->
                            <div class="col-md-4 mb-4">
                                <div class="md-form">
                                    <input type="text" id="dis_nombre" class="form-control" name="dis_nombre"
                                        data-validetta="required,minLength[5]">
                                    <label for="dis_nombre" class="">Nombre del distrito</label>
                                </div>
                            </div>
                            <!--/Grid column-->

                            <!--Grid column-->
    						<div class="col-md-4 mb-4">

    							<div class="md-form">
    								<input placeholder="Selected date" type="text" id="date-picker-example"
    									class="form-control datepicker" name="tiper_fecha_creacion" id="test"
    									data-validetta="required">
    								<label for="date-picker-example" class="active">Select date</label>
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
