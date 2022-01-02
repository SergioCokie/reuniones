
$(document).ready(function () {
    var  numSpan = 0;

     //aqui modificamos el alumno
     $('#frm_login').submit(function (ev) {
        $.ajax({
            type: $('#frm_login').attr('method'),
            url: $('#frm_login').attr('action'),
            data: $('#frm_login').serialize(),
            success: function (data) {
                //console.log(data);
                
                if(data == "USUARIO ACTIVO"){
                    window.location.href = xd;
                    //console.log(data);
                }
                else if(data == "USUARIO INCORRECTO"){
                    if( numSpan == 0 ){
                        $(".texto").append('<p class="red-text">El usuario o contraseña son incorrectos!.</p>');
                        numSpan ++;
                    }
                    //console.log(data);
                }
                else if(data = "USUARIO INACTIVO"){
                    //console.log(data);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops... Tu cuenta esta Desactivada o Baneada. Contáctate  con algún  administrador para que puedas volver a acceder al sistema',
                      })
                }
            },
            default: function () {
                alert('Error en el ajax !!!');
            }
        });
        ev.preventDefault();
    });
});