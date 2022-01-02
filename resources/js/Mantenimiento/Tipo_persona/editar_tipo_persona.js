$(document).ready(function () {
    //console.log("estado: "+estatus);
    $("#estado > option[value="+estatus+"]").attr("selected",true);
    var formEditar = $('#frm_editar_tiper_persona')
    formEditar.validetta({
        realTime: true,
        display : 'inline',
        errorTemplateClass : 'validetta-inline',
        onValid : function( event ) {
          event.preventDefault();
          $.ajax({
            type: formEditar.attr('method'),
            url: formEditar.attr('action'),
            data: formEditar.serialize(),
            success: function (data) {
                //console.log(data);
                  Swal.fire({
                    icon: 'success',
                    title: 'Editado con exito',
                  })     
                  setTimeout(function(){
                      window.location.href = url_base+"Mantenimiento/Tipo_persona";//redireccionamos al index de tipo persona
                  }, 2000);
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