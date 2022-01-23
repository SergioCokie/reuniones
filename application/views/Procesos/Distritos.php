<!--Main layout-->
<main>
    <div class="container-fluid mb-5">
        <!--Section: Basic examples-->
        <section>
            <h2 class="text-center my-5 h1 pt-4">Distritos</h2>
            <div class="row">

                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <table id="datatables" class="table table-striped table-bordered table-responsive-md"
                                cellspacing="0" width="100%">
                                <thead class="deep-purple white-text">
                                    <tr>
                                        <th>#</th>
                                        <th>Codigo</th>
                                        <th>Distrito</th>
										<th>Pastor</th>
                                        <th>Sectores asignados</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($distritos_resumen as $key => $value) { ?>
                                    <tr>
                                        <td><?= $key+1 ?></td>
                                        <td><?= $value->dis_codigo ?></td>
                                        <td><?= $value->dis_nombre ?></td>
                                        <td><?= $value->per_username ?></td>
                                        <td><?= $value->zonas ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-unique">Acción</button>
                                                <button type="button"
                                                    class="btn btn-sm btn-unique dropdown-toggle dropdown-toggle-split"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item ver_zonas" id="<?= $value->zonas_codigos?>" name="btnTest" value=""">Ver zonas</button>
                                                    <button class="dropdown-item reinicio_cuenta" id="" value="">Reiniciar Cuenta</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Section: Basic examples-->

    </div>
</main>
<!--Main layout-->
