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
			"scrollX": true,
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

	$(function () {
		$('.min-chart#chart-sales').easyPieChart({
			barColor: "#4caf50",
			onStep: function (from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});
	});
});
