<!--Main layout-->
<main>
    <div class="container-fluid mb-5">
        <!--Section: Basic examples-->
        <section>
            <h2 class="text-center my-5 h1 pt-4">DISTRITOS</h2>
            <div class="row">
                <div class="col-md-6 col-xl-5 mb-5">
                    <a type="button" href="<?= base_url() ?>Mantenimiento/Distrito/Agregar"
                        class="btn btn-deep-purple waves-effect waves-light">Agregar tipos de distrito</a>
                </div>

                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">

                            <table id="datatables" class="table table-striped table-bordered table-responsive-md"
                                cellspacing="0" width="100%">
                                <thead class="deep-purple white-text">
                                    <tr>
                                        <th>#</th>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Nombre del encargado</th>
                                        <th>Fecha Creación</th>
                                        <th>Fecha Modificación</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
									foreach ($distritos as $key => $value) {
									?>
                                    <tr>
                                        <td><?= $key+1 ?></td>
                                        <td><?= $value->dis_codigo ?></td>
                                        <td><?= $value->dis_nombre ?></td>
                                        <td><?= $value->per_firstNombre ?></td>
                                        <td><?= $value->dis_fecha_creacion ?></td>
                                        <td><?= $value->dis_fecha_actualizacion ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-unique">Acción</button>
                                                <button type="button"
                                                    class="btn btn-sm btn-unique dropdown-toggle dropdown-toggle-split"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="">Editar</a>
                                                    <a class="dropdown-item delete_tiper_per">Eliminar</a>
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

<!-- Archivo js de index -->
<script src="<?php echo base_url("resources/js/Mantenimiento/Distritos/distritos_index.js") ?>"></script>

</body>

</html>