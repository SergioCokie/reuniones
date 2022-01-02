<!--Main layout-->
<main>
    <div class="container-fluid mb-5">

        <!--Section: Basic examples-->
        <section>
            <h2 class="text-center my-5 h1 pt-4">PERSONAS O USUARIOS</h2>

            <div class="row">
                <div class="col-md-6 col-xl-5 mb-5">
                    <a type="button" href="<?= base_url() ?>Mantenimiento/Persona/agregar_persona"
                        class="btn btn-deep-purple waves-effect waves-light">Agregar tipos de
                        persona</a>
                </div>
                <div class="col-md-12">
                    <style>
                    @media (min-width: 1200px) {
                        div.dataTables_wrapper {
                            width: 1000px;
                            margin: 0 auto;
                        }
                    }
                    </style>
                    <div class="card">
                        <div class="card-body">
                            <table id="datatables"
                                class="table table-striped table-bordered table-responsive-md display nowrap"
                                cellspacing="0" width="100%">
                                <thead class="deep-purple white-text">
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre Usuario</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Alias</th>
                                        <th>Estado</th>
                                        <th>Rol</th>
                                        <th>Fecha Creación</th>
                                        <th>Fecha Modificación</th>
                                        <th>Ultima Conexion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
									foreach ($datos_persona as $value) {
									?>
                                    <tr>
                                        <th style="font-weight: 900;"><?= $value->per_codigo ?></th>
                                        <td><?= $value->per_username ?></td>
                                        <td><?= $value->per_firstNombre ?></td>
                                        <td><?= $value->per_lastName ?></td>
                                        <td><?= $value->per_alias ?></td>
                                        <?php echo ($value->estado === "Cuenta Activa")?'<td>'.$value->estado.'</td>':'<td style="color:#ff0000">'.$value->estado.'</td>' ?>
                                        <td><?= $value->tiper_nombre ?></td>
                                        <td><?= $value->per_fecha_creacion ?></td>
                                        <td><?= $value->per_fecha_actualizacion ?></td>
                                        <td><?= $value->per_ultima_conexion ?></td>
                                        <td>

                                            <!-- Example split danger button -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-unique">Accion</button>
                                                <button type="button"
                                                    class="btn btn-sm btn-unique dropdown-toggle dropdown-toggle-split"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#" id="estado">Activo</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
									}
									?>
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

<!--  SCRIPTS  -->
<!-- JQuery -->
<script src="<?php echo base_url("resources/js/jquery-3.2.1.min.js") ?>"></script>
<!-- Bootstrap tooltips -->
<script src="<?php echo base_url("resources/js/popper.min.js") ?>"></script>
<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url("resources/js/bootstrap.min.js") ?>"></script>
<!-- MDB core JavaScript -->
<script src="<?php echo base_url("resources/js/mdb.min.js") ?>"></script>

<!-- SweetAlert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- DataTables.net -->
<script type="text/javascript"
    src="<?php echo base_url("resources/js/vendor/datatables/js/jquery.dataTables.min.js") ?>"></script>
<script type="text/javascript"
    src="<?php echo base_url("resources/js/vendor/datatables/js/dataTables.bootstrap4.min.js") ?>"></script>
<!--Custom scripts-->
<script type="text/javascript" src="<?php echo base_url("resources/js/Mantenimiento/Persona/index_persona.js") ?>">
</script>


</body>

</html>