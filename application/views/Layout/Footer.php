<!--  SCRIPTS  -->
<!--       
       	__(.)< (MEOW)
    	\___)   
 ~~~~~~~~~~~~~~~~~~-->
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
<!-- Obtener la hora local -->
<script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
<!--Initializations-->

<script>
console.debug(
    "Si tu no sabes lo que estas haciendo no deberias tocar nada, si sabes lo que estas haciendo deberias ayudarme :D"
    )
</script>

<!-- Dashboard -->
<script src="<?php echo base_url("resources/js/Procesos/Distritos.js") ?>"></script>

<!-- Archivo js de Seguridad/index_seguridad -->
<script src="<?php echo base_url("resources/js/Seguridad/Cambiar_contra.js")?>"></script>


<!-- Archivo js de agregar tipo de persona o roles -->
<script src="<?php echo base_url("resources/js/Mantenimiento/Tipo_persona/agregar_tipo_persona.js")?>"></script>
<!-- Archivo js de Editar tipo de persona o roles-->
<script src="<?php echo base_url("resources/js/Mantenimiento/Tipo_persona/editar_tipo_persona.js") ?>"></script>


<!-- Archivos de agregar personas -->
<script src="<?php echo base_url("resources/js/Mantenimiento/Persona/agregar_personas.js") ?>"></script>


<!-- Archivos de agregar distritos -->
<script src="<?php echo base_url("resources/js/Mantenimiento/Distritos/agregar_distrito.js") ?>"></script>

<!-- DataTables.net -->
<script type="text/javascript"
    src="<?php echo base_url("resources/js/vendor/datatables/js/jquery.dataTables.min.js") ?>"></script>
<script type="text/javascript"
    src="<?php echo base_url("resources/js/vendor/datatables/js/dataTables.bootstrap4.min.js") ?>"></script>


<script>
// SideNav Initialization
$(".button-collapse").sideNav(); //sidebar
$('.datepicker').pickadate(); //datepiker (input con calendario)



// Material Select Initialization
$(document).ready(function() {
    $('.mdb-select').material_select();
});
var url_base = "<?= base_url(); ?>"
</script>


</body>

</html>