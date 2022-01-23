$(document).ready(function () {

    obtener_ultimo_codigo();

    function random(min, max) {
        return Math.floor((Math.random() * (max - min + 1)) + min);
    }
    //Usamos el idioma español
    moment.locale('es');
    let now= moment();

    function obtener_ultimo_codigo(){
        $.ajax({
            type : 'POST',
            url : url_base+'Mantenimiento/Distrito/obtener_ultimo_codigo',
            success:function (response) {
                var data = JSON.parse(response)
                //console.log(data[0].dis_codigo);
              
                let ultimo = data.length-1;
                console.log(ultimo);
                let arr = data[ultimo].dis_codigo.split('');
                console.log(arr);

               let ram = random(100,999);
                //le eniamos un codigo ramdon al distrito
               let codigo = "DIS"+ram+now.format('YY')
                console.log(codigo);
                $("#dis_codigo").val(codigo)

            },
            error:function () {
                    
            }
        })
    }
//alert("dasd")
    var formAgregar = $('#frm_agregar_distrito')
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
                //console.log(data);
                  Swal.fire({
                    icon: 'success',
                    title: 'Agregado con exito',
                  })                
                  //formAgregar[0].reset();
                  setTimeout('document.location.reload()',2000);

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