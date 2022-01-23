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
                            width: 1100px;
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
                                        <th>#</th>
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
                                <tbody id="datatabletbody">
                                    <?php
									foreach ($datos_persona as $key => $value) {
									?>
                                    <tr>
                                        <th style="font-weight: 900;"><?= $key+1 ?></th>
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
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-unique">Acción</button>
                                                <button type="button"
                                                    class="btn btn-sm btn-unique dropdown-toggle dropdown-toggle-split"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <?php if($this->session->userdata("per_id_tipo_persona") == 1){ ?>
                                                    <?php echo ($value->estado === "Cuenta Activa")?'<a class="dropdown-item estado_usuario" id="'.$value->per_id.'">Desactivar Cuenta</a>':'<a class="dropdown-item estado_usuario" id="'.$value->per_id.'">Activar Cuenta</a>' ?>
                                                    <button class="dropdown-item reinicio_cuenta" id="<?=$value->per_id ?>" value="<?= $value->per_username?>">Reiniciar Cuenta</button>

                                                    <a class="dropdown-item cambiar_rol" id="<?=$value->per_id ?>" data-toggle="modal" data-target="#sideModalTRSuccessDemo" data-backdrop="false">Cambiar rol</a>
                                                    <a class="dropdown-item eliminar_usuario">Eliminar Cuenta</a>
                                                    <?php }else{?>
                                                    <a class="dropdown-item" href="<?= base_url()?>Seguridad/Password"">Cambiar contraseña</a>
                                                    <?php }?>
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
<!-- Valideta JavaScript -->
<script src="<?php echo base_url("resources/validetta/validetta.min.js")?>"></script>
<script src="<?php echo base_url("resources/validetta/validettaLang-es-ES.js")?>"></script>
<!-- SweetAlert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- DataTables.net -->
<script type="text/javascript"
    src="<?php echo base_url("resources/js/vendor/datatables/js/jquery.dataTables.min.js") ?>"></script>
<script type="text/javascript"
    src="<?php echo base_url("resources/js/vendor/datatables/js/dataTables.bootstrap4.min.js") ?>"></script>
<!--Custom scripts-->
<script type="text/javascript" src="<?php echo base_url("resources/js/Mantenimiento/Persona/index_persona.js") ?>">
</script>

<script>
var url_base = "<?=base_url()?>";
</script>

</body>

</html>

<style>
    .cabecera{
        background-color: red !important;
        color: darkslateblue !important;
    }
</style>
<!-- Side Modal Top Right Success-->
<div class="modal fade right" id="sideModalTRSuccessDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-side modal-top-right modal-notify modal-success" role="document">
        <!--Content-->
        <div class="modal-content">
            <form action="<?= base_url()?>Mantenimiento/persona/editar_rol_usuario" method="post" id="frm_cambiar_rol">
                <!--Header-->
                <div class="modal-header ">
                    <p class="heading lead">Cambiar rol: <span id="nombre_user"></span></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                            <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                            <br>
                            <p>Puede cambiar el rol del usuario tomando en cuenta su papel en el sistema</p>                   
                                <div class="row d-flex justify-content-center">
                                    <input type="hidden" id="per_id" name="per_id">
                                    <div class="col-md-12 mb-12">
                                        <select class="mdb-select" name="per_id_tipo_persona" aria-placeholder="Rol" id="per_id_tipo_persona" data-validetta="required">
                                            <option option value="">Seleccione rol</option>
                                            <?php foreach ($datos_tipo_persona as $key => $value) {?>
                                            <option option value="<?=$value->tiper_id?>"><?=$value->tiper_nombre ?></option>
                                            <?php }?>
                                        </select>
                                        <label for="per_id_tipo_persona" class="active">Tipo de persona</label>
                                    </div>
                                </div>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-sm btn-unique">Hecho</button>
                    <a type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Cancelar</a>
                </div>
            </form>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Side Modal Top Right Success-->              

<script>
    // Material Select Initialization
	$(document).ready(function () {
            $('.mdb-select').material_select();
    });
</script>