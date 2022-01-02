

$(document).ready(function () {
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
	Ps.initialize(container, {
		wheelSpeed: 2,
		wheelPropagation: true,
		minScrollbarLength: 20
	});

	$(document).ready(function () {
		$('#datatables').DataTable({
			"info": false,
			language: {
				"decimal": ",",
				"thousands": ".",
				"lengthMenu": "Mostrar _MENU_",
				"zeroRecords": "No se encontraron resultados",
				"info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"infoEmpty": ",Mostrando registros del 0 al 0 de un total de 0 registros",
				"infoFiltered": "(filtrado de un total de _MAX_ registros)",
				"sSearch": "Buscar:",
				"oPaginate": {
					"sFirst": "Primero",
					"sLast": "Último",
					"sNext": "Siguiente",
					"sPrevious": "Anterior"
				},
				"sProcessing": "Cargando..."
			},

		});

	});
    
	// Material Select Initialization
	$(document).ready(function () {
		$('select[name="datatables_length"]').material_select();
	});
    //------------------------------------------------------------eliminar tipo de persona
$(document).on("click", ".delete_tiper_per", function () {
    var tiper_id = $(this).attr("id");
    //alert(tiper_id)
    Swal.fire({
        icon: 'question',
        text: 'Si elimina el registro no se recuperar de nuevo',
        showDenyButton: true,
        confirmButtonText: 'Eliminar',
        denyButtonText: `Cancelar`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                    url: "Tipo_persona/eliminar_tiper_persona",
                    type: "POST",
                    data: {id: tiper_id}
                })
                .done(function (data) {      
                    console.log(data);
                    if(data){
                        Swal.fire({
                            icon: 'success',
                            text: 'Exito! Registro Eliminado',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setTimeout('document.location.reload()', 1500);
                    }else{
                        Swal.fire({
                            icon: 'error',
                            text: 'Error! Al parecer el rol existe en alguna persona',
                        })
                    }
                })
                .fail(function () {
                    console.log("Error ocn el ajax")
                })
        } else if (result.isDenied) {
            toastr.info('Cancelado! no se hizo ningun cambio.');
        }
    })
})

$(function () {
    $('.min-chart#chart-sales').easyPieChart({
        barColor: "#4caf50",
        onStep: function (from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
        }
    });
});
});

