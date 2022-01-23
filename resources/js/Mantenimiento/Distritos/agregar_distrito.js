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

               let codigo = "DIS"+ram+now.format('YY')
                console.log(codigo);
                $("#dis_codigo").val(codigo)

            },
            error:function () {
                    
            }
        })
    }

});