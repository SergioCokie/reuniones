$(document).ready(function () {
	$(".button-collapse").sideNav();

	var container = document.querySelector('.custom-scrollbar');
	Ps.initialize(container, {
		wheelSpeed: 2,
		wheelPropagation: true,
		minScrollbarLength: 20
	});

	var ancho = window.innerWidth;
	console.log("Width screen: "+ancho);

	if(ancho > 700){
		//si la pantalla es mayor a 420px le agrrega un scroll si no se lo quita
		$(document).ready(function () {
			$('#datatables').DataTable({
				"scrollX": true,
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
	}else{
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
	}
	

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

	//modificar el estado del usuario de activo a desactivado y biseversa 
	$(document).ready(function () {
		$(".estado_usuario").on('click', function () {
			var per_id = $(this).attr("id");	//obtenemos el valor del boton seleccionado

			Swal.fire({
				icon: 'question',
				text: 'Desea modificar el estado de este usuario?',
				showDenyButton: true,
				confirmButtonText: 'Modificar',
				denyButtonText: `Cancelar`,
			  }).then((result) => {
				/* Read more about isConfirmed, isDenied below */
				if (result.isConfirmed) {
					$.ajax({
						url: "Persona/actualizar_estado",
						type: "POST",
						data: { id: per_id }
					})
					.done(function (data) {
						if(data){
							Swal.fire({
								icon: 'success',
								text: 'Estado actualizado',
								showConfirmButton: false,
								timer: 1500
							  })
							  setTimeout(function(){
								window.location.href = url_base+"Mantenimiento/Persona";//redireccionamos al index de tipo persona
							}, 1500);
							  
						}else{	
							Swal.fire({
								icon: 'error',
								text: 'Error! No puedes modificar tu propia cuenta',
							  })			
						}
					})
					.fail(function () {
						console.log("Error con el ajax")
					})
				} else if (result.isDenied) {
					toastr.info('Peticion cancelada.');
				}
			  })
		})
	});

	//Reiniciar contraseña del usuario seleccionador
	$(document).ready(function () {
		$(".reinicio_cuenta").on('click', function () {
			var per_id = $(this).attr("id");	//obtenemos el valor del boton seleccionado
			var password = $(this).val();	//obtenemos el valor del boton seleccionado
			//console.log(password)
			Swal.fire({
				icon: 'question',
				text: 'Desea reiniciar la contraseña de este usuario?',
				showDenyButton: true,
				confirmButtonText: 'Reiniciar ahora',
				denyButtonText: `Cancelar`,
			  }).then((result) => {

				if (result.isConfirmed) {
					$.ajax({
						url: "Persona/reiniciar_password",
						type: "POST",
						data: { id: per_id, pass: password }
					})
					.done(function (data) {
						if(data){
							console.log("Reinicio Exitoso: "+data);

							Swal.fire({
								icon: 'success',
								text: 'Contraseña restablecida!',
								showConfirmButton: false,
								timer: 1500
							  })
							  setTimeout(function(){
								window.location.href = url_base+"Mantenimiento/Persona";//redireccionamos al index de tipo persona
							}, 1500);
							  
						}else{	
							console.log("Oh algo salio mal wn: "+data);
							Swal.fire({
								icon: 'error',
								text: 'Error! No puedes modificar tu propia cuenta',
							  })			
						}
					})
					.fail(function () {
						console.log("Error con el ajax")
					})
				} else if (result.isDenied) {
					toastr.info('Peticion cancelada.');
				}
			  })
		})
	});

	//traer datos de usuario para cambiar de rol
	$(document).ready(function () {
		$(".cambiar_rol").on('click', function () {
			var per_id = $(this).attr("id");//obtenemos el valor del boton seleccionado
			$.ajax({
				url: "Persona/cambiar_rol_usuario",
				type: "POST",
				data: { codigo_user: per_id }
			})
			.done(function (data) {
				var datos = JSON.parse(data)//cparseamos el json
				//$("#per_id_tipo_persona > option[value="+datos[0].tiper_id+"]").attr("selected",true);
				$('#nombre_user').html('<span style="font-weight: 900; text-transform: uppercase">' + datos[0].per_username + '</span>');
				$("#per_id").val(datos[0].per_id)
			})
			.fail(function () {
				console.log("Error con el ajax")
			})
		
		});
	});

	//cambiar de rol a usuario
	$(document).ready(function () {
		var formAgregar = $('#frm_cambiar_rol')
		formAgregar.validetta({
			realTime: true,
			display : 'inline',
			errorTemplateClass : 'validetta-inline',
			onValid : function( event ) {
				event.preventDefault();
				$.ajax({
					type: formAgregar.attr('method'),
					url: formAgregar.attr('action'),
					data: formAgregar.serialize(),
					success: function (data) {
						console.log(data);
							Swal.fire({
								icon: 'success',
								title: 'Rol cambiado con exito',
								showConfirmButton: false,
								timer: 1500
							})  
							setTimeout(function(){
								window.location.href = url_base+"Mantenimiento/Persona";//redireccionamos al index de tipo persona
							}, 1500);
					},
					default: function () {
						alert('Error en el ajax !!!');
					}
				});
		  },
		  onError: function(event){
			toastr.info('Tiene campos vacios.');
		  }
		},
		{
		  notEqual  : 'Las contraseñas no coincide.'
		});
	});

	$(document).ready(function () {
		$(".eliminar_usuario").on("click",function(){
			alert("El eliminado de usuario aun no esta habilitado")
		})
	});
	

});
