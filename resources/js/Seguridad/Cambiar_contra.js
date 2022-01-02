$(document).ready(function () {

    $('#changePass').validetta({
        realTime: true,
        display : 'inline',
        errorTemplateClass : 'validetta-inline',
        
        onValid : function( event ) {
          event.preventDefault();
          $.ajax({
            type: $('#changePass').attr('method'),
            url: $('#changePass').attr('action'),
            data: $('#changePass').serialize(),
            success: function (data) {
                //console.log(data);
                
                if(data){
                  Swal.fire({
                    icon: 'success',
                    title: 'La contraseña se actualizo',
                  })                
                  $('#changePass')[0].reset();

                }else{
                  Swal.fire({
                    icon: 'error',
                    title: 'La contraseña actual no coincide',
                  })
                }
                
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
